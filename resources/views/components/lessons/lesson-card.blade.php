  <div class="space-y-6 p-5 bg-slate-100 rounded-md w-full relative">
    <a class="label hover:underline hover:text-indigo-600 underline-offset-4 order-1 before:absolute before:inset-0"
      href="/lessons-grid/{{ $lesson->slug }}">{{ $lesson->title }}</a>
    <div class="flex gap-x-4 gap-y-2 flex-wrap">
      <p>{{ __('Professeurs: ') }}</p>
      @foreach ($lesson->users as $teachers)
        <div class="flex gap-2">
          <img src="/{{ $teachers->avatar }}" alt="" class="w-7 aspect-square rounded-md">
          <a class="link relative z-10" href="/profile/{{ $teachers->slug }}">
            {{ $teachers->name }}
          </a>
        </div>
      @endforeach
    </div>
    <p>{{ __('Bloc: ') . $lesson->year->year }}</p>
    <p>{{ __('Quadrimestre: ') }}
      @foreach ($lesson->quarters as $quarter)
        {{ $quarter->quarter }}
        @if (!$loop->last)
          ,&nbsp;
        @endif
      @endforeach
    </p>
    <p>{{ __('Heures: ') . $lesson->hours }}</p>
    <p>{{ __('Crédits: ') . $lesson->credits }}</p>
    <a href=""></a>
  </div>
