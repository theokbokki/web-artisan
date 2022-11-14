@props([
    'search_label' => 'Chercher parmis nos professeurs',
    'input' => 'Chercher un nom, un cours, ...',
    'button' => 'Chercher',
    'searchLabelHidden' => false,
    'lessonsFor' => 'lessons',
    'lessonsLabel' => 'Trier par cours',
])
<x-layouts.main>
  <section class="space-y-8 w-[90%] ml-[5vw]">
    <div class="space-y-4 max-w-[33rem]">
      <h2 class="title">
        {{ __('teachers.title') }}
      </h2>
      <p>{{ __('teachers.subtitle') }}</p>
    </div>
    <x-search :label="$search_label" :$input :$button :label-hidden="$searchLabelHidden" class="max-w-[33rem]" />
    <form action="/" method="post" class="flex flex-wrap gap-4">
      <x-select :options="['all' => 'Tous les cours']" :for="$lessonsFor" :label="$lessonsLabel" />
      <button type="submit" class="button self-end">Trier</button>
    </form>
  </section>
  <section class="w-[90%] ml-[5vw] grid gap-6">
    <div
      class="grid sm:max-nav-2:grid-cols-2 nav-2:max-[940px]:grid-cols-1 min-[940px]:max-lg:grid-cols-2 lg:grid-cols-1 gap-6">
      <x-teachers-card />
      <x-teachers-card />
      <x-teachers-card />
    </div>
    <x-fake-pagination class="max-w-max mx-auto" />
  </section>
</x-layouts.main>
