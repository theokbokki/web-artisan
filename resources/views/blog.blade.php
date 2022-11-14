@props([
    'search_label' => 'Chercher notre blog',
    'input' => 'Chercher après un titre, un tag, un auteur,…',
    'button' => 'Chercher',
    'authors_for' => 'authors',
    'authors_label' => 'Trier par auteurs',
    'time_for' => 'time',
    'time_label' => 'Trier par dates',
    'searchLabelHidden' => false,
])
<x-layouts.main>
  <section class="space-y-8 w-[90%] ml-[5vw]">
    <div class="space-y-4 max-w-[33rem]">
      <h2 class="title">
        {{ __('blog.title') }}
      </h2>
      <p>
        {{ __('blog.subtitle') }}
      </p>
    </div>
    <div class="space-y-8 flex flex-col">
      <x-search :label="$search_label" :$input :$button :label-hidden="$searchLabelHidden" class="max-w-[33rem]" />
      <form action="/" method="post" class="flex flex-wrap gap-4">
        <x-select :options="['all' => 'Tous les auteurs']" :for="$authors_for" :label="$authors_label" />
        <x-select :options="['time' => 'Les plus récents d\'abord']" :for="$time_for" :label="$time_label" />
        <button type="submit" class="button self-end">Trier</button>
      </form>
    </div>
    <ul class="space-y-4">
      <x-article-card />
      <x-article-card />
      <x-article-card />
      <x-article-card />
      <x-article-card />
      <x-article-card />
      <x-article-card />
      <x-article-card />
    </ul>
    {{-- {{ $articles->paginate('tailwind') }} --}}
  </section>
</x-layouts.main>
