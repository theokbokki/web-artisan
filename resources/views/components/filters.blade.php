<div class="shrink">
  <div class="lg:hidden">
    <input type="checkbox" class="sr-only peer" id="filters" name="filters">
    <label for="filters" class="button inline-block">Filtres</label>
    <div class="fixed top-0 left-0 h-[100vh] w-[100vw] p-4 invisible peer-checked:visible z-10">
      <label for="filters" class="fixed inset-0 bg-slate-400 backdrop-blur-sm bg-opacity-20">
      </label>
      <div
        class="mx-auto w-full max-w-3xl flex flex-wrap min-h-0 rounded-lg bg-white p-4 gap-4 max-h-[75vh] overflow-scroll relative z-20 items-center">
        <div class="mx-auto">
          <p class="small-title">{{ __('Filtres') }}</p>
          <form action="/works" method="get" class="grid gap-8 mt-8">
            {{ $slot }}
            <button class="button" type="submit">Filtrer</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="hidden lg:block">
    <p class="small-title">{{ __('Filtres') }}</p>
    <form action="{{ request('url') }}" class="gap-4 mt-8 flex flex-wrap">
      {{ $slot }}
      <button class="button" type="submit">Filtrer</button>
    </form>
  </div>
</div>
