<div class="">
  <input type="radio" name="accordion" id="accordion-{{ $index }}" class="sr-only peer" tabindex="0"
    @if (!$index) checked="true" @endif>
  <label for="accordion-{{ $index }}"
    class="cursor-pointer flex transition-all duration-150 justify-between text-slate-700 peer-focus-visible:border-x-4 peer-focus-visible:border-t-4 peer-focus-visible:border-indigo-400/80 peer-checked:bg-slate-100 peer-checked:mt-5 p-5 rounded-md peer-checked:rounded-b-none hover:bg-slate-100 peer-checked:[&>svg]:rotate-90">
    <span class="font-title text-xl">{{ $teaching->teaching }}</span>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
      class="w-6 h-6 transition-all duration-300">
      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
    </svg>
  </label>
  <div
    class="max-h-0 peer-checked:max-h-screen overflow-hidden transition-all duration-150 space-y-2 peer-checked:bg-slate-100 peer-checked:px-5 peer-checked:pb-5 peer-checked:rounded-b-md peer-checked:mb-5 peer-focus-visible:border-x-4 peer-focus-visible:border-b-4 peer-focus-visible:border-indigo-400/80">

    {!! $teaching->body !!}
  </div>
</div>
