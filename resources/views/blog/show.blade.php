<x-layouts.main>
  <article class="w-[90%] max-w-5xl mx-auto space-y-6">
    <img src="/{{ $post->thumbnail }}" alt="" class="w-full aspect-video object-cover">
    <h2 class="small-title">{{ $post->title }}</h2>
    <div class="space-y-4">
      {!! $post->body !!}
    </div>
  </article>
  <section>
    @foreach ($randomPosts as $post)
      <x-blog.post-card :$post />
    @endforeach
  </section>
</x-layouts.main>
