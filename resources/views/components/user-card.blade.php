<article class="grid min-[400px]:grid-cols-[128px_1fr] h-full relative gap-4" role="group"
  aria-label="slide {{ $user->index }} of 5">
  <div class="">
    <img src="/{{ $user->avatar }}" alt="" class="rounded-md w-full aspect-video min-[400px]:h-full object-cover">
  </div>
  <div class="text-left">
    <h3 class="font-bold text-slate-700">{{ $user->name }}</h3>
    <p class="text-base text-slate-500 mt-2">{{ $user->job }}</p>
    <p class="mt-4">{{ $user->excerpt }}</p>
    <div class="flex gap-2 items-center link mt-4 relative z-10">
      <a href="/profile/{{ $user->slug }}" class="before:absolute before:inset-0">{{ __('En savoir plus') }}</a>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
        stroke="currentColor" class="w-4 h-4 mt-1">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>

    </div>
    <a href="/profile/{{ $user->slug }}" class="absolute inset-0"><span class="sr-only">En apprendre plus sur
        {{ $user->name }}</span></a>
  </div>
</article>
