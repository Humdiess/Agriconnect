@include('templates.header')

<div class="bg-ireng/25 backdrop-blur-lg p-4 fixed left-0 right-0 w-full border-b border-zinc-700 z-50 md:hidden">
    <div class="w-fit">
        <label for="sidebar-mobile-fixed" class="btn bg-ireng/35 backdrop-blur-lg border border-zinc-700 sm:hidden">
            <i class="fas fa-bars"></i>
        </label>
    </div>
</div>
<div class="flex flex-row sm:gap-3 pt-8 md:pt-0">
	<div class="sm:w-full sm:max-w-[18rem]">
		<input type="checkbox" id="sidebar-mobile-fixed" class="sidebar-state" />
		<label for="sidebar-mobile-fixed" class="sidebar-overlay"></label>
		<aside class="sidebar sidebar-fixed-left sidebar-mobile h-full justify-start max-sm:fixed max-sm:-translate-x-full bg-white dark:bg-ireng border-r border-zinc-700">
			<section class="sidebar-title items-center p-4">
                <img src="{{ asset('img/logo/app-logo.png') }}" alt="logo" class="h-10 w-10 rounded-full">
				<div class="flex flex-col ml-4">
					<span>Agriconnect</span>
					<span class="text-xs font-normal text-content2">Petani tebu</span>
				</div>
			</section>
			<section class="sidebar-content">
				<nav class="menu rounded-md">
					<section class="menu-section px-4">
						<ul class="menu-items">
							<li class="menu-item hover:bg-gray-800">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
									<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
								</svg>
								<a href="{{ route('petani.index') }}">Dashboard</a>
							</li>
							<li>
								<input type="checkbox" id="menu-1" class="menu-toggle" />
								<label class="menu-item justify-between hover:bg-gray-800" for="menu-1">
									<div class="flex gap-2 ">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
											<path stroke-linecap="round" stroke-linejoin="round" d="M3 3v18h18M3 12h18M8 6v6m4-6v6m4-6v6" />
										</svg>
										<span>Pantau Lahan</span>
									</div>

									<span class="menu-icon">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
										</svg>
									</span>
								</label>

								<div class="menu-item-collapse">
									<div class="min-h-0">
										<label class="menu-item menu-item-disabled ml-6">Pantau lahan</label>
										<a href="{{ route('pantau.air') }}" class="menu-item ml-6 hover:bg-gray-800">Irigasi</a>
										<a href="{{ route('pantau.suhu') }}" class="menu-item ml-6 hover:bg-gray-800">Suhu Lahan</a>
										<a href="{{ route('pantau.kelembapan') }}" class="menu-item ml-6 hover:bg-gray-800">Kelembapan </a>
										<a href="{{ route('pantau.nutrisi') }}" class="menu-item ml-6 hover:bg-gray-800">Nutrisi Tanaman</a>
										<a href="{{ route('pantau.curah-hujan') }}" class="menu-item ml-6 hover:bg-gray-800">Curah hujan</a>
										<a href="{{ route('pantau.tanggal') }}" class="menu-item ml-6 hover:bg-gray-800">Tanggal tanam <span class="badge badge-flat-success">AI Powered</span></a>
									</div>
								</div>
							</li>
                            <li class="menu-item hover:bg-gray-800">
								<svg xmlns="http://www.w3.org/2000/svg" class="opacity-75" width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
									<path d="M7 10l5 -6l5 6"></path>
									<path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path>
									<path d="M12 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
								</svg>
								Products
							</li>
						</ul>
					</section>
				</nav>
			</section>
			<section class="sidebar-footer justify-end pt-2 dark:bg-ireng bg-white dark:text-white">
				<div class="divider my-0"></div>
				<div class="dropdown z-50 flex h-fit w-full cursor-pointer hover:bg-gray-800">
					<label class="whites mx-2 flex h-fit w-full cursor-pointer p-0 hover:bg-gray-800" tabindex="0">
						<div class="flex flex-row gap-4 p-4">
							<div class="avatar-square avatar avatar-md">
								<img src="https://i.pravatar.cc/150?img=30" alt="avatar" />
							</div>

							<div class="flex flex-col">
								<span>{{ Auth::user()->name }}</span>
							</div>
						</div>
					</label>
					<div class="dropdown-menu-right-top dropdown-menu ml-2 bg-ireng border border-zinc-800">
						<a href="{{ route('home') }}" class="dropdown-item text-sm hover:bg-gray-800">Kembali ke beranda</a>
						<a tabindex="-1" class="dropdown-item text-sm hover:bg-gray-800">Account settings</a>
                        <form action="{{ route('auth.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item text-sm hover:bg-gray-800 text-red-600">Logout</button>
                        </form>
					</div>
				</div>
			</section>
		</aside>
	</div>
	<div class="flex w-full flex-col p-4">


		<div class="my-4">
            @yield('content')
		</div>
	</div>
