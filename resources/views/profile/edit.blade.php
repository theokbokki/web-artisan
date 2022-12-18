<x-layouts.main>
  <section class="max-w-5xl w-[90%] mx-auto">
    <div class="flex max-w-max gap-4">
      <img src="{{ $user->avatar }}" alt="" class="w-28 h-28 aspect-square object-cover rounded-lg">
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
  </section>
</x-layouts.main>
