
<button id="backToTop" class="fixed bottom-8 right-8 p-4 bg-green-500 text-white rounded-full shadow-lg opacity-0 pointer-events-none">
    ⬆ Back to Top
</button>

    <script>
            // JavaScript to toggle accordion active class
    document.querySelectorAll('.accordion-toggle').forEach((button) => {
      button.addEventListener('click', function () {
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

    {{-- @include('frontend.components.gsap') --}}
    @include('frontend.components.gsap')
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/gsap.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
