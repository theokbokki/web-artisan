<x-layouts.main>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <section class="w-[90%] max-w-xl mx-auto">
    <form method="POST" action="{{ route('login') }}" class="space-y-6">
      @csrf

      <!-- Email -->
      <fieldset class="grid gap-2">
        <label for="email" class="label">{{ __('Email') }}</label>
        <p class="text-base text-slate-500">{{ __('Ex: theo.leonet@student.hepl.be') }}</p>
        <x-input-error :messages="$errors->get('email')" />
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
          class="input" />
      </fieldset>

      <!-- Password -->
      <div>
        <fieldset class="grid gap-2">
          <label for="password" class="label">{{ __('Password') }}</label>
          <p class="text-base text-slate-500">{{ __('Ex: rosebonbongrenouilleglacevanille') }}</p>
          <x-input-error :messages="$errors->get('password')" />
          <input id="password" type="password" name="password" value="{{ old('password') }}" required class="input" />
        </fieldset>

        @if (Route::has('password.request'))
          <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
          </a>
        @endif
      </div>

      <!-- Remember Me -->
      <div class="flex mt-4 gap-2">
        <input id="remember_me" type="checkbox" class="rounded border-gray-300 focus:ring-indigo-600" name="remember">
        <label for="remember_me" class="text-base text-slate-700">
          {{ __('Remember me') }}
        </label>
      </div>

      <div class="flex items-center justify-end gap-4">
        <a class="link text-base" href="{{ route('register') }}">
          {{ __('Pas encore de compte ?') }}
        </a>

        <button type="submit" class="button">
          {{ __('Se connecter') }}
        </button>
      </div>
    </form>
  </section>
</x-layouts.main>
