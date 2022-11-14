@props([
    'search_label' => 'Cherhcer parmis les offres d\'emploi',
    'input' => 'Chercher après une entreprise, un tag, une ville, ...',
    'button' => '',
    'searchLabelHidden' => false,
    'dateFor' => 'date',
    'dateLabel' => 'Trier par date',
    'placeFor' => 'place',
    'placeLabel' => 'Trier par lieu',
    'companiesFor' => 'companies',
    'companiesLabel' => 'Trier par compagnies',
])
<x-layouts.main>
  <section class="space-y-8 w-[90%] ml-[5vw]">
    <div class="space-y-4 max-w-[33rem]">
      <h2 class="title">
        {{ __('internships.title') }}
      </h2>
      <p>{{ __('internships.subtitle') }}</p>
    </div>
    <x-search :label="$search_label" :$input :$button :label-hidden="$searchLabelHidden" class="max-w-[33rem]" />
    <form action="/" method="post" class="flex flex-wrap gap-4">
      <x-select :options="['all' => 'Le plus récent d\'abord']" :for="$dateFor" :label="$dateLabel" />
      <x-select :options="['all' => 'Toutes les villes']" :for="$placeFor" :label="$placeLabel" />
      <x-select :options="['all' => 'Toutes les entreprises']" :for="$companiesFor" :label="$companiesLabel" />
      <button type="submit" class="button self-end">Trier</button>
    </form>
  </section>
  <section class="w-[90%] ml-[5vw] space-y-8">
    <div class="space-y-6">
      <x-internship-card />
      <x-internship-card />
      <x-internship-card />
    </div>
    <x-fake-pagination class="mx-auto w-max" />
  </section>
</x-layouts.main>
