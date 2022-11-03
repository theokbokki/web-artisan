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
  <div class="flex gap-x-24">
    <x-navigation.menu />
    <main class="w-full mt-10 md:mt-24">
      <section class="flex items-center">
        <div class="sm:min-w-max">
          <h2 class="text-5xl font-title font-bold max-w-[33rem]">N’attends pas le chômage, deviens développeur web</h2>
          <div class="text-lg text-slate-500 space-y-4 mt-6 max-w-[27.5rem]">
            <p class="">
              {{ __('home.intro_p1') }}
            </p>
            <p class="">
              {{ __('home.intro_p2') }}
            </p>
            <p class="">
              {{ __('home.intro_p3') }}
            </p>
          </div>
          <a href="#" class="button inline-block mt-8 max-w-max">
            {{ __('home.intro_cta') }}
          </a>
        </div>
        <img src="images/hero-image.png" alt="{{ __('home.hero_image_alt') }}"
          class="relative drop-shadow-2xl rounded-lg hidden sm:block h-[34rem] min-w-[55rem] shrink-0 perspective-r -ml-24">
      </section>
      <section class="mt-48">
        <h2 class="text-[2.5rem] font-bold font-title">
          {{ __('home.teachings_title') }}
        </h2>
        <p class="text-slate-500 text-lg max-w-[41.5rem] mt-6">
          {{ __('home.teachings_subtitle') }}
        </p>
        <ul class="relative mt-8 space-y-4">
          @foreach ($accordionItems as $accordionItem)
            <x-accordion-item tabindex="0" :title="$accordionItem['title']" :content="$accordionItem['content']" :img-src="$accordionItem['imgSrc']" :img-alt="$accordionItem['imgAlt']" />
          @endforeach
        </ul>
        <a href="#"
          class="button inline-block xl:ml-[33rem] 2xl:ml-[43rem] mt-6">{{ __('home.teachings_cta') }}</a>
      </section>
    </main>
  </div>
</x-layouts.main>
