<x-layouts.main>
  <section class="w-[90%] max-w-5xl mx-auto">
    <h2 class="sr-only">
      {{ __('Travaux étudiants') }}
    </h2>
    <div class="space-y-6 flex flex-wrap">
      <x-filters>
        <select class="select" id="date" name="date">
          <option value="latest_first">{{ __('Plus récent d\'abord') }}</option>
          <option value="oldest_first">{{ __('Plus ancien d\'abord') }}</option>
        </select>
        <select class="select" id="students" name="students">
          <option value="all-students">{{ __('Tous les étudiants') }}</option>
          @foreach ($students as $student)
            <option value="{{ $student->slug }}">{{ $student->name }}</option>
          @endforeach
        </select>
      </x-filters>
      <x-search></x-search>
    </div>
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
