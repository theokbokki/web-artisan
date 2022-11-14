@props([
    'search_label' => 'Chercher après un ancien',
    'input' => '',
    'button' => 'Chercher',
    'searchLabelHidden' => false,
])
<x-layouts.main>
  <section class="space-y-8 w-[90%] ml-[5vw]">
    <div class="space-y-4 max-w-[33rem]">
      <h2 class="title">
        {{ __('alumnis.title') }}
      </h2>
      <div class="space-y-2 max-w-[33rem]">
        <p>{{ __('alumnis.p1') }}</p>
        <p>{{ __('alumnis.p2') }}</p>
      </div>
    </div>
    <x-search :label="$search_label" :$input :$button :label-hidden="$searchLabelHidden" class="max-w-[33rem]" />
  </section>
  <section
    class="w-[90%] ml-[5vw] grid sm:max-nav-2:grid-cols-2 nav-2:max-[940px]:grid-cols-1 min-[940px]:max-lg:grid-cols-2 lg:grid-cols-1 gap-6">
    <x-alumni-card />
    <x-alumni-card />
    <x-alumni-card />
  </section>
</x-layouts.main>
