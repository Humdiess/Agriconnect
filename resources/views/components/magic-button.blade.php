<button
    {{ $attributes->merge(['class' => "relative bg-transparent text-xl h-12 w-40 p-[1px] overflow-hidden $containerClassName"]) }}
    style="border-radius: {{ $borderRadius }};">
    <div class="absolute inset-0" style="border-radius: calc({{ $borderRadius }} * 0.96);">
        <div id="moving-border" class="h-20 w-20 opacity-[0.8] bg-[radial-gradient(theme('colors.sky.500')_40%,transparent_60%)] {{ $borderClassName }}"></div>
    </div>
    <div class="relative bg-blue-600 dark:bg-zinc-900 border border-blue-600 dark:border-slate-800 backdrop-blur-xl text-white flex items-center justify-center w-full h-full text-sm antialiased {{ $className }}"
         style="border-radius: calc({{ $borderRadius }} * 0.96);">
        {{ $slot }}
    </div>
</button>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const movingBorder = document.getElementById('moving-border');
        const duration = {{ $duration ?? 2000 }};

        let startTime;
        function animateBorder(time) {
            if (!startTime) startTime = time;
            const elapsed = time - startTime;
            const percent = (elapsed % duration) / duration;
            const offsetX = Math.sin(percent * 2 * Math.PI) * 50;
            const offsetY = Math.cos(percent * 2 * Math.PI) * 50;

            movingBorder.style.transform = `translate(${offsetX}px, ${offsetY}px) translate(-50%, -50%)`;

            requestAnimationFrame(animateBorder);
        }

        requestAnimationFrame(animateBorder);
    });
</script>
