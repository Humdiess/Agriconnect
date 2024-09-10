

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/cff8b87f33.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>

    @include('frontend.components.gsap')
    <script>
        AOS.init({
            duration: 1000, // Duration for animations
            delay: 200,     // Delay before animations start
            easing: 'ease-out', // Easing for smooth animations
        });

        const races = document.querySelector(".races");
        console.log(races.offsetWidth)

        function getScrollAmount() {
        	let racesWidth = races.scrollWidth;
        	return -(racesWidth - window.innerWidth);
        }

        const tween = gsap.to(races, {
        	x: getScrollAmount,
        	duration: 3,
        	ease: "none",
        });


        ScrollTrigger.create({
        	trigger:".racesWrapper",
        	start:"top 0%",
        	end: () => `+=${getScrollAmount() * -1}`,
        	pin:true,
        	animation:tween,
        	scrub:1,
        	invalidateOnRefresh:true,
        })
    </script>
</body>
</html>
