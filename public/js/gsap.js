document.addEventListener("DOMContentLoaded", () => {
    const lenis = new Lenis()

    lenis.on('scroll', (e) => {
      console.log(e)
    })

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
        opacity: 0,
        duration: 1.5,
        scrollTrigger: {
            trigger: ".hero-title",
            start: "top 80%",
            end: "bottom 40%",
            scrub: true
        }
    });

    gsap.from(".hero-image", {
        scale: 0.8,
        opacity: 0.9,
        duration: 1.5,
        scrollTrigger: {
            trigger: ".hero-image",
            start: "top 80%",
            end: "bottom 40%",
            scrub: true,
        },
    });

    // About Section Animations
    gsap.from(".about-header", {
        y: 100,
        opacity: 0,
        duration: 1.5,
        scrollTrigger: {
            trigger: ".about-header",
            start: "top 80%",
            end: "bottom 40%",
            scrub: true
        }
    });
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

const dropdownButton = document.getElementById('user-dropdown');
const dropdownMenu = document.getElementById('dropdown-menu');
let isDropdownOpen = false;

dropdownButton.addEventListener('click', function () {
    if (!isDropdownOpen) {
        gsap.to(dropdownMenu, {
            duration: 0.3,
            height: 'auto',
            opacity: 1,
            ease: 'power1.out',
        });
    } else {
        gsap.to(dropdownMenu, {
            duration: 0.3,
            height: 0,
            opacity: 0,
            ease: 'power1.in',
        });
    }
    isDropdownOpen = !isDropdownOpen;
});

// SplitText untuk memecah teks menjadi kata-kata atau karakter
const splitText = new SplitText("#hero-title-animated", { type: "chars, words" });

// Animasi menggunakan GSAP untuk setiap karakter
gsap.from(splitText.chars, {
    opacity: 0,
    y: 50,
    stagger: 0.05,
    duration: 1,
    ease: "back.out(1.7)"
});

// ScrambleText untuk efek pengacakan teks
gsap.to("#hero-title-animated", {
    text: "Agriculture",
    scrambleText: { chars: "upperCase", revealDelay: 0.5 },
    duration: 2,
    delay: 2,
    ease: "power2.inOut"
});
