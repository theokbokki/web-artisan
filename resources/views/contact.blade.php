<x-layouts.main>
  <section class="space-y-8 w-[90%] ml-[5vw]">
    <div class="space-y-4 max-w-[33rem]">
      <h2 class="title">
        {{ __('contact.title') }}
      </h2>
      <p>{{ __('contact.subtitle') }}</p>
    </div>
  </section>
  <section class="w-[90%] ml-[5vw]">
    <form action="post" class="grid gap-6">
      <div class="grid sm:max-nav-2:grid-cols-2 nav-2:max-lg:grid-cols-1 lg:grid-cols-2 gap-8">
        <fieldset>
          <label class="label" for="lastname">Nom</label>
          <p>Ex: Einstein</p>
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
          <label class="label" for="subject">Sujet</label>
          <p>EX: Albert est un génie !</p>
          <input class="input w-full" type="text" id="subject">
        </fieldset>

      </div>
      <fieldset>
        <label class="label" for="message">Message</label>
        <p>Ex: Il a inventé la théorie de la relativité générale</p>
        <textarea class="input w-full" rows="8" id="message"></textarea>
      </fieldset>
      <button class="button w-max" type="submit">Envoyer le message</button>
    </form>
  </section>
</x-layouts.main>
