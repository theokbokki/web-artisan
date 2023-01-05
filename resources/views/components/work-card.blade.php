<div class="relative text-left break-inside-avoid-column p-5 hover:bg-slate-100 transition-all duration-300 rounded-lg">
  <div class="flex items-center justify-between gap-4 ">
    <div class="flex items-center gap-2 ">
      <img src="/{{ $work->user->avatar }}" alt="" class="object-cover w-7 h-7 rounded-md">
      <p class="font-bold text-slate-700 leading-4 text-base">{{ $work->user->name }}</p>
    </div>
    @if (isset(
        $work->user->roles()->whereIn('role', ['alumni', 'student'])->get()[0]->role))
      <p class="tag text-base">{{ $work->user->roles()->whereIn('role', ['alumni', 'student'])->get()[0]->role }}</p>
    @endif
  </div>
  <p class="font-bold text-slate-800 text-xl md:text-2xl mt-4">{{ $work->title }}</p>
  <p class="mt-4">{{ $work->excerpt }}</p>
  <div class="flex gap-2 flex-wrap mt-4">
    @foreach ($work->tags as $tag)
      <p class="tag">{{ $tag->tag }}</p>
    @endforeach
  </div>
  <div class="flex gap-2 items-center link mt-4">
    <a href="/works/{{ $work->slug }}" class="">{{ __('En savoir plus') }}</a>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
      class="w-4 h-4">
      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
    </svg>

  </div>
  <a href="/works/{{ $work->slug }}"
    class="text-transparent text-[0] absolute inset-0">{{ __('En savoir plus sur :work', ['work' => $work->title]) }}</a>
</div>
