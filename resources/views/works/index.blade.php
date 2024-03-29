<x-layouts.main>
  <section class="w-[90%] max-w-5xl mx-auto">
    <h2 class="sr-only">
      {{ __('Travaux étudiants') }}
    </h2>
    <div class="flex items-center gap-4 mt-8 lg:flex-wrap">
      <x-filters>
        <select class="select" id="date" name="date">
          <option value="latest_first" {{ request('date') == 'latest_first' ? 'selected' : '' }}>
            {{ __('Plus récent d\'abord') }}</option>
          <option value="oldest_first" {{ request('date') == 'oldest_first' ? 'selected' : '' }}>
            {{ __('Plus ancien d\'abord') }}</option>
        </select>
        <select class="select" id="students" name="students">
          <option value="all-students">{{ __('Tous les étudiants') }}</option>
          @foreach ($students as $student)
            <option value="{{ $student->slug }}" {{ request('students') == $student->username ? 'selected' : '' }}>
              {{ $student->name }}</option>
          @endforeach
        </select>
        @if (request('search'))
          <input type="hidden" name="search" value="{{ request('search') }}" />
        @endif
      </x-filters>
      <x-search>
        <label class="label" for="search">{{ __('Cherchez parmis les travaux des étudiants') }}</label>
        <p>{{ __('Cherchez par tag, étudiant, titre, ...') }}</p>

        @if (request('students'))
          <input type="hidden" name="students" value="{{ request()->input('students') }}">
        @endif
        @if (request('date'))
          <input type="hidden" name="date" value="{{ request()->input('date') }}">
        @endif
      </x-search>
    </div>
    @if (!count($works))
      <p class="label mt-10">
        {{ __('Pas de posts correspondant à votre recherche') }}
      </p>
    @endif
    <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-x-16 gap-y-10 items-start mt-16">
      @foreach ($works as $work)
        <x-work-card :$work />
      @endforeach
    </div>
    <div class="mt-16">
      {{ $works->links('pagination::tailwind') }}
    </div>
  </section>
</x-layouts.main>
