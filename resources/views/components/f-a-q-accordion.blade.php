<div class="accordion py-8 border-b border-solid border-gray-200">
    <button
      class="accordion-toggle group inline-flex items-center justify-between font-normal text-xl leading-8 text-zinc-900 dark:text-white w-full transition duration-500 hover:text-accent accordion-active:text-indigo-600 accordion-active:font-medium"
      aria-controls="collapse-{{ $id }}"
    >
      <h5>{{ $question }}</h5>
      <svg
        class="dark:text-white text-zinc-900 transition duration-500 group-hover:text-accent accordion-active:text-accent accordion-active:rotate-180"
        width="22"
        height="22"
        viewBox="0 0 22 22"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M16.5 8.25L12.4142 12.3358C11.7475 13.0025 11.4142 13.3358 11 13.3358C10.5858 13.3358 10.2525 13.0025 9.58579 12.3358L5.5 8.25"
          stroke="currentColor"
          stroke-width="1.6"
          stroke-linecap="round"
          stroke-linejoin="round"
        ></path>
      </svg>
    </button>
    <div
      id="collapse-{{ $id }}"
      class="accordion-content w-full px-0 overflow-hidden pr-4"
      aria-labelledby="heading-{{ $id }}"
    >
      <p class="text-base text-gray-500 font-normal">
        {{ $answer }}
      </p>
    </div>
 </div>
