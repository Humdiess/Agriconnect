<nav class="fixed top-0 left-1/2 transform -translate-x-1/2 py-4 z-30">
    <div class="menu items-center flex gap-6 py-4 dark:text-white px-6 rounded-xl dark:bg-zinc-900/80 backdrop-blur-lg border dark:border-zinc-600 border-gray-300">
        <ul class="flex gap-6 items-center">
            <li>
                <a href="/">Beranda</a>
            </li>
            <li>
                <a href="#about" onclick="lenis.scrollTo('#about')">Tentang Kami</a>
            </li>
            <li>
                <a href="#">Layanan Kami</a>
            </li>
            <li>
                <a href="#">Tani AI</a>
            </li>
            <li>
                <button id="theme-toggle" class="ml-2 p-2 rounded-full dark:bg-zinc-700 dark:hover:bg-zinc-600 hover:bg-gray-200 dark:text-white transition-colors">
                    <i id="theme-icon" class="fas fa-moon"></i>
                </button>
            </li>
        </ul>
    </div>
</nav>

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
