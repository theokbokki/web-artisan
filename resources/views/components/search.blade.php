<form action="#" class="flex w-[90%] gap-x-4">
  <div class="grid">
    <label for="search" class="label">{{ $label }}</label>
    <div class="relative w-full">
      <div class="flex absolute items-center left-0 inset-y-0 pl-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-5 h-5 text-slate-400">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
      </div>
      <input type="search" id="search" name="search" class="input block w-full pl-10 ">
    </div>
  </div>
  <button type="submit" class="button self-end mt-4">{{ $button }}</button>
</form>
