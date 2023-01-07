<x-layouts.main>
  <section class="w-[90%] max-w-5xl mx-auto">
    <h2 class="sr-only">{{ __('Anciens') }}</h2>
    <x-search>
      <label class="label" for="search">{{ __('Cherchez parmis nos anciens') }}</label>
      <p>{{ __('Cherchez par nom, travail, ...') }}</p>
    </x-search>
    <div class="space-y-16 mt-16">
      @foreach ($alumnis as $user)
        <x-user-card :$user />
      @endforeach
    </div>
    <div class="mt-16">
      {{ $alumnis->links('pagination::tailwind') }}
    </div>
  </section>
</x-layouts.main>
