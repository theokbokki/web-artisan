<x-layouts.main>
  <section class="space-y-8 w-[90%] ml-[5vw]">
    <div class="space-y-4 max-w-[33rem]">
      <h2 class="title">
        {{ __('register.title') }}
      </h2>
      <p>{{ __('register.subtitle') }}</p>
    </div>
  </section>
  <section class="w-[90%] ml-[5vw] space-y-4">
    <div class="space-y-16">
      <div class="space-y-6">
        <div>
          <p class="label" for="profile">Photo de profil</p>
          <img src="../../images/man.jpg" alt="" class="w-40 h-40 object-cover rounded-md ">
          <input class="sr-only" type="file" id="profile">
          <label for="profile" class="link">Changer la photo de profil</label>
        </div>
        <div class="grid sm:max-nav-2:grid-cols-2 nav-2:max-lg:grid-cols-1 lg:grid-cols-2 gap-8">
          <div>
            <p class="label" for="lastname">Nom</p>
            <p class="bg-slate-100 w-full p-2 rounded-md" type="text" id="lastname">Léonet</p>
          </div>
          <div>
            <p class="label" for="lastname">Prénom</p>
            <p class="bg-slate-100 w-full p-2 rounded-md" type="text" id="lastname">Théo</p>
          </div>
          <div>
            <p class="label" for="lastname">Email</p>
            <p class="bg-slate-100 w-full p-2 rounded-md" type="text" id="lastname">theoleonet@mail.test</p>
            <a class="link" href="">Changer l'email</a>
          </div>
          <div>
            <p class="label" for="lastname">Password</p>
            <p class="bg-slate-100 w-full p-2 rounded-md" type="text" id="lastname">••••••••</p>
            <a class="link" href="">Changer le mot de passe</a>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap gap-4">
        <button class="button">Se deconnecter</button>
        <button class="button bg-red-600 hover:bg-red-500 active:bg-red-700">Supprimer son compte</button>
      </div>
    </div>
  </section>
</x-layouts.main>
