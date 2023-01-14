<x-layouts.main>
  <section class="w-[90%] max-w-5xl mx-auto">
    <h2 class="sr-only">{{ __('Blog') }}</h2>
    <div class="flex items-center gap-4 mt-8 lg:flex-wrap">
      <x-filters>
        <select class="select" id="date" name="date">
          <option value="latest_first" {{ request('date') == 'latest_first' ? 'selected' : '' }}>
            {{ __('Plus récent d\'abord') }}</option>
          <option value="oldest_first" {{ request('date') == 'oldest_first' ? 'selected' : '' }}>
            {{ __('Plus ancien d\'abord') }}</option>
        </select>
        <select class="select" id="authors" name="authors">
          <option value="all-authors">{{ __('Tous les auteurs') }}</option>
          @foreach ($authors as $author)
            <option value="{{ $author->slug }}" {{ request('authors') == $author->username ? 'selected' : '' }}>
              {{ $author->name }}</option>
          @endforeach
        </select>
        @if (request('search'))
          <input type="hidden" name="search" value="{{ request('search') }}" />
        @endif
      </x-filters>
      <x-search>
        <label class="label" for="search">{{ __('Cherchez dans notre blog') }}</label>
        <p>{{ __('Cherchez par tag, titre, date, ...') }}</p>
        @if (request('date'))
          <input type="hidden" name="date" value="{{ request('date') }}" />
        @endif
        @if (request('authors'))
          <input type="hidden" name="authors" value="{{ request('authors') }}" />
        @endif
      </x-search>
    </div>
    <div class="mt-16 space-y-8">
      @foreach ($posts as $post)
        @if ($loop->first && request()->page == 1)
          <x-blog.post-card-featured :$post />
        @else
          <x-blog.post-card :$post />
        @endif
      @endforeach
    </div>
    <div class="mt-16">
      {{ $posts->links('pagination::tailwind') }}
    </div>
  </section>
  </x-layouts-main>
