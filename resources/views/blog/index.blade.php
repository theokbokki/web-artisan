<x-layouts.main>
  <section class="w-[90%] max-w-5xl mx-auto">
    <h2 class="sr-only">{{ __('Blog') }}</h2>
    <div class="flex items-center gap-4 mt-8 lg:flex-wrap">
      <x-filters>
        <select class="select" id="date" name="date">
          <option value="latest_first">{{ __('Plus récent d\'abord') }}</option>
          <option value="oldest_first">{{ __('Plus ancien d\'abord') }}</option>
        </select>
        <select class="select" id="authors" name="authors">
          <option value="all-authors">{{ __('All authors') }}</option>
          @foreach ($authors as $author)
            <option value="{{ $author->slug }}">{{ $author->name }}</option>
          @endforeach
        </select>
      </x-filters>
      <x-search>
        <label class="label" for="search">{{ __('Cherchez dans notre blog') }}</label>
        <p>{{ __('Cherchez par tag, titre, date, ...') }}</p>
      </x-search>
    </div>
    <div class="mt-16 space-y-8">
      @foreach ($posts as $post)
        @if ($loop->first)
          <x-blog.post-card-featured :$post />
        @endif
        <x-blog.post-card :$post />
      @endforeach
    </div>
    <div class="mt-16">
      {{ $posts->links('pagination::tailwind') }}
    </div>
  </section>
  </x-layouts-main>
