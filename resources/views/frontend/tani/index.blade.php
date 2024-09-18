@include('frontend.layouts.header')

<section class="navbar justify-between py-6 px-16 items-center z-50 hidden md:flex">
    <div class="logo">
        <a class="text-2xl font-bold w-6" href="#">
            <img class="w-28" src="{{ asset('img/logo/logo-light.png') }}" alt="Logo">
        </a>
    </div>

    @auth
    <!-- User Dropdown -->
    <div class="relative">
        <button id="user-dropdown" class="bg-accent px-8 py-[0.8rem] text-white text-sm rounded-lg flex items-center justify-between">
            {{ Auth::user()->name }}
            <span class="ml-2">&#9662;</span>
        </button>

            <div id="dropdown-menu"
                class="absolute border rounded-lg mt-2 p-1 w-full bg-white dark:bg-zinc-900 dark:border-zinc-300 overflow-hidden transition-all duration-300"
                style="min-width: 150px; height: 0; opacity: 0; z-index: 999999999;">

                @can('is_farmer')
                    <a href="/dashboard-tani"
                        class="w-full text-left px-3 py-2 text-sm text-green-500 hover:bg-green-500 rounded-md hover:text-white flex items-center">
                        <i class="fa-solid fa-table-columns mr-2"></i>
                        Dashboard Tani
                    </a>
                @endcan

                <form id="logout-form" method="POST" action="{{ route('auth.logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full text-left px-3 py-2 text-sm text-red-500 hover:bg-red-500 rounded-md hover:text-white flex items-center">
                        <i class="fa-solid fa-sign-out-alt mr-2"></i>
                        Logout
                    </button>
                </form>
            </div>
        </div>
    @else
    <!-- Sign Up Button -->
    <div class="button flex items-center">
        <a class="px-8 py-[0.8rem] text-accent text-sm rounded-lg" href="/login">Sign In</a>
        <a class="bg-accent px-8 py-[0.8rem] text-white text-sm rounded-lg" href="/sign-up">Sign Up</a>
    </div>
    @endauth
</section>


<div class="min-h-screen bg-white dark:bg-zinc-950 flex justify-center p-4 mt-14 md:mt-0">
    <div id="container" class="w-full max-w-2xl bg-white dark:bg-zinc-950 rounded-3xl overflow-hidden flex flex-col">
        <div class="p-8 flex-grow overflow-hidden flex flex-col">
            <div id="content" class="text-center mb-12">
                <div class="w-16 h-16 bg-gray-200 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-gray-500 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                    </svg>
                </div>
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-2">Hi, {{ Auth::user()->name }}</h2>
                <p class="text-xl text-gray-600 mb-4">Can I help you with anything?</p>
                <p class="text-sm text-gray-500">Ready to assist you with anything you need, from answering questions to providing recommendations. Let's get started!</p>
            </div>

            <div id="chat" class="flex-grow overflow-y-auto mb-4 hidden"></div>

            <div id="cards" class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                <div class="bg-gray-50 dark:bg-zinc-900 rounded-xl p-4 hover:shadow-md transition-shadow duration-300">
                    <div class="w-8 h-8 bg-gray-200 rounded-full mb-3 flex items-center justify-center">
                        <svg class="w-4 h-4 text-gray-500 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-800 dark:text-white">Wanderlust Destinations 2024</h3>
                    <p class="text-xs text-gray-500 mt-1">Trending Now</p>
                </div>
                <div class="bg-gray-50 dark:bg-zinc-900 rounded-xl p-4 hover:shadow-md transition-shadow duration-300">
                    <div class="w-8 h-8 bg-gray-200 rounded-full mb-3 flex items-center justify-center">
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-800 dark:text-white">SayHalo AI: What Sets Us Apart</h3>
                    <p class="text-xs text-gray-500 mt-1">Trending Now</p>
                </div>
                <div class="bg-gray-50 dark:bg-zinc-900 rounded-xl p-4 hover:shadow-md transition-shadow duration-300">
                    <div class="w-8 h-8 bg-gray-200 rounded-full mb-3 flex items-center justify-center">
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-800 dark:text-white">Design Trends on TikTok 2024</h3>
                    <p class="text-xs text-gray-500 mt-1">Trending Now</p>
                </div>
            </div>

            <div class="relative">
                <input
                    id="userInput"
                    type="text"
                    placeholder="Ask SayHalo anything..."
                    class="w-full py-3 px-4 bg-gray-100 dark:bg-zinc-900 rounded-full text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-300"
                >
                <button
                    id="sendButton"
                    class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-accent text-white px-4 py-2 rounded-full text-sm hover:bg-accenttransition-colors duration-300"
                >
                    Send
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('container');
            const content = document.getElementById('content');
            const cards = document.getElementById('cards');
            const chat = document.getElementById('chat');
            const userInput = document.getElementById('userInput');
            const sendButton = document.getElementById('sendButton');

            gsap.from(container, { opacity: 0, duration: 1 });
            gsap.from(content, { y: 20, opacity: 0, duration: 0.8, delay: 0.5 });
            gsap.from(cards.children, {
                y: 30,
                opacity: 0,
                duration: 0.5,
                stagger: 0.2,
                delay: 1
            });
            gsap.from(userInput, { y: 20, opacity: 0, duration: 0.5, delay: 1.5 });

            function addMessage(type, message) {
                const messageDiv = document.createElement('div');
                messageDiv.className = `mb-4 ${type === 'user' ? 'text-right' : 'text-left'}`;
                messageDiv.innerHTML = `
                    <div class="inline-block p-3 rounded-lg ${type === 'user' ? 'bg-accent text-white' : 'bg-gray-200 text-gray-800'}">
                        ${message}
                    </div>
                `;
                chat.appendChild(messageDiv);

                // Ensure the chat always scrolls to the latest message
                setTimeout(() => {
                    chat.scrollTop = chat.scrollHeight;
                }, 100);
            }

            function handleSendMessage() {
                const message = userInput.value.trim();
                if (message === '') return;

                if (chat.children.length === 0) {
                    content.classList.add('hidden');
                    cards.classList.add('hidden');
                    chat.classList.remove('hidden');
                }

                addMessage('user', message);
                userInput.value = '';

                // Simulate AI response (replace with actual API call in production)
                setTimeout(() => {
                    addMessage('ai', `Thank you for your message: "${message}". How can I assist you further?`);
                }, 1000);
            }

            sendButton.addEventListener('click', handleSendMessage);
            userInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    handleSendMessage();
                }
            });

            // Always focus input for better UX
            userInput.focus();
        });
    </script>


@include('frontend.layouts.footer')

