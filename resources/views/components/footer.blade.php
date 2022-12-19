<footer class="w-[90%] max-w-5xl mx-auto relative my-16">
  <h2 class="small-title mb-8">Menu</h2>
  <span class="invisible absolute -mt-10" id="footer-menu" aria-hidden></span>
  <div class="flex items-start flex-wrap ">
    <div class="w-full sm:w-[80%] max-w-5xl flex flex-wrap gap-x-6 gap-y-4 items-center order-1 sm:order-0">
      <a href="/" aria-current="page" class="mobile-menu-link  w-max min-w-[200px]">
        accueil
      </a>
      <a href="/{{ app()->getLocale() }}/works" class="mobile-menu-link  w-max min-w-[200px]">
        Projets étudiants
      </a>
      <a href="/{{ app()->getLocale() }}/course-grid" class="mobile-menu-link  w-max min-w-[200px]">
        Grille des cours
      </a>
      <a href="/{{ app()->getLocale() }}/teachers" class="mobile-menu-link  w-max min-w-[200px]">
        Professeurs
      </a>
      <a href="/{{ app()->getLocale() }}/alumnis" class="mobile-menu-link  w-max min-w-[200px]">
        Anciens
      </a>
      <a href="/{{ app()->getLocale() }}/blog" class="mobile-menu-link  w-max min-w-[200px]">
        Blog
      </a>
      <a href="/{{ app()->getLocale() }}/forum" class="mobile-menu-link  w-max min-w-[200px]">
        Forum
      </a>
      <a href="/{{ app()->getLocale() }}/internships" class="mobile-menu-link  w-max min-w-[200px]">
        Stages
      </a>
      <a href="/{{ app()->getLocale() }}/translations" class="mobile-menu-link  w-max min-w-[200px]">
        Traductions
      </a>
      <a href="https://ecolevirtuelle.provincedeliege.be/asp/Admissions/Admissions/Accueil"
        class="mobile-menu-link  w-max min-w-[200px]">
        S'inscrire à l'école
      </a>
      <a href="/{{ app()->getLocale() }}/contact" class="mobile-menu-link  w-max min-w-[200px]">
        Contact
      </a>
      <a href="/{{ app()->getLocale() }}/legal-mentions" class="mobile-menu-link  w-max min-w-[200px]">
        Mentions Légales
      </a>
      <a href="/{{ app()->getLocale() }}/" class="mobile-menu-link  w-max min-w-[200px]">
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
      <a href="/{{ app()->getLocale() }}/login" class="link no-underline font-bold max-w-[200px]">
        Se connecter
      </a>
      <a href="/{{ app()->getLocale() }}/register" class="button text-center w-full max-w-[200px]">
        S'inscrire
      </a>
    </div>
  </div>
</footer>
