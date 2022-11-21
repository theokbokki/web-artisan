<x-layouts.main>
  <section class="space-y-8 w-[90%] ml-[5vw]">
    <div class="space-y-4 max-w-[33rem]">
      <h2 class="title">
        {{ __('login.title') }}
      </h2>
      <p>{{ __('login.title') }}</p>
    </div>
  </section>
  <section class="w-[90%] ml-[5vw]">
    <form action="post" class="grid gap-6 max-w-[33rem]">
      <fieldset>
        <label class="label" for="email">Email</label>
        <p>Ex: albert.einstein@geni.us</p>
        <input class="input w-full" type="email" id="email">
      </fieldset>
      <fieldset>
        <label class="label" for="password">Mot de passe</label>
        <p>EX: trounoirdistortiondutemps</p>
        <input class="input w-full" type="text" id="password">
        <a class="link" href="">Mot de passe oublié?</a>
      </fieldset>
      <button class="button w-max" type="submit">Se connecter</button>
    </form>
    <a class="link mt-4 inline-block" href="">Tu n'as pas encore de compte?</a>
  </section>
</x-layouts.main>
