@props([
    'search_label' => 'Les travaux de nos étudiants',
    'input' => '',
    'button' => 'Chercher parmis les travux de nos étudiants',
    'searchLabelHidden' => false,
    'dateFor' => 'date',
    'dateLabel' => 'Trier par date',
])
<x-layouts.main>
  <section class="space-y-8 w-[90%] ml-[5vw]">
    <div class="space-y-4 max-w-[33rem]">
      <h2 class="title">
        {{ __('works.title') }}
      </h2>
      <p>{{ __('works.subtitle') }}</p>
    </div>
    <x-search :label="$search_label" :$input :$button :label-hidden="$searchLabelHidden" class="max-w-[33rem]" />
    <form action="/" method="post" class="flex flex-wrap gap-4">
      <x-select :options="['all' => 'Le plus récent d\'abord']" :for="$dateFor" :label="$dateLabel" />
      <button type="submit" class="button self-end">Trier</button>
    </form>
  </section>
  <section class="w-[90%] ml-[5vw] space-y-8">
    <ul class="grid sm:max-nav-2:grid-cols-2 nav-2:max-lg:grid-cols-1 lg:grid-cols-2 gap-8 xl:grid-cols-3">
      <x-student-project />
      <x-student-project />
      <x-student-project />
      <x-student-project />
      <x-student-project />
      <x-student-project />
    </ul>
    <x-fake-pagination class="mx-auto w-max" />
  </section>
</x-layouts.main>
