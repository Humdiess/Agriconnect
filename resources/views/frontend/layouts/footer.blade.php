<!-- Footer Section -->
<footer class=" text-zinc-900 dark:text-white py-10 mt-[8rem]">
    <div class="container mx-auto px-6 md:px-12 lg:px-16">
        <!-- Footer Top -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
            <!-- Footer Logo and Description -->
            <div class="footer-logo mb-6 md:mb-0 flex flex-col items-center md:items-start">
                <a href="#" class="flex items-center">
                    <img class="w-28 block dark:hidden" src="{{ asset('img/logo/logo-light.png') }}" alt="Logo">
                    <img class="w-28 hidden dark:block" src="{{ asset('img/logo/logo-dark.png') }}" alt="Logo">
                    <span class="text-2xl font-bold ml-3">AgriConnect</span>
                </a>
                <p class="mt-3 text-center md:text-left">Connecting farmers with modern technology and digital markets
                    to enhance agricultural productivity and sustainability.</p>
            </div>

            <!-- Footer Links -->
            <div class="footer-links">
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-accent transition">Home</a></li>
                    <li><a href="#about" class="hover:text-accent transition">About Us</a></li>
                    <li><a href="#about" class="hover:text-accent transition">Services</a></li>
                    <li><a href="/contact" class="hover:text-accent transition">Contact</a></li>
                </ul>
            </div>

            <!-- Footer Social Media -->
            <div class="footer-social">
                <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="https://web.facebook.com/" target="_blank" class="hover:text-accent transition">
                        <i class="fab fa-facebook-f fa-2x"></i>
                    </a>
                    <a href="https://x.com/" target="_blank" class="hover:text-accent transition">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="hover:text-accent transition">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank" class="hover:text-accent transition">
                        <i class="fab fa-linkedin-in fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<button id="backToTop"
    class="fixed bottom-8 right-8 p-4 bg-green-500 text-white rounded-full shadow-lg opacity-0 pointer-events-none">
    ⬆ Back to Top
</button>

    <script>
    document.querySelectorAll('.accordion-toggle').forEach((button) => {
        button.addEventListener('click', function() {
            const accordion = this.parentElement;
            accordion.classList.toggle('active');
        });
    });
</script>

<script src="{{ asset('js/navbar.js') }}"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/cff8b87f33.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script>

{{-- gsap --}}

{{-- @include('frontend.components.gsap') --}}'

@include('frontend.components.gsap')
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/gsap.js') }}"></script>
<script src="{{ asset('js/preload.js') }}"></script>
@include('sweetalert::alert')

    <script>
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
    </script>
</body>

</html>
