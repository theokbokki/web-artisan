<article class="snap-center min-w-clamp" role="group" aria-label="slide {{ $alumni->index }} of 5">
  <img src="{{ $alumni->avatar }}" alt=""
    class="w-full rounded-t-md h-40 object-cover lg:rounded-l-md lg:rounded-tr-none">
  <div class="">
    <h3 class="font-bold text-slate-700">{{ $alumni->name }}</h3>
    <p class="text-sm">{{ $alumni->job }}</p>
    <p>{{ $alumni->excerpt }}</p>
  </div>
  <a href="#" class="absolute inset-0 "><span class="sr-only">En apprendre plus sur {{ $alumni->name }}</span></a>
</article>
