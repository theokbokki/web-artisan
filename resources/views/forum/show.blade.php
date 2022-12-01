<x-layouts.main>
  <section class="w-[90%] max-w-5xl mx-auto">
    <h2 class="small-title">
      {{ $question->title }}
    </h2>
    <div class="flex gap-2 items-center mt-6">
      @if ($question->solved_status)
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-6 h-6 text-indigo-600">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <p>{{ __('Resolu par') }}</p>
      @else
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <p>{{ __('En attente de résolution') }}</p>
      @endif
    </div>
    <div class="mt-6">
      <div class="flex gap-2">
        <img class="w-7 h-7 rounded-md" src="{{ $question->user->avatar }}" alt="">
        <p class="text-base"><a href="users/{{ $question->user->slug }}" class="link">
            {{ $question->user->name }}</a> <time datetime="{{ $question->published_at }}"> le
            {{ $question->published_at_formatted }}</time></p>
      </div>
      <div class="space-y-4 mt-6">
        {!! $question->body !!}
      </div>
    </div>
    <div class="mt-6 flex gap-4 mx-auto items-center w-max">
      <form action="#" method="post">
        <button class="input">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
          </svg>
        </button>
      </form>
      <p>{{ $question->votes->count() }}</p>
      <form action="#" method="post">
        <button class="input">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
          </svg>
        </button>
      </form>
    </div>
  </section>
  <section class="w-[90%] max-w-5xl mx-auto">
    <h2 class="small-title mt-16 text-xl">
      {{ $question->answers->count() }} {{ __('réponses •') }} {{ $question->total_comment_count }}
      {{ __('commentaires') }}
    </h2>
    @foreach ($question->answers as $answer)
      <div class="mt-16 border-b border-slate-300 pb-16 last:border-none" id="{{ $answer->id }}">
        <div class="mt-6">
          <div class="flex gap-2">
            <img class="w-7 h-7 rounded-md" src="{{ $answer->user->avatar }}" alt="">
            <p class="text-base"><a href="users/{{ $answer->user->slug }}" class="link">
                {{ $answer->user->name }}</a> <time datetime="{{ $answer->published_at }}"> le
                {{ $answer->published_at_formatted }}</time></p>
          </div>
          <div class="space-y-4 mt-6">
            {!! $answer->body !!}
          </div>
        </div>
        <div class="flex gap-6 items-center mt-6 flex-wrap">
          <div class="flex gap-4 items-center w-max">
            <form action="#" method="post">
              <button class="input">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                </svg>
              </button>
            </form>
            <p>{{ $answer->votes->count() }}</p>
            <form action="#" method="post">
              <button class="input">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                </svg>
              </button>
            </form>
          </div>
          <div>
            <p>
              {{ $answer->comments->count() }} commentaires
            </p>
          </div>
        </div>
        <div class="mt-4">
          @foreach ($answer->limited_comments as $comment)
            <div class="flex gap-2">
              <div class="flex flex-col items-start gap-0 text-slate-300">
                <div class="w-0.5 min-h-[54px] bg-slate-200">
                </div>
                <div class="w-6 h-0.5 bg-slate-200">
                </div>
                <div class="w-0.5 h-full bg-slate-200">
                </div>
              </div>
              <div class="mt-10">
                <div class="flex gap-2">
                  <img class="w-7 h-7 rounded-md" src="{{ $comment->user->avatar }}" alt="">
                  <p class="text-base"><a href="users/{{ $comment->user->slug }}" class="link">
                      {{ $comment->user->name }}</a> <time datetime="{{ $comment->published_at }}"> le
                      {{ $comment->published_at_formatted }}</time></p>
                </div>
                <div class="space-y-4 mt-2">
                  {!! $comment->body !!}
                </div>
              </div>
            </div>
          @endforeach
          @if ($answer->comments->count() - $answer->limited_comments->count())
            <form action="/forum/{{ $question->slug }}#{{ $answer->id }}" method="get" class="mt-6">
              @csrf
              <input type="hidden" name="answer_with_all_comment" value="{{ $answer->id }}">
              <button class="link" type="submit"
                href="link">{{ __('Afficher :Comments_left_count commentaires supplémentaires', ['comments_left_count' => $answer->comments->count() - $answer->limited_comments->count()]) }}</a>
            </form>
          @endif
        </div>
      </div>
    @endforeach

  </section>
</x-layouts.main>