</div>

<style>
    /* no scrollbar */
    .scrollbar-hide {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    /* The switch - the outer container */
    .switch {
        position: relative;
        display: inline-block;
        width: 40px;
        height: 20px;
    }

    /* The slider - the round button */
    .switch .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
        border-radius: 34px;
    }

    .switch .slider:before {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        left: 4px;
        bottom: 2px;
        background-color: white;
        transition: .4s;
        border-radius: 50%;
    }

    /* Checked - dark mode */
    input:checked+.slider {
        background-color: #4a5568;
        /* Darker color */
    }

    input:checked+.slider:before {
        transform: translateX(20px);
    }

    /* Rounded switch */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Theme Toggle
    const themeToggle = document.getElementById('theme-toggle');
    if (localStorage.getItem('theme') === 'dark') {
        document.documentElement.classList.add('dark');
        themeToggle.checked = true;
    }
    themeToggle.addEventListener('change', () => {
        document.documentElement.classList.toggle('dark', themeToggle.checked);
        localStorage.setItem('theme', themeToggle.checked ? 'dark' : 'light');
    });

    // Profile Dropdown Toggle
    const profileDropdownToggle = document.getElementById('profile-dropdown-toggle');
    const profileDropdown = document.getElementById('profile-dropdown');

    // Toggle dropdown visibility
    profileDropdownToggle.addEventListener('click', (e) => {
        e.stopPropagation();  // Prevent the click from closing the dropdown immediately
        profileDropdown.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (event) => {
        if (!profileDropdown.contains(event.target) && !profileDropdownToggle.contains(event.target)) {
            profileDropdown.classList.add('hidden');
        }
    });

    // Dropdown Toggle Helper Function
    const toggleDropdown = (buttonId, dropdownId, stateKey) => {
        const button = document.getElementById(buttonId);
        const dropdown = document.getElementById(dropdownId);
        const isOpen = localStorage.getItem(stateKey) === 'true';

        // Set the initial state based on localStorage
        if (isOpen) {
            dropdown.classList.remove('hidden');
        }

        button.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent the click from closing the dropdown immediately
            const shouldBeOpen = dropdown.classList.toggle('hidden');
            localStorage.setItem(stateKey, !shouldBeOpen);
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (event) => {
            if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.classList.add('hidden');
                localStorage.setItem(stateKey, false);
            }
        });
    };

    // Pantau Dropdown - Keep its state persistent across pages
    toggleDropdown('pantau-dropdown-toggle', 'pantau-dropdown', 'pantauDropdownOpen');

    // Mobile Menu
    const mobileMenu = {
        button: document.getElementById('mobile-menu-toggler'),
        menu: document.getElementById('menu-mobile'),
        closeButton: document.getElementById('close-menu'),
        backdrop: document.getElementById('backdrop'),

        open() {
            this.menu.classList.replace('-left-64', 'left-0');
            this.backdrop.classList.remove('hidden');
        },
        close() {
            this.menu.classList.replace('left-0', '-left-64');
            this.backdrop.classList.add('hidden');
        },
        init() {
            this.button.addEventListener('click', () => this.open());
            this.closeButton.addEventListener('click', () => this.close());
            this.backdrop.addEventListener('click', () => this.close());
        }
    };

    mobileMenu.init();
});

</script>


@include('templates.footer')
