document.addEventListener("DOMContentLoaded", () => {
    const lenis = new Lenis()

    console.log(lenis)


    lenis.on('scroll', ScrollTrigger.update)

    gsap.ticker.add((time)=>{
      lenis.raf(time * 1000)
    })

    gsap.ticker.lagSmoothing(0)

    // Register ScrollTrigger plugin
    gsap.registerPlugin(ScrollTrigger);

    // Aurora Effects Animation
    gsap.to(".aurora-green", {
        scale: 1.2,
        duration: 5,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });

    // Hero Section Animations
    gsap.from(".hero-title", {
        y: 100,
        duration: 1.5,
        scrollTrigger: {
            trigger: ".hero-title",
            start: "top 80%",
            end: "bottom 40%",
            scrub: true
        }
    });

    gsap.from(".hero-image", {
        scale: 0.9,
        duration: 1.2,
        scrollTrigger: {
            trigger: ".hero-image",
            start: "top 80%",
            end: "bottom 40%",
            scrub: true,
        },
    });

    // // About Section Animations
    // gsap.from(".about-header", {
    //     y: 100,
    //     opacity: 0,
    //     duration: 1.5,
    //     scrollTrigger: {
    //         trigger: ".about-header",
    //         start: "top 80%",
    //         end: "bottom 40%",
    //         scrub: true
    //     }
    // });
});

let posX = 0;
let posY = 0;

let mouseX = 0;
let mouseY = 0;

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




