<nav class="hidden md:flex">
  <h2 class="sr-only">Menu</h2>
  <div class="flex flex-wrap gap-4 w-full">
    <div class="flex justify-around grow gap-4 items-center">
      <div class="">
        <a href="/" {{ request()->is('/') ? 'aria-current=page' : '' }} class="menu-link">
          Accueil
        </a>
      </div>
      <div class="">
        <a href="/works" {{ request()->is('works') ? 'aria-current=page' : '' }} class="menu-link">
          Projets étudiants
        </a>
      </div>
      <div class="">
        <a href="/lessons-grid" {{ request()->is('lessons-grid') ? 'aria-current=page' : '' }} class="menu-link">
          Grille des cours
        </a>
      </div>
      <div class="">
        <a href="/teachers" {{ request()->is('teachers') ? 'aria-current=page' : '' }} class="menu-link">
          Professeurs
        </a>
      </div>
      <div class="">
        <a href="/alumnis" {{ request()->is('alumnis') ? 'aria-current=page' : '' }} class="menu-link">
          Anciens
        </a>
      </div>
      <div class="">
        <a href="/blog" {{ request()->is('blog') ? 'aria-current=page' : '' }} class="menu-link">
          Blog
        </a>
      </div>
    </div>
    <div class="flex {{ request()->is('forum') ? 'aria-current=page' : '' }} justify-around grow gap-4 items-center">
      <div class="">
        <a href="/forum" class="menu-link">
          Forum
        </a>
      </div>
      <div class="">
        <a href="/internships" {{ request()->is('internships') ? 'aria-current=page' : '' }} class="menu-link">
          Stages
        </a>
      </div>
      <div class="">
        <a href="/translations" {{ request()->is('translations') ? 'aria-current=page' : '' }} class="menu-link">
          Traductions
        </a>
      </div>
      <div class="">
        <a href="https://ecolevirtuelle.provincedeliege.be/asp/Admissions/Admissions/Accueil" class="menu-link">
          S'inscrire à l'école
        </a>
      </div>
      <div class="">
        <a href="/contact" {{ request()->is('contact') ? 'aria-current=page' : '' }} class="menu-link">
          Contact
        </a>
      </div>
    </div>
  </div>
</nav>
