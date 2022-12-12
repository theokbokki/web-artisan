<nav class="block nav-2:hidden">
  <h2 class="sr-only">
    Main Navigation
  </h2>
  <input type="checkbox" name="menu" id="menu" class=" peer">
  <label for="menu" class="cursor-pointer text-slate-600 group">
    <div class="space-y-1.5">
      <span class="block w-7 h-0.5 bg-slate-600 group-hover:w-5 transition-all"></span>
      <span class="block w-7 h-0.5 bg-slate-600"></span>
      <span class="block w-5 h-0.5 bg-slate-600 group-hover:w-7 transition-all"></span>
    </div>
  </label>
  <div class="fixed top-0 left-0 h-[100vh] w-[100vw] p-4 invisible peer-checked:visible z-10">
    <label for="menu" class="fixed inset-0 bg-slate-900 backdrop-blur-sm bg-opacity-20">
    </label>
    <div
      class="mx-auto w-full max-w-3xl flex flex-wrap min-h-0 rounded-lg bg-white p-4 gap-4 max-h-[75vh] overflow-scroll relative z-20 items-center">
      <a href="/" aria-current="page" class="mobile-menu-link  w-full min-[400px]:w-[47%]">
        accueil
      </a>
      <a href="/{{ app()->getLocale() }}/works" class="mobile-menu-link  w-full min-[400px]:w-[47%]">
        Projets étudiants
      </a>
      <a href="/{{ app()->getLocale() }}/course-grid" class="mobile-menu-link  w-full min-[400px]:w-[47%]">
        Grille des cours
      </a>
      <a href="/{{ app()->getLocale() }}/teachers" class="mobile-menu-link  w-full min-[400px]:w-[47%]">
        Professeurs
      </a>
      <a href="/{{ app()->getLocale() }}/alumnis" class="mobile-menu-link  w-full min-[400px]:w-[47%]">
        Anciens
      </a>
      <a href="/{{ app()->getLocale() }}/blog" class="mobile-menu-link  w-full min-[400px]:w-[47%]">
        Blog
      </a>
      <a href="/{{ app()->getLocale() }}/forum" class="mobile-menu-link w-full min-[400px]:w-[47%]">
        Forum
      </a>
      <a href="/{{ app()->getLocale() }}/internships" class="mobile-menu-link w-full min-[400px]:w-[47%]">
        Stages
      </a>
      <a href="/{{ app()->getLocale() }}/translations" class="mobile-menu-link w-full min-[400px]:w-[47%]">
        Traductions
      </a>
      <a href="https://ecolevirtuelle.provincedeliege.be/asp/Admissions/Admissions/Accueil"
        class="mobile-menu-link w-full min-[400px]:w-[47%]">
        S'inscrire à l'école
      </a>
      <a href="/{{ app()->getLocale() }}/contact" class="mobile-menu-link w-full min-[400px]:w-[47%]">
        Contact
      </a>
      <a href="/{{ app()->getLocale() }}/login" class="mobile-menu-link w-full min-[400px]:w-[47%]">
        Se connecter
      </a>
      <a href="/{{ app()->getLocale() }}/register" class="w-full min-[400px]:w-[47%] button text-center">
        S'inscrire
      </a>
    </div>
  </div>
</nav>
