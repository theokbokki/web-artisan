<x-layouts.main>
  <section class="w-[90%] max-w-5xl mx-auto">

    <h2 class="small-title order-1">{{ $lesson->title }}</h2>
    <div class="space-y-6 p-5 bg-slate-100 rounded-md max-w-max mt-4 md:float-right md:w-[33%] md:-mt-8">
      <div class="flex gap-x-4 gap-y-2 flex-wrap">
        <p>{{ __('Professeurs: ') }}</p>
        @foreach ($lesson->users as $teachers)
          <div class="flex gap-2">
            <img src="/{{ $teachers->avatar }}" alt="" class="w-7 aspect-square rounded-md">
            <p>
              {{ $teachers->name }}
            </p>
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
    </div>
    <div class="order-3 mt-8 md:w-[60%] md:mt-4">
      {!! $lesson->body !!}
    </div>
  </section>
</x-layouts.main>
