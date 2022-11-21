<x-layouts.main>
  <section class="space-y-8 w-[90%] ml-[5vw]">
    <div class="space-y-4 max-w-[33rem]">
      <h2 class="title">
        {{ __('register.title') }}
      </h2>
      <p>{{ __('register.subtitle') }}</p>
    </div>
  </section>
  <section class="w-[90%] ml-[5vw]">
    <form action="post" class="grid gap-6 xl:grid-cols-[180px_1fr]">
      <fieldset class="w-40">
        <label class="label" for="profile">Photo de profil</label>
        <div class="relative w-40 h-40 rounded-lg grid">
          <label for="profile" class="absolute inset-0 z-10 cursor-pointer bg-slate-900/30 rounded-lg"></label>
          <input class="sr-only" type="file" id="profile">
          <img src="../images/man.jpg" alt="" class="absolute inset-0 w-40 h-40 rounded-lg object-cover">
          <div class="grid items-center w-40 h-40 absolute inset-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6 mx-auto text-white">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
          </div>
        </div>
      </fieldset>
      <div class="grid sm:max-nav-2:grid-cols-2 nav-2:max-lg:grid-cols-1 lg:grid-cols-2 gap-8">
        <fieldset>
          <label class="label" for="lastname">Nom</label>
          <p>ex: einstein</p>
          <input class="input w-full" type="text" id="lastname">
        </fieldset>
        <fieldset>
          <label class="label" for="firstname">Prénom</label>
          <p>Ex: Albert</p>
          <input class="input w-full" type="text" id="firstname">
        </fieldset>
        <fieldset>
          <label class="label" for="email">Email</label>
          <p>Ex: albert.einstein@geni.us</p>
          <input class="input w-full" type="email" id="email">
        </fieldset>
        <fieldset>
          <label class="label" for="password">Mot de passe</label>
          <p>EX: trounoirdistortiondutemps</p>
          <input class="input w-full" type="text" id="password">
        </fieldset>
      </div>
      <fieldset>
        <button class="button w-max" type="submit">S'inscrire</button>
    </form>
    <a class="link inline-block mt-4" href="">Déja un compte?</a>
  </section>
</x-layouts.main>
