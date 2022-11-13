<form action="#" {{ $attributes->merge(['class' => 'grid']) }}>
  <label for="search" class="label @if ($labelHidden) sr-only @endif">{{ $label }}</label>
  <p class="mb-2 @if ($labelHidden) sr-only @endif">
    {{ $input }}
  </p>
  <div class="flex gap-x-2">
    <div class="relative w-full shrink">
      <div class="flex absolute items-center left-0 inset-y-0 pl-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-5 h-5 text-slate-400">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
      </div>
      <input type="search" id="search" name="search" class="input block w-full pl-10"
        placeholder="@if ($labelHidden) {{ $input }} @endif">
    </div>
    <button type="submit" class="button">
      <div class="">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="w-5 h-5 text-slate-50">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
      </div>
    </button>
  </div>
</form>
