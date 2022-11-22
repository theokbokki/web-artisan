<aside
  class="ml-[5vw] flex-1 hidden sticky top-0 nav-2:flex pt-10 max-w-max self-start border-r border-slate-200 pr-5 h-[100vh]">
  <h2 class="sr-only">Menu</h2>
  <ul class="space-y-4  max-h-[90vh] overflow-scroll w-40">
    <li class=" w-full">
      <a href="/" aria-current="page" class="menu-link">
        Accueil
      </a>
    </li>
    <li class=" w-full ">
      <a href="/{{ app()->getLocale() }}/works" class="menu-link">
        Projets étudiants
      </a>
    </li>
    <li class=" w-full ">
      <a href="/{{ app()->getLocale() }}/course-grid" class="menu-link">
        Grille des cours
      </a>
    </li>
    <li class=" w-full ">
      <a href="/{{ app()->getLocale() }}/teachers" class="menu-link">
        Professeurs
      </a>
    </li>
    <li class=" w-full ">
      <a href="/{{ app()->getLocale() }}/alumnis" class="menu-link">
        Anciens
      </a>
    </li>
    <li class=" w-full ">
      <a href="/{{ app()->getLocale() }}/blog" class="menu-link">
        Blog
      </a>
    </li>
    <li class=" w-full ">
      <a href="/{{ app()->getLocale() }}/forum" class="menu-link">
        Forum
      </a>
    </li>
    <li class=" w-full ">
      <a href="/{{ app()->getLocale() }}/internships" class="menu-link">
        Stages
      </a>
    </li>
    <li class=" w-full ">
      <a href="/{{ app()->getLocale() }}/translations" class="menu-link">
        Traductions
      </a>
    </li>
    <li class=" w-full ">
      <a href="https://ecolevirtuelle.provincedeliege.be/asp/Admissions/Admissions/Accueil" class="menu-link">
        S'inscrire à l'école
      </a>
    </li>
    <li class=" w-full ">
      <a href="/{{ app()->getLocale() }}/contact" class="menu-link">
        Contact
      </a>
    </li>
  </ul>
</aside>
