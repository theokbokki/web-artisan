<x-layouts.main>
  <section class="w-[90%] max-w-5xl mx-auto">
    <h2 class="sr-only">{{ __('Blog') }}</h2>
    <div class="space-y-6 flex flex-wrap">
      <x-filters>
        <select class="select" id="date" name="date">
          <option value="latest_first">{{ __('Plus récent d\'abord') }}</option>
          <option value="oldest_first">{{ __('Plus ancien d\'abord') }}</option>
        </select>
        <select class="select" id="authors" name="authors">
          @foreach ($authors as $author)
            <option value="{{ $author->slug }}">{{ $author->name }}</option>
          @endforeach
        </select>
      </x-filters>
      <x-search></x-search>
    </div>
    <div class="mt-16 space-y-8">
      @foreach ($posts as $post)
        @if ($loop->first)
          <x-blog.post-card-featured :$post />
        @endif
        <x-blog.post-card :$post />
      @endforeach
    </div>
  </section>
  </x-layouts-main>
