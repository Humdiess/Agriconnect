<nav class="fixed top-0 left-1/2 transform -translate-x-1/2 py-3 z-30">
    <div class="menu items-center flex gap-6 py-4 px-6 rounded-xl bg-white/60 backdrop-blur-lg border border-gray-200">
        <ul class="flex gap-6 items-center">
            <li>
                <a href="home">Beranda</a>
            </li>
            <li>
                <a href="#about">Tentang Kami</a>
            </li>
            <li>
                <a href="#">Layanan Kami</a>
            </li>
            <li>
                <a href="#">Tani AI</a>
            </li>
        </ul>
    </div>
</nav>

<style>
    .menu {
        transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out, background-color 0.3s ease-in-out, border 0.3s ease-in-out;
    }

    .menu-hidden {
        transform: translateY(-100%);
        opacity: 0;
    }

    .menu-visible {
        transform: translateY(0);
        opacity: 1;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>

<script>
    let lastScrollPosition = 0;
    const menu = document.querySelector('.menu');

    window.addEventListener('scroll', function() {
        const currentScrollPosition = window.pageYOffset;

        if (currentScrollPosition === 0) {
            menu.classList.remove('menu-visible');
            menu.classList.remove('menu-hidden');
        } else if (currentScrollPosition > lastScrollPosition) {
            menu.classList.remove('menu-visible');
            menu.classList.add('menu-hidden');
        } else {
            menu.classList.remove('menu-hidden');
            menu.classList.add('menu-visible');
        }

        lastScrollPosition = currentScrollPosition;
    });
</script>
