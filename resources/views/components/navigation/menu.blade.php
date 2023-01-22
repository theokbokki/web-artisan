<nav class="hidden md:flex">
  <h2 class="sr-only">Menu</h2>
  <div class="flex flex-wrap gap-4 w-full">
    <div class="flex justify-around grow gap-4 items-center">
      <div class="">
        <a href="{{ LaravelLocalization::localizeUrl('/') }}"
          {{ request()->is(app()->currentLocale()) ? 'aria-current=page' : '' }} class="menu-link">

          {{ __('Accueil') }}
        </a>

      </div>
      <div class="">
        <a href="{{ LaravelLocalization::localizeUrl('/works') }}"
          {{ request()->is(app()->currentLocale() . '/works') ? 'aria-current=page' : '' }} class="menu-link">
          {{ __('Projets étudiants') }}
        </a>

      </div>
      <div class="">
        <a href="{{ LaravelLocalization::localizeUrl('/lessons-grid') }}"
          {{ request()->is(app()->currentLocale() . '/lessons-grid') ? 'aria-current=page' : '' }} class="menu-link">
          {{ __('Grille des cours') }}
        </a>

      </div>
      <div class="">
        <a href="{{ LaravelLocalization::localizeUrl('/teachers') }}"
          {{ request()->is(app()->currentLocale() . '/teachers') ? 'aria-current=page' : '' }} class="menu-link">
          {{ __('Professeurs') }}
        </a>

      </div>
      <div class="">
        <a href="{{ LaravelLocalization::localizeUrl('/alumnis') }}"
          {{ request()->is(app()->currentLocale() . '/alumnis') ? 'aria-current=page' : '' }} class="menu-link">
          {{ __('Anciens') }}
        </a>

      </div>
      <div class="">
        <a href="{{ LaravelLocalization::localizeUrl('/blog') }}"
          {{ request()->is(app()->currentLocale() . '/blog') ? 'aria-current=page' : '' }} class="menu-link">
          {{ __('Blog') }}
        </a>

      </div>
    </div>
    <div class="flex  justify-around grow gap-4 items-center">
      <div class="">
        <a href="{{ LaravelLocalization::localizeUrl('/forum') }}"
          {{ request()->is(app()->currentLocale() . '/forum') ? 'aria-current=page' : '' }} class="menu-link">
          {{ __('Forum') }}
        </a>

      </div>
      <div class="">
        <a href="{{ LaravelLocalization::localizeUrl('/internships') }}"
          {{ request()->is(app()->currentLocale() . '/internships') ? 'aria-current=page' : '' }} class="menu-link">
          {{ __('Stages') }}
        </a>

      </div>
      {{-- <div class=""> --}}
      {{--   <a href="/translations" {{ request()->is(app()->getLocale() . '/translations') ? 'aria-current=page' : '' }} --}}
      {{--     class="menu-link"> --}}
      {{--     {{ __('Traductions') }} --}}
      {{--   </a> --}}
      {{-- --}}
      {{-- </div> --}}
      <div class="">
        <a href="https://ecolevirtuelle.provincedeliege.be/asp/Admissions/Admissions/Accueil" class="menu-link">
          {{ __('S\'inscrire à l\'école') }}
        </a>

      </div>
      <div class="">
        <a href="{{ LaravelLocalization::localizeUrl('/contact') }}"
          {{ request()->is(app()->currentLocale() . '/contact') ? 'aria-current=page' : '' }} class="menu-link">
          {{ __('Contact') }}
        </a>

      </div>
    </div>
  </div>
</nav>
