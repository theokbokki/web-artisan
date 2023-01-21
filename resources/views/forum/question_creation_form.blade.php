<!-- Form -->
<x-layouts.main>
  <section class="w-[90%] max-w-xl mx-auto">
    <form method="POST" action="/question/store" class="space-y-6">
      @csrf
      <!--Title -->
      <fieldset class="grid gap-2">
        <label for="title" class="label">{{ __('Titre') }}</label>
        <p class="text-base text-slate-500">{{ __('Ex: Quels sont les chocolats préférés de monsieur Vilain?') }}</p>
        <x-input-error :messages="$errors->get('title')" class="mt-2" />
        <input id="title" type="text" name="title" value="{{ session('title') ?? '' }}" autofocus
          class="input" />
      </fieldset>

      <!--Details-->
      <fieldset class="grid gap-2">
        <label for="details" class="label">{{ __('Détails du problème') }}</label>
        <x-input-error :messages="$errors->get('details')" class="mt-2" />
        <textarea class="input h-64" id="details" name="details">{{ session('details') ?? '' }}</textarea>
      </fieldset>

      <!--Tags-->
      <fieldset class="grid gap-2">
        <label for="tags" class="label">{{ __('Tags') }}</label>
        <p class="text-base text-slate-500">{{ __('Ex: Professeur') }}</p>
        <x-input-error :messages="session('tags_count_exceeded')" class="mt-2" />
        <div class="flex gap-4">
          <input type="text" name="tags" class="input w-full" />
          <input type="hidden" id="old_tags" name="old_tags"
            value="{{ session('tags') !== null ? implode(',', session('tags')) : null }}">
          <button type="submit" formaction="/question/add-tags" class="button font-bold">+</button>
        </div>
      </fieldset>
      @if (session('tags'))

        <div class="flex flex-wrap gap-2">
          @foreach (session('tags') as $tag)
            <p class="tag">{{ $tag }}</p>
          @endforeach
        </div>
      @endif


      <button type="submit" class="button" id="login-button">
        {{ __('Poser ma question') }}
      </button>
      </div>
    </form>
  </section>
</x-layouts.main>
