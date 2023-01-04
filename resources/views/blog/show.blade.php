<x-layouts.main>
  <article class="w-[90%] max-w-5xl mx-auto space-y-6">
    <div>
      <img src="/{{ $post->thumbnail }}" alt="" class="w-full aspect-video object-cover rounded-md">
    </div>
    <h2 class="small-title">{{ $post->title }}</h2>
    <div class="space-y-4">
      {!! $post->body !!}
    </div>
  </article>
  <section class="w-[90%] max-w-5xl mx-auto mt-24 space-y-8">
    <h2 class="small-title">{{ __('D\'autres posts que vous pourriez aimer') }}</h2>
    @foreach ($randomPosts as $post)
      <x-blog.post-card :$post />
    @endforeach
  </section>
</x-layouts.main>
