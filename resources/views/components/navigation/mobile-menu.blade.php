{{-- <nav class="mt-10 min-[900px]:mt-32">
  <h2 class="text-xl font-bold font-title mb-6 sr-only">Menu</h2>
    <input type="checkbox" name="menu" id="menu" class="sr-only peer">
    <label for="menu" class="ml-auto mr-2 cursor-pointer text-slate-600 space-y-1.5 group">
      <span class="block w-7 h-0.5 bg-slate-600 group-hover:w-5 transition-all"></span>
      <span class="block w-7 h-0.5 bg-slate-600"></span>
      <span class="block w-5 h-0.5 bg-slate-600 group-hover:w-7 transition-all"></span>
    </label>
    <label for="menu"
    class="fixed inset-0 z-10 grid bg-slate-900 px-4 py-6 backdrop-blur-sm bg-opacity-20 invisible peer-checked:visible items-start justify-items-center">
			<ul
      class="flex flex-wrap bg-white rounded-md p-4 items-center gap-y-4 odd:gap-x-4 max-w-[32rem] max-h-[85vh] drop-shadow-md overflow-scroll">
    @foreach ($menu_items as $menu_item)
      <li>
        <a href="{{ $menu_item->link }}" @if (Request::root() . '/' . $link === URL::current()) aria-current="page" @endif
          class="text-slate-500 w-full hover:underline aria-[current=page]:text-indigo-600 aria-[current=page]:bg-indigo-50 aria-[current=page]:py-2 aria-[current=page]:pl-3 aria-[current=page]:pr-6 aria-[current=page]:border-l-indigo-600 aria-[current=page]:border-l-2 inline-block">
          {{ $menu_item->value }}
        </a>
      </li>
    @endforeach
  </ul>
</nav> --}}

