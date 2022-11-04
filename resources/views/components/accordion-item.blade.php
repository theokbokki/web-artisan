<li
  class="group inline-block hover:bg-slate-100 focus:bg-slate-100 hover:p-5 focus:p-5 transition-all ease-in-out duration-300 rounded-md focus:space-y-2"
  {{ $attributes }}>
  <div class="flex justify-between text-slate-700">
    <p class="title text-xl">{{ $title }}</p>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
      class="w-6 h-6 group-focus:rotate-90 transition-all duration-300">
      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
    </svg>
  </div>
  <div class="max-h-0 group-focus:max-h-screen overflow-hidden transition-all ease-in-out duration-150">
    <p>{{ $content }}</p>
  </div>
</li>
