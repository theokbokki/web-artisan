<x-layouts.main>
  <section class="w-[90%] max-w-xl mx-auto">
    <form method="POST" action="{{ route('register') }}" class="space-y-6">
      @csrf

      <!-- Name -->
      <fieldset class="grid gap-2">
        <label for="fullname" class="label">{{ __('Nom complet') }}</label>
        <p class="text-base text-slate-500">{{ __('Ex: Théo Léonet') }}</p>
        <x-input-error :messages="$errors->get('fullname')" />
        <input id="fullname" type="text" name="fullname" value="{{ old('fullname') }}" required autofocus
          class="input" />
      </fieldset>

      <!-- Username -->
      <fieldset class="grid gap-2">
        <label for="username" class="label">{{ __('Nom d\'utilisateur') }}</label>
        <p class="text-base text-slate-500">{{ __('Ex: theoleonet') }}</p>
        <x-input-error :messages="$errors->get('username')" />
        <input id="username" type="text" name="username" value="{{ old('username') }}" required autofocus
          class="input" />
      </fieldset>

      <!-- Email -->
      <fieldset class="grid gap-2">
        <label for="email" class="label">{{ __('Email') }}</label>
        <p class="text-base text-slate-500">{{ __('Ex: theo.leonet@student.hepl.be') }}</p>
        <x-input-error :messages="$errors->get('email')" />
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
          class="input" />
      </fieldset>

      <!-- Password -->
      <fieldset class="grid gap-2">
        <label for="password_confirmation" class="label">{{ __('Mot de passe') }}</label>
        <p class="text-base text-slate-500">{{ __('Ex: rosebonbongrenouilleglacevanille') }}</p>
        <x-input-error :messages="$errors->get('password')" />
        <input id="password" type="password" name="password" value="{{ old('password') }}" required class="input" />
      </fieldset>

      <!-- Password confirmation -->
      <fieldset class="grid gap-2">
        <label for="password_confirmation" class="label">{{ __('Confirmer le mot de passe') }}</label>
        <x-input-error :messages="$errors->get('password_confirmation')" />
        <input id="password_confirmation" type="password" name="password_confirmation"
          value="{{ old('password_confirmation') }}" required autofocus class="input" />
      </fieldset>

      <div class="flex items-center justify-end gap-4">
        <a class="link text-base" href="{{ route('login') }}">
          {{ __('Déja un compte ?') }}
        </a>

        <button type="submit" class="button">
          {{ __('Créer un compte') }}
        </button>
    </form>
  </section>
</x-layouts.main>
