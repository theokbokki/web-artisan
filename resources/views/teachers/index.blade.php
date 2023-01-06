<x-layouts.main>
  <section class="w-[90%] max-w-5xl mx-auto">
    <h2 class="sr-only">{{ __('Professeurs') }}</h2>
    <div class="space-y-16">
      @foreach ($teachers as $user)
        <x-user-card :$user />
      @endforeach
    </div>
  </section>
</x-layouts.main>
