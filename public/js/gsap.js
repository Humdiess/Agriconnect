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

    // GSAP and Scroll Behavior
    const backToTopButton = document.getElementById('backToTop');

    // Function to show the button
    const showButton = () => {
        gsap.to(backToTopButton, { opacity: 1, visibility: "visible", duration: 0.5, ease: "power2.out" });
        backToTopButton.classList.add('show');
    };

    // Function to hide the button
    const hideButton = () => {
        gsap.to(backToTopButton, { opacity: 0, visibility: "hidden", duration: 0.5, ease: "power2.out" });
        backToTopButton.classList.remove('show');
    };

    // Scroll listener to trigger the button visibility
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            showButton();
        } else {
            hideButton();
        }
    });

    // Smooth scroll back to top
    backToTopButton.addEventListener('click', () => {
        gsap.to(window, { scrollTo: { y: 0 }, duration: 1, ease: "power2.inOut" });
    });

    gsap.to("#tani-ai", {
        duration: 1.5,
        repeat: -1,
        yoyo: true,
        ease: "power1.inOut",
        color: "#f00",  // Change text color to red during animation
        textShadow: "0px 0px 10px rgba(255, 0, 0, 0.7)",  // Add glowing effect
    });



