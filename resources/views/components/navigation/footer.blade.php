<footer class="w-[90%] max-w-5xl mx-auto relative my-16">
  <h2 class="small-title mb-8">Menu</h2>
  <span class="invisible absolute -mt-10" id="footer-menu" aria-hidden></span>
  <div class="flex items-start flex-wrap ">
    <div class="w-full sm:w-[80%] max-w-5xl flex flex-wrap gap-x-6 gap-y-4 items-center order-1 sm:order-0">
      <a href="{{ LaravelLocalization::localizeUrl('/') }}"
        {{ request()->is(app()->currentLocale()) ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Accueil') }}
      </a>
      <a href="{{ LaravelLocalization::localizeUrl('/works') }}"
        {{ request()->is(app()->currentLocale() . '/works') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Projets étudiants') }}
      </a>

      <a href="{{ LaravelLocalization::localizeUrl('/lessons-grid') }}"
        {{ request()->is(app()->currentLocale() . '/lessons-grid') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Grille des cours') }}
      </a>

      <a href="{{ LaravelLocalization::localizeUrl('/teachers') }}"
        {{ request()->is(app()->currentLocale() . '/teachers') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Professeurs') }}
      </a>

      <a href="{{ LaravelLocalization::localizeUrl('/alumnis') }}"
        {{ request()->is(app()->currentLocale() . '/alumnis') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Anciens') }}
      </a>

      <a href="{{ LaravelLocalization::localizeUrl('/blog') }}"
        {{ request()->is(app()->currentLocale() . '/blog') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Blog') }}
      </a>

      <a href="{{ LaravelLocalization::localizeUrl('/forum') }}"
        {{ request()->is(app()->currentLocale() . '/forum') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Forum') }}
      </a>

      <a href="{{ LaravelLocalization::localizeUrl('/internships') }}"
        {{ request()->is(app()->currentLocale() . '/internships') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Stages') }}
      </a>

      {{-- <a href="{{ LaravelLocalization::localizeUrl('/translations') }}" --}}
      {{--   {{ request()->is(app()->currentLocale().'/translations') ? 'aria-current=page' : '' }} --}}
      {{--   class="mobile-menu-link  w-max min-w-[200px]"> --}}
      {{--   {{ __('Traductions') }} --}}
      {{-- </a> --}}

      <a href="https://ecolevirtuelle.provincedeliege.be/asp/Admissions/Admissions/Accueil"
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('S\'inscrire à l\'école') }}
      </a>

      <a href="{{ LaravelLocalization::localizeUrl('/contact') }}"
        {{ request()->is(app()->currentLocale() . '/contact') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Contact') }}
      </a>

      <a href="{{ LaravelLocalization::localizeUrl('/terms-of-use') }}"
        {{ request()->is(app()->currentLocale() . '/terms-of-use') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        {{ __('Mentions Légales') }}
      </a>

      <a href="{{ LaravelLocalization::localizeUrl('/privacy-policy') }}"
        {{ request()->is(app()->currentLocale() . '/privacy-policy') ? 'aria-current=page' : '' }}
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
      @auth
        <a href="/profile/{{ auth()->user()->slug }}">
          <img src="/{{ auth()->user()->avatar }}" alt="" class="w-9 h-9 object-cover rounded-md">
        </a>
      @endauth
      @guest
        <a href="/login" class="link no-underline font-bold max-w-[200px]">
          {{ __('Se connecter') }}
        </a>

        <a href="/register" class="button text-center w-full max-w-[200px]">
          {{ __('S\'inscrire') }}
        </a>
      @endguest

      <x-navigation.language-picker class="flex" />
    </div>
  </div>
</footer>
