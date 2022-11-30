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
          <form action="" class="grid gap-8 mt-8">
            <select class="input select-bg appearance-none min-w-max pr-14" id="authors" name="authors">
              <option value="latest_first">{{ __('Plus récent d\'abord') }}</option>
              <option value="oldest_first">{{ __('Plus ancien d\'abord') }}</option>
            </select>
            <select class="input select-bg appearance-none min-w-max pr-14" id="solved_status" name="solved_status">
              <option value="solved_and_unsolved">{{ __('Résolu et non résolu') }}</option>
              <option value="solved_only">{{ __('Résolu uniquement') }}</option>
              <option value="unsolved_only">{{ __('Non résolu uniquement') }}</option>
            </select>
            <select class="input select-bg appearance-none min-w-max pr-14" id="popularity" name="popularity">
              <option value="most_popular_first">{{ __('Plus populaire d\'abord') }}</option>
              <option value="less_popular_first">{{ __('Moins populaire d\'abord') }}</option>
            </select>
            <button class="button" type="submit">Filtrer</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="hidden lg:block">
    <p class="small-title">{{ __('Filtres') }}</p>
    <form action="" class="gap-4 mt-8 flex flex-wrap">
      <select class="input select-bg appearance-none min-w-max pr-14" id="authors" name="authors">
        <option value="latest_first">{{ __('Plus récent d\'abord') }}</option>
        <option value="oldest_first">{{ __('Plus ancien d\'abord') }}</option>
      </select>
      <select class="input select-bg appearance-none min-w-max pr-14" id="solved_status" name="solved_status">
        <option value="solved_and_unsolved">{{ __('Résolu et non résolu') }}</option>
        <option value="solved_only">{{ __('Résolu uniquement') }}</option>
        <option value="unsolved_only">{{ __('Non résolu uniquement') }}</option>
      </select>
      <select class="input select-bg appearance-none min-w-max pr-14" id="popularity" name="popularity">
        <option value="most_popular_first">{{ __('Plus populaire d\'abord') }}</option>
        <option value="less_popular_first">{{ __('Moins populaire d\'abord') }}</option>
      </select>
      <button class="button" type="submit">Filtrer</button>
    </form>
  </div>
</div>
