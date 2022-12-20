<x-layouts.main>
  <section class="w-[90%] max-w-5xl mx-auto">
    <h2 class="sr-only">{{ __('Blog') }}</h2>
    <div class="space-y-6 flex flex-wrap">
      <x-forum.filters />
      <x-forum.search />
    </div>
    <div class="mt-16">
      @foreach ($posts as $post)
        <x-blog.post-card :$post />
      @endforeach
    </div>
  </section>
  </x-layouts-main>
