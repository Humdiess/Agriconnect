


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/cff8b87f33.js" crossorigin="anonymous"></script>
<script>
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');

    const currentTheme = localStorage.getItem('theme') || 'dark';
    document.documentElement.classList.toggle('dark', currentTheme === 'dark');
    themeIcon.classList = currentTheme === 'dark' ? 'fas fa-moon' : 'fas fa-sun';

    themeToggle.addEventListener('click', () => {
        document.documentElement.classList.toggle('dark');

        if (document.documentElement.classList.contains('dark')) {
            themeIcon.classList = 'fas fa-moon';
            localStorage.setItem('theme', 'dark');
        } else {
            themeIcon.classList = 'fas fa-sun';
            localStorage.setItem('theme', 'light');
        }
    });
</script>
{{-- gsap --}}

@include('frontend.components.gsap')
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/auth-gsap.js') }}"></script>
@include('sweetalert::alert')
</body>

</html>
