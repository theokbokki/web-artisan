@props([
    'accordionItems' => [
        1 => [
            'title' => 'Front-end',
            'content' => 'Le front-end, c’est la partie du développement que l’utilisateur va voir au final, ce qui s’affiche à l’écran.',
            'imgSrc' => 'images/frontend.png',
            'imgAlt' => '',
        ],
        2 => [
            'title' => 'Back-end',
            'content' => 'Le développement back-end sert à gérer la partie que l’utilisateur ne voit pas. La connection au server web, la gestion de formulaires, l’authentification d’utilisateurs, les bases de données, …',
            'imgSrc' => 'images/backend.png',
            'imgAlt' => '',
        ],
        3 => [
            'title' => 'Design',
            'content' => 'Pendant la formation, tu seras amené à créer plusieurs sites ainsi que des applications mobiles. La création passe bien sur par une phase de design. Tes professeurs t’encadreront afin de t’enseigner les principes importants du design, l’UX (user experience) ainsi que l’UI (user interface).',
            'imgSrc' => 'images/design.png',
            'imgAlt' => '',
        ],
        4 => [
            'title' => 'Accessibilité',
            'content' => 'Un point important de notre formation est l’accessibilité web. Nous pensons que n’importe qui doit pouvoir utiliser un site, peut importe ses capacités d’accessibilité. Tu devras donc apprendre les bonnes pratiques d’accessibilité afin de pouvoir créer des sites web résilients et adaptatifs.',
            'imgSrc' => 'images/accesibility.png',
            'imgAlt' => '',
        ],
        5 => [
            'title' => 'Gestion de projets',
            'content' => 'Dès la deuxième année, tu sera amené à créer tes propres projets, et il faudra apprendre à s’organiser pour les mener à bien. Tu apprendras le processus de création d’un site web du cahier des charges jusqu’à la mise en ligne.',
            'imgSrc' => 'images/project-management.png',
            'imgAlt' => '',
        ],
    ],
])

