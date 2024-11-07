<div x-data="{
    dropdownOpen: false
}" class="relative">

    <button @click="dropdownOpen=true"
        class="inline-flex items-center justify-center text-sm font-medium transition-colors border rounded-full text-neutral-700 hover:bg-neutral-100  focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
        <img src="https://cdn.devdojo.com/images/may2023/adam.jpeg"
            class="object-cover w-8 h-8 border rounded-full border-neutral-200" />
    </button>

    <div x-show="dropdownOpen" @click.away="dropdownOpen=false" x-transition:enter="ease-out duration-200"
        x-transition:enter-start="-translate-y-2" x-transition:enter-end="translate-y-0"
        class="absolute top-0 z-50 w-56 mt-12 -translate-x-1/2 left-2" x-cloak>
        <div
            class="p-1 mt-1 bg-white dark:bg-ireng/75 backdrop-blur-md border rounded-md shadow-md dark:border-zinc-700 text-neutral-700 dark:text-white">
            <div class="px-2 py-1.5 text-sm font-semibold">My Account</div>
            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
            <a href="#_"
                class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="w-4 h-4 mr-2">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <span>Profile</span>
                <span class="ml-auto text-xs tracking-widest opacity-60">⇧⌘P</span>
            </a>
            <a href="#_"
                class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="w-4 h-4 mr-2">
                    <path
                        d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                    </path>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <span>Settings</span>
                <span class="ml-auto text-xs tracking-widest opacity-60">⌘S</span>
            </a>
            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
            <form action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <button
                    class="relative flex cursor-pointer hover:bg-red-500 hover:text-white w-full items-center rounded px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="w-4 h-4 mr-2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" x2="9" y1="12" y2="12"></line>
                    </svg>
                    <span>Log out</span>
                </button>
            </form>
        </div>
    </div>
</div>
