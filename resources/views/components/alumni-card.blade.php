<article
  class="min-w-clamp relative snap-center rounded-md lg:flex lg:min-w-clamp-lg text-left first:ml-[5vw] last:mr-[5vw] items-center"
  role="group" aria-label="slide {{ $alumni->index }} of 5">
  <div class="w-full min-w-64">
    <img src="{{ $alumni->avatar }}" alt=""
      class="w-full aspect-video lg:aspect-square rounded-t-md object-cover lg:rounded-l-md lg:rounded-tr-none">
  </div>
  <div class="w-full min-w-[70%] mt-6 lg:mt-0 lg:hover:bg-slate-100 lg:p-5 rounded-r-lg transition-all duration-300">
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
