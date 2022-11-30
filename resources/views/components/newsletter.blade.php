  <div class="bg-gradient-to-r from-cyan-400 to-indigo-600 w-[90%] max-w-5xl p-0.5 rounded-lg mx-auto mt-24">
    <section
      class="w-full max-w-5xl mx-auto bg-white rounded-md p-5 sm:px-8 grid nav-2:flex gap-y-8 items-center justify-between gap-x-16">
      <div class="space-y-6 flex-1 min-w-0">
        <h2 class="title">{{ __('Abonne toi à notre newsletter') }}</h2>
        <div class="space-y-4 flex-1 max-w-1.5xl">
          <p>
            {{ __('Tu recevras un article chaque semaine reprenant les actualités de la section ou des faits sur ce qui s’est passé dans le monde du web dernièrement. ') }}
          </p>
          <p>{{ __('Bien sur tu pourras annuler ton abonnement à tout moment.') }}</p>
        </div>
      </div>
      <form action="#" class="gap-4 grid nav-2:min-w-[40%]" method="post">
        <fieldset class="grid gap-2">
          <label class="label" for="newsletter_email">{{ __('Ton email') }}</label>
          <p class="inline-block">{{ __('Ex: FuturEtudiant@student.hepl.be') }}</p>
          <input class="input max-w-[400px]" type="mail" id="newsletter_email" name="newsletter_email" />
        </fieldset>
        <button class="button mt-3 w-max" type="submit">{{ __('S’abonner à la newsletter') }}</button>
      </form>
    </section>
  </div>
