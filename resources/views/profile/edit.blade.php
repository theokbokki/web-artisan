<x-layouts.main>
  <section class="w-[90%] max-w-xl mx-auto">
    <h2 class="small-title">{{ __('Modifier votre profil') }}</h2>
    <p class="mt-2">{{ __('Laissez les champs vide si vous ne voulez pas les changer') }}</p>
    <form method="POST" action="{{ route('profile.update') }}" class="space-y-6" enctype="multipart/form-data">
      @csrf
      @method('PATCH')

      <fieldset class="grid gap-2">
        <label class="label" for="avatar">{{ __('Avatar') }}</label>
        <p class="flex items-start gap-2">{{ __('Actuel: ') }} <img src="/{{ $user->avatar }}" alt=""
            id="user-avatar" class="rounded-md w-24 h-24 object-cover"></p>
        <input
          class="input file:bg-indigo-600 file:border-none file:text-slate-50 file:py-2 file:px-4 file:rounded-md file:mr-4 file:-ml-2 hover:file:bg-indigo-500 active:file:bg-indigo-700"
          type="file" id="avatar" name="avatar" accept=".jpg, .png">
      </fieldset>

      <!-- Full Name -->
      <div class="grid gap-2">
        <p class="label">{{ __('Nom complet') }}</p>
        <p class="input text-slate-400 border-none cursor-not-allowed">{{ $user->name }}</p>
      </div>

      <!-- Username -->
      <fieldset class="grid gap-2">
        <label for="username" class="label">{{ __('Nom d\'utilisateur') }}</label>
        <p class="text-base text-slate-500" id="current-username">{{ __('Actuel: ') . $user->username }}</p>
        <input id="username" type="text" name="username" value="{{ old('username') }}" class="input" />
      </fieldset>

      <!-- Email -->
      <fieldset class="grid gap-2">
        <label for="email" class="label">{{ __('Email') }}</label>
        <p class="text-base text-slate-500" id="current-email">{{ __('Actuel: ' . $user->email) }}</p>
        <input id="email" type="email" name="email" value="{{ old('email') }}" class="input" />
      </fieldset>

      <!-- Old password -->
      <fieldset class="grid gap-2">
        <label for="old_password" class="label">{{ __('Ancien mot de passe') }}</label>
        <input id="old_password" type="password" name="old_password" value="{{ old('old_password') }}"
          class="input" />
      </fieldset>

      <!-- New Password -->
      <fieldset class="grid gap-2">
        <label for="password" class="label">{{ __('Nouveau mot de passe') }}</label>
        <input id="password" type="password" name="password" value="{{ old('password') }}" class="input" />
      </fieldset>

      <!-- Password confirmation -->
      <fieldset class="grid gap-2">
        <label for="password_confirmation" class="label">{{ __('Confirmer le mot de passe') }}</label>
        <input id="password_confirmation" type="password" name="password_confirmation"
          value="{{ old('password_confirmation') }}" class="input" />
      </fieldset>


      <button type="submit" class="button" id="profile-update-button">
        {{ __('Modifier') }}
      </button>
      </div>
    </form>
  </section>
</x-layouts.main>
