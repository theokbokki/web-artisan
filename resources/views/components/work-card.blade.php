<div class="relative input p-5 text-left break-inside-avoid-column">
  <div class="space-y-2">
    <div class="flex items-center justify-between">
      <div class="flex items-center gap-2">
        <div class="w-10 h-10">
          <img src="{{ $work->user->avatar }}" alt="" class="object-cover w-full h-full rounded-md">
        </div>
        <p class="font-bold text-slate-700 leading-4">{{ $work->user->name }}</p>
      </div>
      <p class="tag">{{ $work->user->roles()->whereIn('role', ['alumni', 'student'])->get()[0]->role }}</p>
    </div>
    <div class="flex gap-2 text-left gap-x-2 justify-between">
      <p class="font-bold text-slate-700">{{ $work->title }}</p>
      <p class="min-w-max">
        {{ $work->published_at }}
      </p>
    </div>
    <p>{{ $work->excerpt }}</p>
  </div>
  <a href="/works/{{ $work->slug }}"
    class="text-transparent text-[0] absolute inset-0">{{ __('En savoir plus sur :work', ['work' => $work->title]) }}</a>
</div>