<nav class="flex-1 flex sm:hidden">
  <h2 class="sr-only">Menu</h2>
  <input type="checkbox" name="menu" id="menu" class="sr-only peer">
  <label for="menu" class="ml-auto mr-2 cursor-pointer text-slate-600 space-y-1.5 group">
    <span class="block w-7 h-0.5 bg-slate-600 group-hover:w-5 transition-all"></span>
    <span class="block w-7 h-0.5 bg-slate-600"></span>
    <span class="block w-5 h-0.5 bg-slate-600 group-hover:w-7 transition-all"></span>
  </label>
  <label for="menu"
    class="fixed inset-0 z-10 grid bg-slate-900 px-4 py-6 backdrop-blur-sm bg-opacity-20 invisible peer-checked:visible items-start justify-items-center">
    <ul
      class="flex flex-wrap bg-white rounded-md p-4 items-center gap-y-4 odd:gap-x-4 max-w-[32rem] max-h-[85vh] drop-shadow-md overflow-scroll">
      <li class=" w-full min-[400px]:w-[47%]">
        <a href="#" aria-current="page"
          class="text-slate-500 w-full hover:underline aria-[current=page]:text-indigo-600 aria-[current=page]:bg-indigo-50 aria-[current=page]:py-2 aria-[current=page]:pl-3 aria-[current=page]:pr-6 aria-[current=page]:border-l-indigo-600 aria-[current=page]:border-l-2 inline-block">
          Accueil
        </a>
      </li>
      <li class=" w-full min-[400px]:w-[47%]">
        <a href="#"
          class="text-slate-500 w-full hover:underline aria-[current=page]:text-indigo-600 aria-[current=page]:bg-indigo-50 aria-[current=page]:py-2 aria-[current=page]:pl-3 aria-[current=page]:pr-6 aria-[current=page]:border-l-indigo-600 aria-[current=page]:border-l-2 inline-block">
          Projets étudiants
        </a>
      </li>
      <li class=" w-full min-[400px]:w-[47%]">
        <a href="#"
          class="text-slate-500 w-full hover:underline aria-[current=page]:text-indigo-600 aria-[current=page]:bg-indigo-50 aria-[current=page]:py-2 aria-[current=page]:pl-3 aria-[current=page]:pr-6 aria-[current=page]:border-l-indigo-600 aria-[current=page]:border-l-2 inline-block">
          Grille des cours
        </a>
      </li>
      <li class=" w-full min-[400px]:w-[47%]">
        <a href="#"
          class="text-slate-500 w-full hover:underline aria-[current=page]:text-indigo-600 aria-[current=page]:bg-indigo-50 aria-[current=page]:py-2 aria-[current=page]:pl-3 aria-[current=page]:pr-6 aria-[current=page]:border-l-indigo-600 aria-[current=page]:border-l-2 inline-block">
          Professeurs
        </a>
      </li>
      <li class=" w-full min-[400px]:w-[47%]">
        <a href="#"
          class="text-slate-500 w-full hover:underline aria-[current=page]:text-indigo-600 aria-[current=page]:bg-indigo-50 aria-[current=page]:py-2 aria-[current=page]:pl-3 aria-[current=page]:pr-6 aria-[current=page]:border-l-indigo-600 aria-[current=page]:border-l-2 inline-block">
          Anciens
        </a>
      </li>
      <li class=" w-full min-[400px]:w-[47%]">
        <a href="#"
          class="text-slate-500 w-full hover:underline aria-[current=page]:text-indigo-600 aria-[current=page]:bg-indigo-50 aria-[current=page]:py-2 aria-[current=page]:pl-3 aria-[current=page]:pr-6 aria-[current=page]:border-l-indigo-600 aria-[current=page]:border-l-2 inline-block">
          Blog
        </a>
      </li>
      <li class=" w-full min-[400px]:w-[47%]">
        <a href="#"
          class="text-slate-500 w-full hover:underline aria-[current=page]:text-indigo-600 aria-[current=page]:bg-indigo-50 aria-[current=page]:py-2 aria-[current=page]:pl-3 aria-[current=page]:pr-6 aria-[current=page]:border-l-indigo-600 aria-[current=page]:border-l-2 inline-block">
          Forum
        </a>
      </li>
      <li class=" w-full min-[400px]:w-[47%]">
        <a href="#"
          class="text-slate-500 w-full hover:underline aria-[current=page]:text-indigo-600 aria-[current=page]:bg-indigo-50 aria-[current=page]:py-2 aria-[current=page]:pl-3 aria-[current=page]:pr-6 aria-[current=page]:border-l-indigo-600 aria-[current=page]:border-l-2 inline-block">
          Stages
        </a>
      </li>
      <li class=" w-full min-[400px]:w-[47%]">
        <a href="#"
          class="text-slate-500 w-full hover:underline aria-[current=page]:text-indigo-600 aria-[current=page]:bg-indigo-50 aria-[current=page]:py-2 aria-[current=page]:pl-3 aria-[current=page]:pr-6 aria-[current=page]:border-l-indigo-600 aria-[current=page]:border-l-2 inline-block">
          Traductions
        </a>
      </li>
      <li class=" w-full min-[400px]:w-[47%]">
        <a href="#"
          class="text-slate-500 w-full hover:underline aria-[current=page]:text-indigo-600 aria-[current=page]:bg-indigo-50 aria-[current=page]:py-2 aria-[current=page]:pl-3 aria-[current=page]:pr-6 aria-[current=page]:border-l-indigo-600 aria-[current=page]:border-l-2 inline-block">
          S'inscrire à l'école
        </a>
      </li>
      <li class=" w-full min-[400px]:w-[47%]">
        <a href="#"
          class="text-slate-500 w-full hover:underline aria-[current=page]:text-indigo-600 aria-[current=page]:bg-indigo-50 aria-[current=page]:py-2 aria-[current=page]:pl-3 aria-[current=page]:pr-6 aria-[current=page]:border-l-indigo-600 aria-[current=page]:border-l-2 inline-block">
          Contact
        </a>
      </li>
    </ul>
  </label>
</nav>
