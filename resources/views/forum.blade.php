@props([
    'search_label' => 'Chercher notre forum',
    'input' => 'Chercher après une question, un tag, un auteur, …',
    'button' => 'Chercher',
    'authors_for' => 'authors',
    'authors_label' => 'Trier par auteurs',
    'time_for' => 'time',
    'time_label' => 'Trier par dates',
    'solved_for' => 'solved',
    'solved_label' => 'Résolu et non résolu',
    'popularity_for' => 'popularity',
    'popularity_label' => 'Plus populaire d\'abord',
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
        <x-select :options="['solved and not solved' => 'Résolu et non résolu']" :for="$solved_for" :label="$solved_label" />
        <x-select :options="['most popular first' => 'Les plus populaires d\'abord']" :for="$popularity_for" :label="$popularity_label" />
        <button type="submit" class="button self-end">Trier</button>
      </form>
    </div>
    <a class="button inline-block">Poser une question</a>
  </section>
  <div class="grid gap-8 xl:grid-cols-[70%_30%] w-[90%] ml-[5vw] max-w-[700px] xl:max-w-none">
    <section class="">
      <h2 class="sr-only">
        Liste des questions
      </h2>
      <div class="space-y-4">
        <x-forum-card />
        <x-forum-card />
        <x-forum-card />
        <x-forum-card />
      </div>
    </section>
    <aside class="w-full xl:w-[90%] p-5 bg-white base-shadow rounded-md space-y-6 self-start sticky top-6">
      <h2 class="font-title text-bold text-slate-700 text-xl">
        Les plus likés
      </h2>
      <x-forum-most-liked />
      <x-forum-most-liked />
      <x-forum-most-liked />
      <div class="bg-slate-200 w-full h-[2px] rounded-xl"></div>
      <x-forum-most-liked />
    </aside>
  </div>
</x-layouts.main>
