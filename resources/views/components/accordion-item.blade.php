<li class="group/item" {{ $attributes }}>
  <div
    class="xl:ml-[32rem] 2xl:ml-[42rem] group-hover/item:bg-slate-100 group-focus/item:bg-slate-100 cursor-pointer rounded-xl inline-block w-full max-w-[28rem] px-5 group-hover/item:py-5 group-focus/item:py-5 transition-all ease duration-300">
    <p class="text-xl font-bold">{{ $title }}</p>
    <div
      class="text-slate-600 group-focus/item:mt-6 max-h-0 group-focus/item:max-h-screen overflow-hidden ease duration-150">
      <p>{{ $content }}</p>
    </div>
  </div>
  <div class="absolute flex top-8 left-0 min-w-0">
    <img src="{{ $imgSrc }}" alt="{{ $imgAlt }}"
      class="hidden xl:inline-block drop-shadow-2xl min-w-0 max-w-[30rem] 2xl:max-w-[40rem] group-focus/item:opacity-100 opacity-0 transition duration-300 rounded-md perspective-l">
  </div>
</li>
