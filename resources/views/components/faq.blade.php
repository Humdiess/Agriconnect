@php
$faqs = [
    [
        'id-toggle' => 'toggle-1',
        'question' =>
            'Apa itu AgriConnect dan bagaimana ini bisa membantu saya sebagai petani?',
        'answer' =>
            'AgriConnect adalah platform yang menghubungkan petani dengan teknologi seperti kecerdasan buatan (AI) dan Internet of Things (IoT), serta membuka akses ke pasar digital. Platform ini dirancang untuk membantu petani mengelola lahan dengan lebih efisien, memprediksi cuaca, serta menemukan harga pasar yang lebih baik.',
    ],
    [
        'id-toggle' => 'toggle-2',
        'question' =>
            'Saya petani kecil di pedesaan, apakah saya bisa menggunakan teknologi AgriConnect?',
        'answer' =>
            'Ya, AgriConnect dirancang agar mudah diakses oleh petani dari berbagai skala usaha, termasuk petani kecil. Kami menyediakan teknologi yang mudah digunakan dan bisa disesuaikan dengan kebutuhan Anda, baik untuk memantau lahan, memprediksi cuaca, atau menjual hasil panen langsung ke pasar digital.',
    ],
    [
        'id-toggle' => 'toggle-3',
        'question' => 'Bagaimana Tani AI bisa membantu saya di ladang?',
        'answer' =>
            'Tani AI menggunakan data seperti cuaca, kondisi tanah, dan pola tanaman untuk memberikan saran terbaik kepada Anda. Dengan Tani AI, Anda bisa mengetahui kapan waktu terbaik untuk menanam, berapa banyak air yang dibutuhkan tanaman, serta peringatan dini jika ada ancaman hama atau penyakit.',
    ],

];
@endphp

<div x-data="{
    activeAccordion: '',
    setActiveAccordion(id) {
        this.activeAccordion = (this.activeAccordion == id) ? '' : id
    }
}" class="relative w-full mx-auto overflow-hidden text-sm font-normal bg-white/40 dark:bg-ireng/40 backdrop-blur-lg dark:text-white border dark:border-zinc-700 divide-y dark:divide-zinc-700 rounded-md">

@foreach ($faqs as $faq)
<div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
    <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
        <span>{{ $faq['question'] }}</span>
        <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
    </button>
    <div x-show="activeAccordion==id" x-collapse x-cloak>
        <div class="p-4 pt-0 opacity-70">
            {{ $faq['answer'] }}
        </div>
    </div>
</div>
@endforeach


</div>
