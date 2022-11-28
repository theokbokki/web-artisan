<div
  class="group inline-block hover:bg-slate-100 focus:bg-slate-100 hover:my-1 p-5 focus:my-5 transition-all ease-in-out duration-300 rounded-md focus:space-y-4 min-w-full"
  {{ $attributes }}>
  <dt class="flex justify-between text-slate-700">
    <span class="font-title text-xl">{{ $teaching->teaching }}</span>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
      class="w-6 h-6 group-focus:rotate-90 transition-all duration-300">
      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
    </svg>
  </dt>
  <dd class="max-h-0 group-focus:max-h-screen overflow-hidden transition-all ease-in-out duration-150 space-y-2">
    {!! $teaching->body !!}
  </dd>
</div>
