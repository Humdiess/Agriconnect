<x-user-footer />

<script src="{{ asset('js/navbar.js') }}"></script>
<script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script> 
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/cff8b87f33.js" crossorigin="anonymous"></script>
@include('frontend.components.gsap')
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/gsap.js') }}"></script>
<script src="{{ asset('js/preload.js') }}"></script>
@include('sweetalert::alert')
 

<script>
    // // Initialize Lenis
    // const lenis = new Lenis();

    // // Listen for the scroll event and log the event data
    // lenis.on('scroll', (e) => {
    //   console.log(e);
    // });

    // // Use requestAnimationFrame to continuously update the scroll
    // function raf(time) {
    //   lenis.raf(time);
    //   requestAnimationFrame(raf);
    // }

    // requestAnimationFrame(raf);


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

    // Initialize a new Lenis instance for smooth scrolling
    const lenis = new Lenis();

    // Listen for the 'scroll' event and log the event data to the console
    // lenis.on('scroll', (e) => {
    // console.log(e);
    // });

    // Synchronize Lenis scrolling with GSAP's ScrollTrigger plugin
    lenis.on('scroll', ScrollTrigger.update);

    // Add Lenis's requestAnimationFrame (raf) method to GSAP's ticker
    // This ensures Lenis's smooth scroll animation updates on each GSAP tick
    gsap.ticker.add((time) => {
    lenis.raf(time * 1000); // Convert time from seconds to milliseconds
    });

    // Disable lag smoothing in GSAP to prevent any delay in scroll animations
    gsap.ticker.lagSmoothing(0);

</script>
</body>

</html>
