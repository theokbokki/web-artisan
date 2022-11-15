@props([
    'search_label' => 'Cherhcer parmis les traductions',
    'input' => 'Chercher après un article, un documentation, ...',
    'button' => '',
    'searchLabelHidden' => false,
    'dateFor' => 'date',
    'dateLabel' => 'Trier par date',
    'typeFor' => 'type',
    'typeLabel' => 'Trier par types',
])
<x-layouts.main>
  <section class="space-y-8 w-[90%] ml-[5vw]">
    <div class="space-y-4 max-w-[33rem]">
      <h2 class="title">
        {{ __('translations.title') }}
      </h2>
      <p>{{ __('translations.subtitle') }}</p>
    </div>
    <x-search :label="$search_label" :$input :$button :label-hidden="$searchLabelHidden" class="max-w-[33rem]" />
    <form action="/" method="post" class="flex flex-wrap gap-4">
      <x-select :options="['all' => 'Le plus récent d\'abord']" :for="$dateFor" :label="$dateLabel" />
      <x-select :options="['all' => 'Articles et documentations']" :for="$typeFor" :label="$typeLabel" />
      <button type="submit" class="button self-end">Trier</button>
    </form>
  </section>
  <section class="w-[90%] ml-[5vw] space-y-8">
    <div class="space-y-6">
      <x-translation-card />
      <x-translation-card />
      <x-translation-card />
    </div>
    <x-fake-pagination class="mx-auto w-max" />
  </section>
</x-layouts.main>
