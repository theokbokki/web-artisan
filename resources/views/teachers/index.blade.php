<x-layouts.main>
  <section class="w-[90%] max-w-5xl mx-auto">
    <h2 class="sr-only">{{ __('Professeurs') }}</h2>
    <x-search>
      <label class="label" for="search">{{ __('Cherchez parmis nos professeurs') }}</label>
      <p>{{ __('Cherchez par nom, cours, ...') }}</p>
    </x-search>
    <div class="space-y-16 mt-16">
      @foreach ($teachers as $user)
        <x-user-card :$user />
      @endforeach
    </div>
    @if (!count($teachers))
      <p>
        {{ __('Pas de professeurs correspondant à votre recherche') }}
      </p>
    @endif
  </section>
</x-layouts.main>
