document.addEventListener("DOMContentLoaded", () => {
    // Register ScrollTrigger plugin
    gsap.registerPlugin(ScrollTrigger);

    // Get scroll amount for horizontal scrolling
    const races = document.querySelector(".story");
    function getScrollAmount() {
        const racesWidth = races.scrollWidth;
        return -(racesWidth - window.innerWidth);
    }

    const tween = gsap.to(races, {
        x: getScrollAmount,
        duration: 3,
        ease: "none",
    });

    ScrollTrigger.create({
        trigger: ".storyWrapper",
        start: "top 0%",
        end: () => `+=${getScrollAmount() * -1}`,
        pin: true,
        animation: tween,
        scrub: 1,
        invalidateOnRefresh: true,
    });

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

    gsap.from(".hero-button", {
        y: 100,
        opacity: 0,
        duration: 1.5,
        delay: 0.5,
        scrollTrigger: {
            trigger: ".hero-button",
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
        // scroll marker
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

    gsap.from(".story h2", {
        y: 50,
        opacity: 0,
        duration: 1,
        stagger: 0.2,
        scrollTrigger: {
            trigger: ".story",
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