<x-layouts.main>
  <x-navigation.header />
  <section class="mt-16 space-y-4 max-w-[90%] mx-auto">
    <h2 class="title">{{ __('home.intro_title') }}</h2>
    <div class="space-y-2">
      <p>{{ __('home.intro_p1') }}</p>
      <p>{{ __('home.intro_p2') }}</p>
      <p>{{ __('home.intro_p3') }}</p>
    </div>
    <a class="button inline-block" href="#">{{ __('home.intro_cta') }}</a>
  </section>
  <section class="mt-16 space-y-4 max-w-[90%] mx-auto">
    <h2 class="title">{{ __('home.teachings_title') }}</h2>
    <p>{{ __('home.teachings_subtitle') }}</p>
    <ul class="relative mt-8 space-y-4">
      @foreach ($accordionItems as $accordionItem)
        <x-accordion-item tabindex="0" :title="$accordionItem['title']" :content="$accordionItem['content']" :img-src="$accordionItem['imgSrc']" :img-alt="$accordionItem['imgAlt']" />
      @endforeach
    </ul>
    <a href="#" class="button inline-block">{{ __('home.teachings_cta') }}</a>
  </section>
  <section class="space-y-4 mt-16 max-w-[90%] mx-auto">
    <h2 class="title">{{ __('home.philosophy_title') }}</h2>
    <div class="space-y-2">
      <p>{{ __('home.philosophy_p1') }}</p>
      <p>{{ __('home.philosophy_p2') }}</p>
    </div>
    <a class="button inline-block max-w-[80%]" href="#">{{ __('home.philosophy_cta') }}</a>
  </section>
  <section class="mt-16 space-y-6 grid items-center max-w-[90%] mx-auto">
    <div class="space-y-4">
      <h2 class="title">{{ __('home.projects_title') }}</h2>
      <div class="space-y-2">
        <p>{{ __('home.projects_p1') }}</p>
        <p>{{ __('home.projects_p2') }}</p>
      </div>
      <ul class="grid space-y-4 relative">
        <x-student-project />
        <x-student-project />
        <x-student-project />
        <x-student-project />
        <div class="w-full h-40 absolute bottom-0 from-white to-white/10 opacity-80 z-10 bg-gradient-to-t rounded-md">
        </div>
      </ul>
    </div>
    <a href="" class="button inline-block mx-auto">{{ __('home.projects_cta') }}</a>
  </section>
  <section class="space-y-4 grid items-center mt-16 max-w-[90%] mx-auto">
    <h2 class="title">{{ __('home.teachers_title') }}</h2>
    <p>{{ __('home.teachers_subtitle') }}</p>
    <img src="images/teachers.jpg" alt="">
    <a href="#" class="button inline-block mx-auto ">{{ __('home.teachers_cta') }}</a>
  </section>
  <section class="mt-16 relative items-center grid gap-2">
    <h2 class="title">
    </h2>
    <p></p>
    <div class="flex gap-x-4 overflow-x-scroll scroll-smooth snap-x snap-mandatory p-5" role="region"
      aria-label="Image carousel" tabindex="0">
      <article
        class="grid min-w-[90%] max-w-[90%] relative snap-center rounded-md drop-shadow-[0_0_10px_rgba(0,0,0,0.15)] bg-white "
        role="group" aria-label="slide 1 of 3">
        <div class="w-full">
          <img src="images/man.jpg" alt="" class="w-full h-full rounded-t-md">
        </div>
        <div class="p-5 space-y-2">
          <p class="font-bold text-slate-700">Luc savapokis</p>
          <p class="text-sm">Directeur de l’agence web4all</p>
          <p>Luc est un homme de 30 ans qui à crée sa propre entreprise dès la sortie de l’école.
            Leur produit phare est une application de monitoring pour les grosses entreprises du milieu de la viande.
          </p>
        </div>
        <a href="#" class="absolute inset-0 "><span class="sr-only">En apprendre plus sur Luc</span></a>
      </article>
      <article
        class="grid min-w-[90%] max-w-[90%] relative snap-center rounded-md drop-shadow-[0_0_10px_rgba(0,0,0,0.15)] bg-white "
        role="group" aria-label="slide 1 of 3">
        <div class="w-full">
          <img src="images/man.jpg" alt="" class="w-full h-full rounded-t-md">
        </div>
        <div class="p-5 space-y-2">
          <p class="font-bold text-slate-700">Luc savapokis</p>
          <p class="text-sm">Directeur de l’agence web4all</p>
          <p>Luc est un homme de 30 ans qui à crée sa propre entreprise dès la sortie de l’école.
            Leur produit phare est une application de monitoring pour les grosses entreprises du milieu de la viande.
          </p>
        </div>
        <a href="#" class="absolute inset-0 "><span class="sr-only">En apprendre plus sur Luc</span></a>
      </article>
      <article
        class="grid min-w-[90%] max-w-[90%] relative snap-end rounded-md drop-shadow-[0_0_10px_rgba(0,0,0,0.15)] bg-white"
        role="group" aria-label="slide 1 of 3">
        <div class="w-full">
          <img src="images/man.jpg" alt="" class="w-full h-full rounded-t-md">
        </div>
        <div class="p-5 space-y-2">
          <p class="font-bold text-slate-700">Luc savapokis</p>
          <p class="text-sm">Directeur de l’agence web4all</p>
          <p>Luc est un homme de 30 ans qui à crée sa propre entreprise dès la sortie de l’école.
            Leur produit phare est une application de monitoring pour les grosses entreprises du milieu de la viande.
          </p>
        </div>
        <a href="#" class="absolute inset-0 "><span class="sr-only">En apprendre plus sur Luc</span></a>
      </article>
    </div>
    <a href="#" class="button inline-block mx-auto">Voir tous nos anciens</a>
  </section>
</x-layouts.main>
