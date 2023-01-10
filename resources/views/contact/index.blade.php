<x-layouts.main>
  <section class="w-[90%] max-w-xl mx-auto">
    <h2 class="sr-only">{{ __('Contact') }}</h2>
    <form action="/contact" method="post" class="space-y-6">
      @csrf

      <!-- Name -->
      <fieldset class="grid gap-2">
        <label for="subject" class="label">{{ __('Nom complet') }}</label>
        <p class="text-base text-slate-500">{{ __('Ex: Théo Léonet') }}</p>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
        <input id="subject" type="text" name="name" value="{{ old('name') }}" autofocus class="input"
          required />
      </fieldset>

      <!-- Email -->
      <fieldset class="grid gap-2">
        <label for="email" class="label">{{ __('Email') }}</label>
        <p class="text-base text-slate-500">{{ __('Ex: theo.leonet@student.hepl.be') }}</p>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <input id="email" type="email" name="email" value="{{ old('email') }}" autofocus class="input"
          required />
      </fieldset>

      <!-- Subject -->
      <fieldset class="grid gap-2">
        <label for="subject" class="label">{{ __('Sujet') }}</label>
        <p class="text-base text-slate-500">{{ __('Ex: Super site!') }}</p>
        <x-input-error :messages="$errors->get('subject')" class="mt-2" />
        <input id="subject" type="text" name="subject" value="{{ old('subject') }}" autofocus class="input"
          required />
      </fieldset>

      <!--Message-->
      <fieldset class="grid gap-2">
        <label for="message" class="label">{{ __('Message') }}</label>
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <textarea class="input h-64" id="message" name="message" required></textarea>
      </fieldset>

      <button class="button w-max mt-4" type="submit" id="contact_form_button">{{ __('Envoyer') }}</button>
    </form>
  </section>
</x-layouts.main>
