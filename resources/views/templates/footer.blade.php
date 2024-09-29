
    </div>

 <script>
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

     document.querySelectorAll('.accordion-toggle').forEach((button) => {
         button.addEventListener('click', function() {
             const accordion = this.parentElement;
             accordion.classList.toggle('active');
         });
     });
 </script>


 <script src="https://kit.fontawesome.com/cff8b87f33.js" crossorigin="anonymous"></script>


 @include('frontend.components.gsap')
 <script src="{{ asset('js/preload.js') }}"></script>
 @include('sweetalert::alert')

 <script>

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
 </script>
 </body>

 </html>
