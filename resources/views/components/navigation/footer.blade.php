<footer class="w-[90%] max-w-5xl mx-auto relative my-16">
  <h2 class="small-title mb-8">Menu</h2>
  <span class="invisible absolute -mt-10" id="footer-menu" aria-hidden></span>
  <div class="flex items-start flex-wrap ">
    <div class="w-full sm:w-[80%] max-w-5xl flex flex-wrap gap-x-6 gap-y-4 items-center order-1 sm:order-0">
      <a href="/" {{ request()->is('/') ? 'aria-current=page' : '' }} class="mobile-menu-link  w-max min-w-[200px]">
        accueil
      </a>
      <a href="/works" {{ request()->is('works') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        Projets étudiants
      </a>
      <a href="/lessons-grid" {{ request()->is('lessons-grid') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        Grille des cours
      </a>
      <a href="/teachers" {{ request()->is('teachers') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        Professeurs
      </a>
      <a href="/alumnis" {{ request()->is('alumnis') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        Anciens
      </a>
      <a href="/blog" {{ request()->is('blog') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        Blog
      </a>
      <a href="/forum" {{ request()->is('forum') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        Forum
      </a>
      <a href="/internships" {{ request()->is('internships') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        Stages
      </a>
      <a href="/translations" {{ request()->is('translations') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        Traductions
      </a>
      <a href="https://ecolevirtuelle.provincedeliege.be/asp/Admissions/Admissions/Accueil"
        class="mobile-menu-link  w-max min-w-[200px]">
        S'inscrire à l'école
      </a>
      <a href="/contact" {{ request()->is('contact') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        Contact
      </a>
      <a href="/terms-of-use" {{ request()->is('terms-of-use') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        Mentions Légales
      </a>
      <a href="/privacy-policy" {{ request()->is('privacy-policy') ? 'aria-current=page' : '' }}
        class="mobile-menu-link  w-max min-w-[200px]">
        Conditions générales
      </a>
      <a href="https://hepl.be" class="mobile-menu-link  w-max min-w-[200px]">
        Le site de la HEPL
      </a>
      <a href="https://theoleonet.be" class="mobile-menu-link  w-max min-w-[200px]">
        Fait avec ♥ par <span class="font-bold text-lg">❋<span>
      </a>
    </div>
    <div class="flex gap-x-6 gap-y-4 flex-wrap items-center sm:w-[20%] w-full sm:order-1 mb-10">
      <a href="/login" class="link no-underline font-bold max-w-[200px]">
        Se connecter
      </a>
      <a href="/register" class="button text-center w-full max-w-[200px]">
        S'inscrire
      </a>
    </div>
  </div>
</footer>
