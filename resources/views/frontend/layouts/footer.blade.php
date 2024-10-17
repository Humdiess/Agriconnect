<x-user-footer />

<script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/MotionPathPlugin.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/cff8b87f33.js" crossorigin="anonymous"></script>
@include('frontend.components.gsap')
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/gsap.js') }}"></script>
<script src="{{ asset('js/preload.js') }}"></script>
@include('sweetalert::alert')


<script>
    const container = document.querySelector('.hero-image');
    const circle = document.getElementById('glowCircle');

    function animateCircle() {
      const rect = container.getBoundingClientRect();
      const width = rect.width - circle.offsetWidth;
      const height = rect.height - circle.offsetHeight;

      // Reset animation
      gsap.set(circle, { x: 0, y: 0 });

      // Create timeline
      const tl = gsap.timeline({ repeat: -1 });

      // Animate along the borders
      tl.to(circle, { x: width, duration: 2, ease: "none" })
        .to(circle, { y: height, duration: 2, ease: "none" })
        .to(circle, { x: 0, duration: 2, ease: "none" })
        .to(circle, { y: 0, duration: 2, ease: "none" });
    }

    // Initial animation
    animateCircle();

    // Handle window resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(animateCircle, 100);
    });
    // Initialize Lenis
    const lenis = new Lenis();

    // GSAP cursor animation
    gsap.to(".cursor-example", {
        duration: 0.018,
        repeat: -1,
        onRepeat: () => {
            posX += (mouseX - posX) / 8;
            posY += (mouseY - posY) / 8;

            gsap.set(".cursor-example", {
                css: {
                    left: posX - 1,
                    top: posY - 2
                }
            });
        }
    });

    document.addEventListener("mousemove", (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });

    // Synchronize Lenis scrolling with GSAP's ScrollTrigger plugin
    lenis.on('scroll', ScrollTrigger.update);

    // Add Lenis's requestAnimationFrame (raf) method to GSAP's ticker
    gsap.ticker.add((time) => {
        lenis.raf(time * 1000); // Convert time from seconds to milliseconds
    });

    // Disable lag smoothing in GSAP to prevent any delay in scroll animations
    gsap.ticker.lagSmoothing(0);
</script>
</body>

</html>
