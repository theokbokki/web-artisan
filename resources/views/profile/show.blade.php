<x-layouts.main>
  <section class="max-w-5xl w-[90%] mx-auto">
    <div class="flex max-w-max gap-4">
      <img src="/{{ $user->avatar }}" alt="" class="w-28 h-28 aspect-square object-cover rounded-lg">
      <div class="space-y-2">
        <h2 class="font-title font-bold">
          {{ $user->username }}
        </h2>
        <p class="text-base">{{ $user->name }}</p>
        <div class="flex gap-2 flex-wrap">
          @if ($user->roles)
            @foreach ($user->roles as $role)
              <p class="tag w-min">{{ $role->role }}</p>
            @endforeach
          @endif
        </div>
      </div>
    </div>
    <p class="mt-6 max-w-1.5xl">{{ $user->excerpt }}</p>
    <div class="flex gap-4 mt-6 flex-wrap items-center">
      @if ($user->id == auth()->id())
        <a href="/profile" class="button inline-block">Edit profile</a>
      @endif
      @if ($user->id == auth()->id())
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="link">Logout</button>
        </form>
      @endif
    </div>
    <div class="space-y-4 mt-6">
      <p class="small-title">{{ __('À propos') }}</p>
      @if ($user->body)
        {!! $user->body !!}
      @endif
    </div>
  </section>

  @if ($user->posts->count())
    <section class="mt-12 lg:mt-24 w-[90%] max-w-5xl mx-auto space-y-6">
      <h2 class="label">
        {{ __('Ses articles') }}
      </h2>
      <div class="space-y-8">
        @foreach ($user->posts as $post)
          <x-blog.post-card :$post />
        @endforeach
      </div>
    </section>
  @endif

  @if ($user->questions->count())
    <section class="mt-12 lg:mt-24 w-[90%] max-w-5xl mx-auto space-y-6">
      <h2 class="label">
        {{ __('Ses questions') }}
      </h2>
      <div class="space-y-8">
        @foreach ($user->questions as $question)
          <x-forum.question :$question />
        @endforeach
      </div>
    </section>
  @endif

  @if ($user->works->count())
    <section class="mt-12 lg:mt-24 w-[90%] max-w-5xl mx-auto space-y-6">
      <h2 class="label">
        {{ __('Ses travaux') }}
      </h2>
      <div class="space-y-8">
        @foreach ($user->works as $work)
          <x-work-card :$work />
        @endforeach
      </div>
    </section>
  @endif

  @if ($user->lessons->count())
    <section class="mt-12 lg:mt-24 w-[90%] max-w-5xl mx-auto space-y-6">
      <h2 class="label">
        {{ __('Ses cours') }}
      </h2>
      <div class="space-y-8">
        @foreach ($user->lessons as $lesson)
        @endforeach
      </div>
    </section>
  @endif
</x-layouts.main>
