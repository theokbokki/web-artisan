<nav class="hidden md:flex">
  <h2 class="sr-only">Menu</h2>
  <div class="flex flex-wrap gap-4 w-full">
    <div class="flex justify-around grow gap-4 items-center">
      <div class="">
        <a href="/" {{ request()->is(app()->getLocale()) ? 'aria-current=page' : '' }} class="menu-link">
          {{ __('Accueil') }}
        </a>

      </div>
      <div class="">
        <a href="/works" {{ request()->is(app()->getLocale() . '/works') ? 'aria-current=page' : '' }} class="menu-link">
          {{ __('Projets étudiants') }}
        </a>

      </div>
      <div class="">
        <a href="/lessons-grid" {{ request()->is(app()->getLocale() . '/lessons-grid') ? 'aria-current=page' : '' }}
          class="menu-link">
          {{ __('Grille des cours') }}
        </a>

      </div>
      <div class="">
        <a href="/teachers" {{ request()->is(app()->getLocale() . '/teachers') ? 'aria-current=page' : '' }}
          class="menu-link">
          {{ __('Professeurs') }}
        </a>

      </div>
      <div class="">
        <a href="/alumnis" {{ request()->is(app()->getLocale() . '/alumnis') ? 'aria-current=page' : '' }}
          class="menu-link">
          {{ __('Anciens') }}
        </a>

      </div>
      <div class="">
        <a href="/blog" {{ request()->is(app()->getLocale() . '/blog') ? 'aria-current=page' : '' }}
          class="menu-link">
          {{ __('Blog') }}
        </a>

      </div>
    </div>
    <div class="flex  justify-around grow gap-4 items-center">
      <div class="">
        <a href="/forum" class="menu-link"
          {{ request()->is(app()->getLocale() . '/forum') ? 'aria-current=page' : '' }}>
          {{ __('Forum') }}
        </a>

      </div>
      <div class="">
        <a href="/internships" {{ request()->is(app()->getLocale() . '/internships') ? 'aria-current=page' : '' }}
          class="menu-link">
          {{ __('Stages') }}
        </a>

      </div>
      <div class="">
        <a href="/translations" {{ request()->is(app()->getLocale() . '/translations') ? 'aria-current=page' : '' }}
          class="menu-link">
          {{ __('Traductions') }}
        </a>

      </div>
      <div class="">
        <a href="https://ecolevirtuelle.provincedeliege.be/asp/Admissions/Admissions/Accueil" class="menu-link">
          {{ __('S\'inscrire à l\'école') }}
        </a>

      </div>
      <div class="">
        <a href="/contact" {{ request()->is(app()->getLocale() . '/contact') ? 'aria-current=page' : '' }}
          class="menu-link">
          {{ __('Contact') }}
        </a>

      </div>
    </div>
  </div>
</nav>
