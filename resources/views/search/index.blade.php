<x-layouts.main>
  <section class="w-[90vw] max-w-5xl mx-auto space-y-16">
    <h2 class="sr-only">Search</h2>

    <!-- Posts -->
    <section>
      <h3 class="small-title">{{ __('Articles') }}</h3>
      @if ($posts->count())
        <div class="space-y-8 mt-8">
          @foreach ($posts as $post)
            <x-blog.post-card :$post />
          @endforeach
        </div>
        <a href="/blog?search={{ $searchTerm }}" class="button inline-block">
          {{ __('Voir tous les articles correspondant à votre recherche') }}</a>
      @else
        <p>{{ __('Pas d\'articles correspondant à votre recherche') }}</p>
      @endif
    </section>

    <!-- Teachers -->
    <section>
      <h3 class="small-title">{{ __('Professeurs') }}</h3>
      @if ($teachers->count())
        <div class="space-y-8 mt-8">
          @foreach ($teachers as $user)
            <x-user-card :$user />
          @endforeach
        </div>
        <a href="/teachers?search={{ $searchTerm }}" class="button inline-block mt-8">
          {{ __('Voir tous les professeurs correspondant à votre recherche') }}
        </a>
      @else
        <p>{{ __('Pas de professeurs posts correspondant à votre recherche') }}</p>
      @endif
    </section>

    <!-- Alumnis -->
    <section>
      <h3 class="small-title">{{ __('Anciens') }}</h3>
      @if ($alumnis->count())
        <div class="space-y-8 mt-8">
          @foreach ($alumnis as $user)
            <x-user-card :$user />
          @endforeach
        </div>
        <a href="/alumnis?search={{ $searchTerm }}" class="button inline-block mt-8">
          {{ __('Voir tous les anciens correspondant à votre recherche') }}
        </a>
      @else
        <p>{{ __('Pas d\'anciens correspondant à votre recherche') }}</p>
      @endif
    </section>

    <!-- Lessons -->
    <section class="">
      <h3 class="small-title">{{ __('Cours') }}</h3>
      @if ($lessons->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
          @foreach ($lessons as $lesson)
            <x-lessons.lesson-card :$lesson />
          @endforeach
        </div>
        <a href="/lessons-grid?search={{ $searchTerm }}" class="button inline-block mt-8">
          {{ __('Voir tous les cours correspondant à votre recherche') }}
        </a>
      @else
        <p>{{ __('Pas de cours correspondant à votre recherche') }}</p>
      @endif
    </section>

    <!-- Works -->
    <section>
      <h3 class="small-title">{{ __('Projets étudiants') }}</h3>
      @if ($works->count())
        <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-x-16 gap-y-10 items-start mt-8">
          @foreach ($works as $work)
            <x-work-card :$work />
          @endforeach
        </div>
        <a href="/works?search={{ $searchTerm }}" class="button inline-block mt-8">
          {{ __('Voir tous les projets étudiants correspondant à votre recherche') }}
        </a>
      @else
        <p>{{ __('Pas de projets web correspondant à votre recherche') }}</p>
      @endif
    </section>

    <!-- Questions -->
    <section>
      <h3 class="small-title">{{ __('Questions') }}</h3>
      @if ($questions->count())
        <div class="space-y-8 mt-8">
          @foreach ($questions as $question)
            <x-forum.question :$question />
          @endforeach
        </div>
        <a href="/forum?search={{ $searchTerm }}" class="button inline-block mt-8">
          {{ __('Voir toutes les questions correspondant à votre recherche') }}
        </a>
      @else
        <p>{{ __('Pas de questions correspondant à votre recherche') }}</p>
      @endif
    </section>

    <!-- Internships -->
    <section>
      <h3 class="small-title">{{ __('Stages') }}</h3>
      @if ($internships->count())
        <div class="gap-8 grid lg:grid-cols-2 items-start">
          @foreach ($internships as $internship)
            <x-internships.internship-card :$internship />
          @endforeach
        </div>
        <a href="/internships?search={{ $searchTerm }}" class="button inline-block mt-8">
          {{ __('Voir tous les stages correspondant à votre recherche') }}
        </a>
      @else
        <p>{{ __('Pas de stages correspondant à votre recherche') }}</p>
      @endif
    </section>
  </section>
</x-layouts.main>
