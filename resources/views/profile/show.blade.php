<x-layouts.main>
  <section class="max-w-5xl w-[90%] mx-auto">
    <h2 class="font-title font-bold text-slate-700 text-xl">
      {{ $user->name }}
    </h2>
    <div class="flex gap-4 mt-6">
      <img src="{{ $user->avatar }}" alt="" class="w-28 aspect-square object-cover rounded-lg">
      <div class="">
        @if (isset($user->tag))
          <p class="tag w-min">{{ $user->tag }}</p>
        @endif
        <p class="text-base mt-2">{{ $user->username }}</p>
      </div>
    </div>
    <p class="mt-6">{{ $user->excerpt }}</p>
  </section>
  <section class="mt-12 w-[90%] max-w-xl mx-auto">
    <h2 class="label">
      {{ __('Ses articles') }}
    </h2>
    <div>
      @foreach ($user->posts as $post)
        <x-post-card :$post />
      @endforeach
    </div>
  </section>
</x-layouts.main>
