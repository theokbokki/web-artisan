@props([
    'search_label' => 'Chercher la grille des cours',
    'input' => 'Chercher apres un cours, un professeur, un bloc, ...',
    'button' => '',
    'searchLabelHidden' => false,
])
<x-layouts.main>
  <section class="space-y-8 w-[90%] ml-[5vw]">
    <div class="space-y-4 max-w-[33rem]">
      <h2 class="title">
        {{ __('course_gird.title') }}
      </h2>
      <p>{{ __('course_grid.subtitle') }}</p>
    </div>
    <x-search :label="$search_label" :$input :$button :label-hidden="$searchLabelHidden" class="max-w-[33rem]" />
  </section>
  <section class="w-[90%] ml-[5vw] space-y-8">
    <div class="space-y-6">
      <table class="border-separate border-spacing-y-4">
        <thead>
          <tr class="[&>th]:p-4">
            <th><a class="label" href="#">Intitulé</a></th>
            <th><a class="label" href="#">Professeur</a></th>
            <th><a class="label" href="#">Blog</a></th>
            <th><a class="label" href="#">Quadrimèstre</a></th>
            <th><a class="label" href="#">Heures</a></th>
            <th><a class="label" href="#">Crédits</a></th>
          </tr>
        </thead>
        <tbody>
          <x-lesson-card />
          <x-lesson-card />
          <x-lesson-card />
        </tbody>
      </table>
    </div>
  </section>
</x-layouts.main>
