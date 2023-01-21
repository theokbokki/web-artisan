<footer class="w-[90%] max-w-5xl mx-auto relative my-16">
  <h2 class="small-title mb-8">Menu</h2>
  <span class="invisible absolute -mt-10" id="footer-menu" aria-hidden></span>
  <div class="flex items-start flex-wrap ">
    <div class="w-full sm:w-[80%] max-w-5xl flex flex-wrap gap-x-6 gap-y-4 items-center order-1 sm:order-0">
      <a href="/" {{ request()->is(app()->getLocale()) ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Accueil') }}
      </a>
      <a href="/works" {{ request()->is(app()->getLocale() . '/works') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Projets étudiants') }}
      </a>

      <a href="/lessons-grid" {{ request()->is(app()->getLocale() . '/lessons-grid') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Grille des cours') }}
      </a>

      <a href="/teachers" {{ request()->is(app()->getLocale() . '/teachers') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Professeurs') }}
      </a>

      <a href="/alumnis" {{ request()->is(app()->getLocale() . '/alumnis') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Anciens') }}
      </a>

      <a href="/blog" {{ request()->is(app()->getLocale() . '/blog') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Blog') }}
      </a>

      <a href="/forum" {{ request()->is(app()->getLocale() . '/forum') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Forum') }}
      </a>

      <a href="/internships" {{ request()->is(app()->getLocale() . '/internships') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Stages') }}
      </a>

      <a href="/translations" {{ request()->is(app()->getLocale() . '/translations') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Traductions') }}
      </a>

      <a href="https://ecolevirtuelle.provincedeliege.be/asp/Admissions/Admissions/Accueil"
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('S\'inscrire à l\'école') }}
      </a>

      <a href="/contact" {{ request()->is(app()->getLocale() . '/contact') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Contact') }}
      </a>

      <a href="/terms-of-use" {{ request()->is(app()->getLocale() . '/terms-of-use') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Mentions Légales') }}
      </a>

      <a href="/privacy-policy" {{ request()->is(app()->getLocale() . '/privacy-policy') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Conditions générales') }}
      </a>

      <a href="https://hepl.be" class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Le site de la HEPL') }}
      </a>

      <a href="https://theoleonet.be" class="mobile-menu-link  w-max min-w-[200px]">
        {!! __('Fait avec ♥ par <span class="font-bold text-lg">❋</span>') !!}
      </a>

    </div>
    <div class="flex gap-x-6 gap-y-4 flex-wrap items-center sm:w-[20%] w-full sm:order-1 mb-10">
      <a href="/login" class="link no-underline font-bold max-w-[200px]">
        {{ __('Se connecter') }}
      </a>

      <a href="/register" class="button text-center w-full max-w-[200px]">
        {{ __('S\'inscrire') }}
      </a>

      <x-navigation.language-picker class="flex" />
    </div>
  </div>
</footer>
