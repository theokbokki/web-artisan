<x-layouts.main>
  <article class="w-[90%] max-w-5xl mx-auto space-y-6">
    <div>
      <img src="/{{ $work->thumbnail }}" alt="" class="w-full aspect-video object-cover rounded-md">
    </div>
    <h2 class="small-title">{{ $work->title }}</h2>
    <div class="space-y-4">
      {!! $work->body !!}
    </div>
  </article>
</x-layouts.main>
