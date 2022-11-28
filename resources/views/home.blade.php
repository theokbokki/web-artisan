@props([
    'label' => 'Chercher sur notre forum',
    'input' => 'Une question ? C\'est par ici !',
    'button' => 'Chercher',
    'labelHidden' => 'true',
])

<x-layouts.main>
  <section class="grid gap-10 w-[90%] max-w-5xl mx-auto text-center">
    <div class="space-y-4">
      <h2 class="title md:text-4xl md:leading-[3rem] lg:text-5xl lg:leading-[4rem]">
        {!! __("N'attends pas le chômage, <span class=\"gradient-text\">deviens développeur web</span>") !!}
      </h2>
      <div class="max-w-4xl mx-auto space-y-4">
        <p>
          {{ __('Notre bachelier te permettra de te lancer dans tous les domaines du web, du développement au design.') }}
        </p>
        <p>{{ __('Après 3 ans chez nous, tu seras un vrai développeur full stack, mais pas que.') }}</p>
        <p>{{ __('Trop beau pour être vrai?') }}</p>
      </div>
      <a class="button inline-block" href="#">{{ __('Viens vérifier par toi même') }}</a>
    </div>
    <div class="">
      <img src="images/hero-image.png" alt="" class="base-shadow rounded-lg">
    </div>
  </section>
  <section class="mt-16 w-[90%] mx-auto max-w-5xl text-center">
    <h2 class="title">{{ __('Un apprentissage diversifié et complet') }}</h2>
    <p class="mt-4 max-w-1.5xl mx-auto">
      {{ __('Au terme du bachelier, vous possèderez de nombreuses compétences, importantes au métier de développeur web.') }}
    </p>
    <dl class="relative mt-8 text-left">
      @foreach ($teachings as $teaching)
        <x-teaching-accordion tabindex="0" :$teaching />
      @endforeach
    </dl>
    <a href="#" class="button inline-block mt-8">{{ __('Voir la grille des cours') }}</a>
  </section>
  <section class="mt-16 w-[90%] max-w-5xl mx-auto flex flex-wrap gap-6 text-center">
    <div class="w-full md:w-[48%] md:text-left space-y-4">
      <h2 class="title">{{ __('Un web de qualité, pour tous') }}</h2>
      <div class="space-y-4 max-w-1.5xl mx-auto">
        <p>
          {{ __('Dans notre section, nous croyons fermement en l\'importance de réaliser des sites de qualité, qui respectent les différentes normes actuelles du web.') }}
        </p>
        <p>
          {{ __('Nous pensons que les sites devraient être éthiques et respecter l\'environnement ainsi que les personnes qui les utilisent.') }}
        </p>
      </div>
    </div>
    <div class="w-full md:w-[48%] flex items-center">
      <img src="../images/responsive.jpg" alt="">
    </div>
    <a class="button inline-block max-w-[80%] mx-auto"
      href="#">{{ __('En apprendre plus sur la qualité web') }}</a>
  </section>
  <section class="mt-16 space-y-6 w-[90%] mx-auto max-w-5xl text-center">
    <div class="space-y-4">
      <h2 class="title">{{ __('Toi aussi tu peux le faire') }}</h2>
      <div class="max-w-1.5xl mx-auto space-y-4">
        <p>
          {{ __('Chaque année, nos étudiants doivent réaliser des projets ambitieux, que ce soit pour un client ou pour leur PFE.') }}
        </p>
        <p>{{ __('En voici quelques exemples.') }}</p>
      </div>
    </div>
    <div class="relative">
      <div class="columns-1 sm:columns-2 xl:columns-3 gap-6 space-y-6 break-inside-avoid">
        @foreach ($works as $work)
          <x-work-card :$work />
        @endforeach
      </div>
      <div
        class="w-full left-0 h-40 absolute bottom-0 from-white to-white/0 opacity-80 z-10 bg-gradient-to-t rounded-md">
      </div>
    </div>
    <a href="" class="button inline-block">{{ __('Voir tous les projets') }}</a>
  </section>
  <section class="space-y-4 grid items-center mt-16 w-[90%] max-w-5xl mx-auto text-center">
    <h2 class="title">{{ __('Rencontre tes futurs profs') }}</h2>
    <p class="max-w-1.5xl mx-auto">
      {{ __('Nous avons la chance d\'avoir une super équipe composée de professeurs permanents, de professionnels invités, et d\'anciens étudiants.') }}
    </p>
    <img src="images/teachers.jpg" alt="">
    <a href="#" class="button inline-block mx-auto ">{{ __('Voir tous les professeurs') }}</a>
  </section>
  <section class="mt-16 relative gap-2 ml-[5vw]">
    <div class="space-y-4 max-w-[33rem]">
      <h2 class="title">{{ __('Un travail garanti, en voici la preuve') }}</h2>
      <p>
        {{ __('Nos alumnis sont la preuve la plus évidente de la légitimité du bachelier. Voici quelques success story de nos anciens.') }}
      </p>
    </div>
    <div class="relative flex gap-x-4 overflow-x-scroll scroll-smooth snap-x snap-mandatory p-5 -ml-5 min-w-full "
      role="region" aria-label="Alumni cards carousel" tabindex="0">
      @foreach ($alumnis as $alumni)
        <x-alumni-card :$alumni />
      @endforeach
    </div>
    <a href="#" class="button inline-block">{{ __('home.alumni_cta') }}</a>
  </section>
  <section class="max-w-[90%] mt-16 space-y-4 mx-auto main-nav:mx-0">
    <h2 class="title max-w-[33rem]">{{ __('home.blog_title') }}</h2>
    <div class="space-y-2 max-w-[33rem]">
      <p>
        {{ __('home.blog_p1') }}
      </p>
      <p>
        {{ __('home.blog_p2') }}
      </p>
    </div>
    <ul class="space-y-4">
      <x-article-card />
      <x-article-card />
      <x-article-card />
    </ul>
    <a href="" class="button inline-block">{{ __('home.blog_cta') }}</a>
  </section>
  <section class="w-[90%] mt-16 space-y-4 mx-auto main-nav:mx-0 ">
    <h2 class="title max-w-[33rem]">{{ __('home.contact_title') }}</h2>
    <div class="space-y-2">
      <p class="font-bold">{{ __('home.contact_forum') }}</p>
      <x-search :$label :$button :$input :label-hidden="$labelHidden" class="max-w-[25rem]" />
    </div>
    <div class="space-y-2">
      <p class="font-bold">{{ __('home.contact_email') }}</p>
      <a href="" class="button inline-block">
        {{ __('home.contact_cta') }}
      </a>
    </div>
  </section>
  <section class="space-y-4 mt-16  w-[90%] mx-auto main-nav:mx-0">
    <h2 class="title max-w-[33rem]">{{ __('home.register_title') }}</h2>
    <p class="max-w-[33rem]">{{ __('home.register_subtitle') }}</p>
    <a class="button inline-block" href="">{{ __('home.register_cta') }}</a>
  </section>
</x-layouts.main>
