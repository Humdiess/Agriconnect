<nav class="fixed top-0 left-1/2 transform -translate-x-1/2 py-4 z-30">
    <div
        class="menu items-center flex gap-6 py-4 dark:text-white px-6 rounded-xl dark:bg-zinc-900/80 backdrop-blur-lg border dark:border-zinc-600 border-gray-300">
        <ul class="flex gap-6 items-center">
            <li>
                <a class="hidden md:block text-sm {{ $active == 'home' ? 'text-accent' : '' }}" href="/">Beranda</a>
                <a class="block md:hidden" href="/">
                    <i class="fa-solid fa-house"></i>
                </a>
            </li>
            <li>
                <a class="hidden md:block text-sm {{ $active == 'agrishop' ? 'text-accent' : '' }}" href="/agrishop">Agri
                    Shop</a>
                <a class="block md:hidden" href="/agrishop">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </li>
            <li>
                <a class="hidden md:block text-sm {{ $active == 'tani-ai' ? 'text-accent' : '' }}"
                    href="{{ route('tani') }}" id="tani-ai">Tani AI</a>
                <a class="block md:hidden" href="{{ route('tani') }}">
                    <i class="fa-solid fa-wand-sparkles"></i>
                </a>
            </li>
            <li>
                <a class="hidden md:block text-sm {{ $active == 'blog' ? 'text-accent' : '' }}"
                    href="{{ route('blog') }}">Agri News</a>
                <a class="block md:hidden" href="/blog">
                    <i class="fa-solid fa-newspaper"></i>
                </a>
            </li>
            <li>
                <a class="hidden md:block text-sm {{ $active == 'contact' ? 'text-accent' : '' }}"
                    href="/contact">Hubungi Kami</a>
                <a class="block md:hidden" href="/contact">
                    <i class="fa-solid fa-phone"></i>
                </a>
            </li>
            <li class="block md:hidden">
                <a href="{{ route('auth.login') }}" class="md:text-white text-zinc-900 dark:text-white text-sm">
                    <i class="fa-solid fa-user"></i>
                </a>
            </li>
            <li>
                <button id="theme-toggle"
                    class="md:ml-2 md:px-2 rounded-full dark:bg-zinc-700 dark:hover:bg-zinc-600 hover:bg-gray-200 dark:text-white transition-colors">
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
