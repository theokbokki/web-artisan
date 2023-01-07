<x-layouts.main>
  <section class="w-[90%] max-w-xl mx-auto">
    <h2 class="sr-only">{{ __('Contact') }}</h2>
    <form action="/contact" method="submit" class="space-y-6">@csrf

      <!-- Email -->
      <fieldset class="grid gap-2">
        <label for="email" class="label">{{ __('Email') }}</label>
        <p class="text-base text-slate-500">{{ __('Ex: theo.leonet@student.hepl.be') }}</p>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
          class="input" />
      </fieldset>

      <!-- Subject -->
      <fieldset class="grid gap-2">
        <label for="subject" class="label">{{ __('Sujet') }}</label>
        <p class="text-base text-slate-500">{{ __('Ex: Super site!') }}</p>
        <x-input-error :messages="$errors->get('subject')" class="mt-2" />
        <input id="subject" type="subject" name="subject" value="{{ old('subject') }}" required autofocus
          class="input" />
      </fieldset>

      <!--Message-->
      <fieldset class="grid gap-2">
        <label for="message" class="label">{{ __('Message') }}</label>
        <textarea class="input h-64" id="message" name="message" required></textarea>
      </fieldset>

      <button class="button w-max mt-4" type="submit">{{ __('Envoyer') }}</button>
    </form>
  </section>
</x-layouts.main>
