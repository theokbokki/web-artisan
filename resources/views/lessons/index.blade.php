<x-layouts.main>
  <section class="max-w-[90%] w-max mx-auto space-y-6">
    <h2 class="sr-only">
      {{ __('Grille des cours') }}
    </h2>
    <x-search>
      <label for="search">{{ __('Cherchez parmis les cours') }}</label>
      <p>{{ __('Cherchez par professeur, intitulé, bloc, ...') }}</p>
      @if (request('sort-field'))
        <input type="hidden" name="sort-field" value="{{ request()->input('sort-field') }}">
      @endif
      @if (request('sort-direction'))
        <input type="hidden" name="sort-direction" value="{{ request()->input('sort-direction') }}">
      @endif
    </x-search>
    <section class=" overflow-auto">
      <table class="text-left whitespace-nowrap border-separate border-spacing-x-0 border-spacing-y-4 mt-6">
        <thead class="">
          <tr class="[&>*]:px-8">
            <x-lessons.lesson-table-header content="{{ __('Intitulé') }}" sortField="title" />
            <x-lessons.lesson-table-header content="{{ __('Professeur') }}" sortField="teacher" />
            <x-lessons.lesson-table-header content="{{ __('Bloc') }}" sortField="year" />
            <x-lessons.lesson-table-header content="{{ __('Quadrimestre') }}" sortField="quarter" />
            <x-lessons.lesson-table-header content="{{ __('Heures') }}" sortField="hours" />
            <x-lessons.lesson-table-header content="{{ __('Crédits') }}" sortField="credits" />
          </tr>
        </thead>
        <tbody class="border-spacing-0">
          @foreach ($lessons as $lesson)
            <tr class="h-16 [&>*]:px-8 group [&>*]:hover:bg-slate-100 relative">
              <td class=" border-t border-b border-r border-l border-slate-200 rounded-l-md">
                <a href="/lessons-grid/{{ $lesson->slug }}"
                  class="font-bold transition-all duration-150 hover:text-indigo-600 hover:underline before:absolute before:inset-0">
                  {{ $lesson->title }}
                </a>
              </td>
              <td class="border-t border-r
							border-b border-slate-200">
                <div class="flex gap-x-4">
                  @foreach ($lesson->users as $teacher)
                    <div class="flex min-w-max gap-2 relative">
                      <img src="/{{ $teacher->avatar }}" alt="" class="w-7 aspect-square rounded-md">
                      <p class="link">
                        {{ $teacher->name }}
                      </p>
                      <a href="/profile/{{ $teacher->slug }}" class="absolute inset-0"></a>
                    </div>
                  @endforeach
                </div>
              </td>
              <td class="border-t border-b border-r border-slate-200">
                {{ $lesson->year }}
              </td>
              <td class="border-t border-b border-r border-slate-200">
                @foreach ($lesson->quarters as $quarter)
                  <!-- DON'T CHANGE THE STRING HERE, IT WOULD MESS UP THE INDENTATION -->
                  {{ $quarter->quarter }}{{ !$loop->last ? ', ' : '' }}
                @endforeach

              </td>
              <td class="border-t border-r border-b border-slate-200">
                {{ $lesson->hours }}
              </td>
              <td class="border-t border-b border-r border-slate-200 rounded-r-md">
                {{ $lesson->credits }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </section>
  </section>
</x-layouts.main>
