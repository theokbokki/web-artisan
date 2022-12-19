<article class="grid min-[400px]:grid-cols-[128px_1fr] h-full relative gap-4" role="group"
  aria-label="slide {{ $alumni->index }} of 5">
  <div class="">
    <img src="{{ $alumni->avatar }}" alt="" class="rounded-md w-64 h-full object-cover">
  </div>
  <div class="text-left">
    <h3 class="font-bold text-slate-700">{{ $alumni->name }}</h3>
    <p class="text-base text-slate-500 mt-2">{{ $alumni->job }}</p>
    <p class="mt-4">{{ $alumni->excerpt }}</p>
    <div class="flex gap-2 items-center link mt-4 relative z-10">
      <a href="/alumnis/{{ $alumni->slug }}" class="">{{ __('En savoir plus') }}</a>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
        class="w-4 h-4">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>

    </div>
    <a href="#" class="absolute inset-0"><span class="sr-only">En apprendre plus sur
        {{ $alumni->name }}</span></a>
  </div>
</article>
