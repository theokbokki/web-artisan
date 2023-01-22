<x-layouts.main>
  <section class="grid gap-x-10 gap-y-8 w-[90%] max-w-5xl mx-auto text-center">
    <div class="space-y-6">
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
      <a class="button inline-block" href="#teachings">{{ __('Viens vérifier par toi même') }}</a>
    </div>
    <div class="relative overflow-scroll w-full rounded-md">
      <img src="images/hero_image.svg" alt="" class="base-shadow rounded-lg min-w-[600px] ">
    </div>
  </section>
  <section class="mt-24 w-[90%] mx-auto max-w-5xl text-center relative">
    <p class="invisible absolute -top-64" aria-hidden="true" id="teachings"></p>
    <h2 class="font-bold font-title text-slate-800 text-2xl md:text-3xl">
      {{ __('Un apprentissage diversifié et complet') }}
    </h2>
    <p class="mt-6 max-w-1.5xl mx-auto">
      {{ __('Au terme du bachelier, vous possèderez de nombreuses compétences, importantes au métier de développeur web.') }}
    </p>
    <dl class="relative mt-8 text-left">
      @foreach ($teachings as $teaching)
        <x-teaching-accordion tabindex="0" :$teaching :index="$loop->index" />
      @endforeach
    </dl>
    <a href="/lessons-grid" class="button inline-block mt-8">{{ __('Voir la grille des cours') }}</a>
  </section>

  <section class="mt-24 w-[90%] max-w-5xl mx-auto flex flex-wrap gap-x-6 gap-y-8 text-center">
    <div class="w-full md:w-[48%] md:text-left space-y-6">
      <h2 class="font-bold font-title text-slate-800 text-2xl md:text-3xl">{{ __('Un web de qualité, pour tous') }}</h2>
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

  <section class="mt-24 space-y-8 w-[90%] mx-auto max-w-5xl text-center">
    <div>
      <h2 class="font-bold font-title text-slate-800 text-2xl md:text-3xl">{{ __('Toi aussi tu peux le faire') }}</h2>
      <div class="max-w-1.5xl mx-auto space-y-4 mt-6">
        <p>
          {{ __('Chaque année, nos étudiants doivent réaliser des projets ambitieux, que ce soit pour un client ou pour leur PFE.') }}
        </p>
        <p>{{ __('En voici quelques exemples.') }}</p>
      </div>
    </div>
    @if ($works)
      <div class="relative">
        <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-x-16 gap-y-10 items-start">
          @foreach ($works as $work)
            <x-work-card :$work />
          @endforeach
        </div>
        <div
          class="w-full left-0 h-40 absolute bottom-0 from-white to-white/0 opacity-80 z-10 bg-gradient-to-t rounded-md">
        </div>
      </div>
      <a href="/works" class="button inline-block">{{ __('Voir tous les projets') }}</a>
    @endif
  </section>
  <section class="grid items-center mt-24 w-[90%] max-w-5xl mx-auto text-center">
    <h2 class="font-bold font-title text-slate-800 text-2xl md:text-3xl">{{ __('Rencontre tes futurs profs') }}</h2>
    <p class="max-w-1.5xl mx-auto mt-6">
      {{ __('Nous avons la chance d\'avoir une super équipe composée de professeurs permanents, de professionnels invités, et d\'anciens étudiants.') }}
    </p>
    <img src="images/teachers.jpg" alt="" class="mt-8">
    <a href="/teachers" class="button inline-block mx-auto mt-8">{{ __('Voir tous les professeurs') }}</a>
  </section>
  <section class="mt-24 relative space-y-10 mx-auto max-w-5xl w-[90%] text-center">
    <div class="space-y-4">
      <h2 class="font-bold font-title text-slate-800 text-2xl md:text-3xl">
        {{ __('Un travail garanti, en voici la preuve') }}</h2>
      <p class="max-w-1.5xl mx-auto">
        {{ __('Nos alumnis sont la preuve la plus évidente de la légitimité du bachelier. Voici quelques success story de nos anciens.') }}
      </p>
    </div>
    <div class="grid lg:grid-cols-2 gap-16 items-start">
      @foreach ($alumnis as $user)
        <x-user-card :$user />
      @endforeach
    </div>
    <a href="/alumnis" class="button inline-block">{{ __('Voir tous nos anciens') }}</a>
  </section>
  <section class="max-w-5xl w-[90%] mt-24  mx-auto main-nav:mx-0 text-center">
    <h2 class="font-bold font-title text-slate-800 text-2xl md:text-3xl"> {{ __('Les actus du bachelier') }}</h2>
    <div class="space-y-4 max-w-1.5xl mx-auto mt-6">
      <p>
        {{ __('Nos professeurs postent régulièrement des articles à propos du bachelier ou même du web en général.') }}
      </p>
      <p>
        {{ __('Nous accueillons aussi parfois des invités dont nous pensons qu’il peuvent écrire des choses interessantes.') }}
      </p>
    </div>
    <div class=" mx-auto mt-10 space-y-8">
      @foreach ($posts as $post)
        <x-blog.post-card :$post />
      @endforeach
    </div>
    <a href="/blog" class="button inline-block mt-8">{{ __('Voir tous nos articles') }}</a>
  </section>

  <section class="space-y-8 w-[90%] max-w-5xl text-center mx-auto mt-24">
    <h2 class="font-bold font-title text-slate-800 text-2xl md:text-3xl">
      {{ __('Ne sois pas timide, viens nous parler') }}</h2>
    <div class="flex justify-between gap-8 max-w-1.5xl mx-auto flex-wrap">
      <div class="space-y-2 self-center mx-auto">
        <p class="font-bold">{{ __('Sur notre forum') }}</p>
        <a href="/forum" class="button inline-block">
          {{ __('Une question ? c\'est par ici') }}
        </a>
      </div>
      <div class="space-y-2 mx-auto">
        <p class="font-bold">{{ __('Directement par email') }}</p>
        <a href="/contact" class="button inline-block">
          {{ __('Accéder au formulaire de contact') }}
        </a>
      </div>
    </div>
  </section>
  <section class="space-y-4 w-[90%] max-w-5xl text-center mx-auto mt-24">
    <h2 class="font-bold font-title text-slate-800 text-2xl md:text-3xl">{{ __('Construis ton futur avec nous') }}
    </h2>
    <p class="max-w-1.5xl mx-auto">
      {{ __('Notre site t’as convaincu? Alors inscris toi à la HEPL et deviens un grand développeur et designer web.') }}
    </p>
    <a class="button inline-block" href="https://www.hepl.be/fr/inscription">{{ __('S’inscrire au bachelier') }}</a>
  </section>
</x-layouts.main>
