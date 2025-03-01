

<div id="alert-box" class="rounded-lg w-[600px] h-32 bg-[#c70606] text-[#ffffff]">
    <div class="flex flex-row w-full gap-5 justify-center items-center px-5 w-full h-full">
        <div class="my-auto text-2xl">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x-circle">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="m15 9-6 6"></path>
                <path d="m9 9 6 6"></path>
            </svg>
        </div>
        <div>
            <div class="font-bold text-2xl">{{ $title }}</div>
            <div class="text-lg">{{ $slot }}</div>
        </div>
    </div>
</div>


<script>
    // Set timeout to hide the alert after 5 seconds (5000 milliseconds)
    setTimeout(function() {
        var alertBox = document.getElementById('alert-box');
        if (alertBox) {
            alertBox.style.display = 'none';
        }
    }, 5000); // 5000 ms = 5 detik
</script>
{{-- <x-alert-danger title="Error Occurred!">
    Something went wrong. Please try again.
</x-alert-danger> --}}
