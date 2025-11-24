@extends('templates.main')

@section('content')
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white">
    <div class="container mx-auto px-4 py-8">
        <div class="shadow-lg rounded-lg overflow-hidden border dark:border-zinc-600 bg-white dark:bg-gray-800">
            <div class="px-6 py-6 sm:p-8">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Scan Tanaman dengan Kamera</h3>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">Gunakan kamera perangkat Anda untuk memindai tanaman dan mendapatkan hasil analisis singkat.</p>

                <div class="mt-6">
                    <!-- Live Preview Kamera -->
                    <div class="relative rounded-lg overflow-hidden">
                        <video id="camera" autoplay playsinline class="w-full h-64 rounded-lg bg-gray-200"></video>
                        <div id="cameraOverlay" class="absolute inset-0 bg-black bg-opacity-30 hidden"></div>
                        <div id="loadingSpinner" class="absolute inset-0 flex items-center justify-center hidden">
                            <div class="loader border-t-4 border-accent border-solid rounded-full w-12 h-12"></div>
                        </div>
                    </div>

                    <!-- Tombol Ambil Gambar -->
                    <button id="captureButton"
                        class="mt-6 w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-md text-sm font-medium rounded-md text-white bg-accent hover:bg-accent-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent">
                        Ambil Gambar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Pop-Up -->
    <div id="analysisModal"
        class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 hidden transition-opacity">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-11/12 sm:w-2/3 lg:w-1/3 p-6">
            <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Hasil Analisis:</h4>
            <ul id="analysisList" class="space-y-3 text-sm text-gray-700 dark:text-gray-300">
                <!-- Hasil analisis akan muncul di sini -->
            </ul>
            <div class="mt-6 flex justify-end">
                <button id="closeModalButton"
                    class="py-2 px-4 bg-red-600 text-white rounded-lg shadow-md hover:bg-red-700 transition-all duration-300">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <style>
        .loader {
            border-width: 4px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .bg-accent {
            background-color: #4F46E5;
        }

        .bg-accent-dark {
            background-color: #4338CA;
        }
    </style>

    <script>
        const camera = document.getElementById('camera');
        const captureButton = document.getElementById('captureButton');
        const analysisModal = document.getElementById('analysisModal');
        const closeModalButton = document.getElementById('closeModalButton');
        const analysisList = document.getElementById('analysisList');
        const loadingSpinner = document.getElementById('loadingSpinner');
        const cameraOverlay = document.getElementById('cameraOverlay');

        // Aktifkan kamera
        if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            navigator.mediaDevices.getUserMedia({ video: { facingMode: 'environment' } })
                .then(stream => {
                    camera.srcObject = stream;
                })
                .catch(error => {
                    console.error('Gagal mengakses kamera:', error);
                    alert('Kamera tidak tersedia. Pastikan izin kamera diberikan.');
                });
        }

        // Ambil gambar dan kirim ke server
        captureButton.addEventListener('click', () => {
            // Tampilkan overlay loading
            cameraOverlay.classList.remove('hidden');
            loadingSpinner.classList.remove('hidden');
            captureButton.disabled = true;
            captureButton.innerText = 'Menganalisis...';

            // Buat canvas untuk mengambil gambar dari video
            const canvas = document.createElement('canvas');
            canvas.width = camera.videoWidth;
            canvas.height = camera.videoHeight;
            const context = canvas.getContext('2d');
            context.drawImage(camera, 0, 0, canvas.width, canvas.height);

            // Konversi canvas ke Blob
            canvas.toBlob(blob => {
                const formData = new FormData();
                formData.append('image', blob, 'capture.jpg');
                formData.append('_token', '{{ csrf_token() }}');

                // Kirim ke server
                fetch('{{ route("petani.analyze") }}', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    analysisList.innerHTML = ''; // Hapus hasil sebelumnya
                    
                    if (data.error) {
                        const li = document.createElement('li');
                        li.className = 'text-red-500';
                        li.innerText = data.error;
                        analysisList.appendChild(li);
                    } else {
                        // Format hasil (Markdown simple conversion if needed, or just text)
                        // Memecah teks menjadi poin-poin jika memungkinkan, atau tampilkan paragraf
                        const li = document.createElement('li');
                        li.innerHTML = data.text.replace(/\n/g, '<br>');
                        analysisList.appendChild(li);
                    }

                    analysisModal.classList.remove('hidden');
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat menganalisis gambar.');
                })
                .finally(() => {
                    cameraOverlay.classList.add('hidden');
                    loadingSpinner.classList.add('hidden');
                    captureButton.disabled = false;
                    captureButton.innerText = 'Ambil Gambar';
                });
            }, 'image/jpeg', 0.8);
        });

        // Tutup modal
        closeModalButton.addEventListener('click', () => {
            analysisModal.classList.add('hidden');
        });
    </script>
@endsection
