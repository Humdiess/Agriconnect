 <script>
     document.getElementById('profile-dropdown-toggle').addEventListener('click', function() {
         var dropdown = document.getElementById('profile-dropdown');
         dropdown.classList.toggle('hidden');
     });
     const sidebar = document.getElementById('sidebar');
     const sidebarToggle = document.getElementById('sidebar-toggle');
     const userMenuButton = document.getElementById('user-menu-button');
     const userMenu = document.getElementById('user-menu');
     const settingsMenuButton = document.getElementById('settings-menu-button');
     const settingsMenu = document.getElementById('settings-menu');
     const themeToggle = document.getElementById('theme-toggle');

     // Theme toggle functionality
     const currentTheme = localStorage.getItem('theme') || 'dark';
     document.documentElement.classList.toggle('dark', currentTheme === 'dark');

     themeToggle.addEventListener('click', () => {
         document.documentElement.classList.toggle('dark');
         const isDark = document.documentElement.classList.contains('dark');
         localStorage.setItem('theme', isDark ? 'dark' : 'light');
     });
     // Sidebar toggle functionality
     sidebarToggle.addEventListener('click', () => {
         sidebar.classList.toggle('hidden');
     });

     // User menu toggle functionality
     userMenuButton.addEventListener('click', () => {
         userMenu.style.display = userMenu.style.display === 'none' ? 'block' : 'none';
     });

     // Settings menu toggle functionality
     settingsMenuButton.addEventListener('click', () => {
         settingsMenu.style.display = settingsMenu.style.display === 'none' ? 'block' : 'none';
     });



     // Close menus when clicking outside
     document.addEventListener('click', (event) => {
         if (!userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
             userMenu.style.display = 'none';
         }
         if (!settingsMenuButton.contains(event.target) && !settingsMenu.contains(event.target)) {
             settingsMenu.style.display = 'none';
         }
     });

     // Responsive sidebar
     window.addEventListener('resize', () => {
         if (window.innerWidth >= 1024) {
             sidebar.classList.remove('hidden');
         } else {
             sidebar.classList.add('hidden');
         }
     });
 </script>

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
