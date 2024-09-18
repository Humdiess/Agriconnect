@include('frontend.layouts.header')

<x-navbar />

<div class="min-h-screen flex justify-center p-4 mt-14 md:mt-0">
    <div id="container" class="w-full max-w-2xl rounded-3xl overflow-hidden flex flex-col">
        <div class="p-8 flex-grow overflow-hidden flex flex-col">
            <div id="content" class="text-center mb-12">
                <div class="w-16 h-16 bg-gray-200 rounded-full pt-4 overflow-hidden mx-auto mb-4 flex items-center justify-center">
                    <img src="{{ asset('img/ask-ai.png') }}" alt="ai-bot">
                </div>
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-2">Hi, {{ Auth::user()->name }}</h2>
                <p class="text-xl text-gray-600 dark:text-white mb-4">Tanya tentang pertanian Indonesia!</p>
                <p class="text-sm text-gray-500 dark:text-zinc-300">Tanya Petani Artificial Intelligence (TANI AI) siap membantu Anda dengan informasi tentang pertanian di Indonesia.</p>
            </div>

            <div id="chat" class="flex-grow overflow-y-auto mb-4 hidden"></div>

            <div id="cards" class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                <div class="bg-gray-50 dark:bg-zinc-900 rounded-xl p-4 hover:shadow-md transition-shadow duration-300">
                    <div class="w-8 h-8 bg-gray-200 rounded-full mb-3 flex items-center justify-center">
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-800 dark:text-white">Peluang Pertanian 2024</h3>
                    <p class="text-xs text-gray-500 mt-1">Inovasi & Peluang</p>
                </div>
                <div class="bg-gray-50 dark:bg-zinc-900 rounded-xl p-4 hover:shadow-md transition-shadow duration-300">
                    <div class="w-8 h-8 bg-gray-200 rounded-full mb-3 flex items-center justify-center">
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-800 dark:text-white">Teknologi Pertanian Modern</h3>
                    <p class="text-xs text-gray-500 mt-1">Tren Teknologi</p>
                </div>
                <div class="bg-gray-50 dark:bg-zinc-900 rounded-xl p-4 hover:shadow-md transition-shadow duration-300">
                    <div class="w-8 h-8 bg-gray-200 rounded-full mb-3 flex items-center justify-center">
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-800 dark:text-white">Praktik Pertanian Berkelanjutan</h3>
                    <p class="text-xs text-gray-500 mt-1">Pertanian Berkelanjutan</p>
                </div>
            </div>

            <div class="input-field relative">
                <input
                    id="userInput"
                    type="text"
                    placeholder="Tanya tentang pertanian"
                    class="w-full py-3 px-4 bg-gray-100 dark:bg-zinc-900 rounded-full text-gray-700 dark:text-zinc-200 focus:outline-none focus:ring-2 focus:ring-green-300"
                    autocomplete="off"
                >
                <button
                    id="sendButton"
                    class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-accent text-white px-4 py-2 rounded-full text-sm hover:bg-accent transition-colors duration-300"
                >
                    Send
                </button>
            </div>
            <div class="ai-footer">
                <p class="text-xs text-gray-500 dark:text-zinc-300 text-center mt-4">Powered by <a href="https://google.gemini.com" class="text-accent hover:underline">Google Gemini</a></p>
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
    gsap.from(sendButton, { y: 20, opacity: 0, duration: 0.5, delay: 1.5 });

    function addMessage(type, message) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `mb-4 ${type === 'user' ? 'text-right' : 'text-left'}`;
        messageDiv.innerHTML = `
            <div class="inline-block p-3 rounded-lg ${type === 'user' ? 'bg-accent text-white' : 'text-gray-800 dark:text-zinc-200'}">
                ${message}
            </div>
        `;
        chat.appendChild(messageDiv);

        // Ensure the chat always scrolls to the latest message
        setTimeout(() => {
            chat.scrollTop = chat.scrollHeight;
        }, 100);
    }

    function addSkeleton() {
        const skeletonDiv = document.createElement('div');
        skeletonDiv.id = 'skeleton-loader';
        skeletonDiv.className = 'mb-4 text-left';
        skeletonDiv.innerHTML = `
            <div class="inline-block p-3 rounded-lg text-gray-800 animate-pulse w-[20rem]">
                <div class="h-4 bg-gray-300 rounded w-3/4 mb-2"></div>
                <div class="h-4 bg-gray-300 rounded w-1/2"></div>
            </div>
        `;
        chat.appendChild(skeletonDiv);

        // Ensure the chat always scrolls to the latest message
        setTimeout(() => {
            chat.scrollTop = chat.scrollHeight;
        }, 100);
    }

    function removeSkeleton() {
        const skeleton = document.getElementById('skeleton-loader');
        if (skeleton) skeleton.remove();
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

        addSkeleton();

        generateResponse(message);
    }

    function generateResponse(text) {
        fetch("/tani-ai", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ text: text })
        })
        .then(response => response.json())
        .then(data => {
            // Remove skeleton loader
            removeSkeleton();

            // Add AI message
            addMessage('ai', data.text);
        })
        .catch(error => {
            console.error('Error:', error);
            removeSkeleton();  // Remove skeleton in case of error
        });
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
