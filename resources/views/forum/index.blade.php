<x-layouts.main>
  <section class="w-[90%] mx-auto max-w-5xl">
    <h2 class="title sr-only">{{ __('Forum') }}</h2>
    <div class="flex items-center gap-4 mt-8 lg:flex-wrap">
      <x-filters>
        <select class="select" id="date" name="date">
          <option value="latest_first">{{ __('Plus récent d\'abord') }}</option>
          <option value="oldest_first">{{ __('Plus ancien d\'abord') }}</option>
        </select>
        <select class="select" id="solved_status" name="solved_status">
          <option value="solved_and_unsolved">{{ __('Résolu et non résolu') }}</option>
          <option value="solved_only">{{ __('Résolu uniquement') }}</option>
          <option value="unsolved_only">{{ __('Non résolu uniquement') }}</option>
        </select>
        <select class="select" id="popularity" name="popularity">
          <option value="most_popular_first">{{ __('Plus populaire d\'abord') }}</option>
          <option value="less_popular_first">{{ __('Moins populaire d\'abord') }}</option>
        </select>
      </x-filters>
      <x-search>
        <label class="label" for="search">{{ __('Chercher dans notre forum') }}</label>
        <p>{{ __('Cherchez par tag, question, date, ...') }}</p>
      </x-search>
    </div>
  </section>
  <div class="grid md:flex max-w-5xl w-[90%] mx-auto mt-10 gap-x-24">
    <section class="max-w-1.5xl">
      <div class="flex items-center gap-4 justify-between flex-wrap">
        <h2 class="small-title">{{ __('Questions') }}</h2>
        <a class="button inline-block" href="">{{ __('Nouvelle question') }}</a>
      </div>
      <div class="max-w-3xl space-y-8 mt-8">
        @foreach ($questions as $question)
          <x-forum.question :$question />
        @endforeach
        {{ $questions->appends(request()->except('page'))->links('pagination::tailwind') }}
      </div>
    </section>
    <aside class="mt-16 md:mt-0 max-w-[100%] lg:w-max  ">
      <h2 class="small-title">{{ __('Les plus populaires') }}</h2>
      <div class="space-y-6 mt-8 max-w-[90vw]">
        @foreach ($users as $user)
          @if ($user->score)
            <div class="flex justify-between items-center pb-6 border-b border-slate-200 gap-6">
              <div class="flex gap-2 items-center relative">
                <img src="/{{ $user->avatar }}" alt="" class="w-7 h-7 rounded-md">
                <a href=""
                  class="text-base leading-4 hover:text-indigo-600 underline-offset-3 hover:underline relative z-10">
                  {{ $user->username }}</p>
                  <a href="#" class="absolute inset-0 z-1"><span
                      class="sr-only">{{ __('Voir le profil de ') }}{{ $user->username }}</span></a>
              </div>
              <div class="flex gap-2 items-center">
                <p>{{ $user->score }}</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                  stroke="currentColor" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                </svg>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </aside>
  </div>
</x-layouts.main>
