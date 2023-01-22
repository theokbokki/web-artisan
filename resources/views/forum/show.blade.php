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
        <img class="w-7 h-7 rounded-md" src="/{{ $question->user->avatar }}" alt="">
        <p class="text-base"><a href="users/{{ $question->user->slug }}" class="link">
            {{ $question->user->name }}</a> <time datetime="{{ $question->published_at }}"> le
            {{ $question->published_at_formatted }}</time></p>
      </div>
      <div class="space-y-4 mt-6">
        {!! $question->body !!}
      </div>
    </div>
    @auth
      <div class="mt-6 flex gap-4 items-center w-max">
        <form action="/forum/{{ $question->slug }}/vote" method="post">
          @csrf
          @if (auth()->user()->has_voted($question, null) == 'up')
            @method('delete')
          @elseif(auth()->user()->has_voted($question, null) == 'down')
            @method('patch')
          @endif
          <input type="hidden" value="1" name="vote" id="vote">
          <button class=" @if (auth()->user()->has_voted($question, null) == 'up') button  @else input @endif">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
            </svg>
          </button>
        </form>
        <p>{{ $question->score }}</p>
        <form action="/forum/{{ $question->slug }}/vote" method="post">
          @csrf
          @if (auth()->user()->has_voted($question, null) == 'down')
            @method('delete')
          @elseif(auth()->user()->has_voted($question, null) == 'up')
            @method('patch')
          @endif
          <input type="hidden" value="0" name="vote" id="vote">
          <button
            class=" @if (auth()->user()->has_voted($question, null) == 'down') button bg-red-600 hover:bg-red-500 active:bg-red-700 @else input @endif">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
            </svg>
          </button>
        </form>
      @endauth
  </section>
  <section class="w-[90%] max-w-5xl mx-auto">
    <h2 class="small-title mt-16 text-xl">
      {{ $question->answers->count() }} {{ __('réponses •') }} {{ $question->total_comment_count }}
      {{ __('commentaires') }}
    </h2>
    @foreach ($question->answers as $answer)
      <div class="mt-16 border-b border-slate-300 pb-16 last:border-none" id="answer{{ $answer->id }}">
        <div class="mt-6">
          <div class="flex gap-2">
            <img class="w-7 h-7 rounded-md" src="/{{ $answer->user->avatar }}" alt="">
            <p class="text-base"><a href="/profile/{{ $answer->user->slug }}" class="link">
                {{ $answer->user->name }}</a> <time datetime="{{ $answer->published_at }}"> le
                {{ Carbon\Carbon::parse($answer->published_at)->translatedFormat('d M Y') }}</time></p>
          </div>
          <div class="space-y-4 mt-6">
            {!! $answer->body !!}
          </div>
        </div>
        <div class="flex gap-6 items-center mt-6 flex-wrap">
          @auth
            <div class="flex gap-4 items-center w-max">
              <form action="/forum/{{ $question->slug }}/{{ $answer->id }}/vote" method="post">
                @csrf
                @if (auth()->user()->has_voted(null, $answer) == 'up')
                  @method('delete')
                @elseif(auth()->user()->has_voted(null, $answer) == 'down')
                  @method('patch')
                @endif
                <input type="hidden" value="1" name="vote" id="vote">
                <button class=" @if (auth()->user()->has_voted(null, $answer) == 'up') button  @else input @endif">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                  </svg>
                </button>
              </form>
              <p>{{ $answer->score }}</p>
              <form action="/forum/{{ $question->slug }}/{{ $answer->id }}/vote" method="post">
                @csrf
                @if (auth()->user()->has_voted(null, $answer) == 'down')
                  @method('delete')
                @elseif(auth()->user()->has_voted(null, $answer) == 'up')
                  @method('patch')
                @endif
                <input type="hidden" value="0" name="vote" id="vote">
                <button
                  class=" @if (auth()->user()->has_voted(null, $answer) == 'down') button bg-red-600 hover:bg-red-500 active:bg-red-700 @else input @endif">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                  </svg>
                </button>
              </form>
            </div>
          @endauth
          <div>
            <p>
              {{ $answer->comments->count() }} commentaires
            </p>
          </div>
        </div>
        <div class="mt-4">
          @foreach ($answer->limited_comments as $comment)
            <div class="flex gap-2">
              <p class="invisible absolute -mt-64" aria-hidden="true" id="comment{{ $comment->id }}"></p>
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
                  <img class="w-7 h-7 rounded-md" src="/{{ $comment->user->avatar }}" alt="">
                  <p class="text-base"><a href="/profile/{{ $comment->user->slug }}" class="link">
                      {{ $comment->user->name }}</a> <time datetime="{{ $comment->published_at }}"> le
                      {{ Carbon\Carbon::parse($comment->published_at)->translatedFormat('d M Y') }}</time></p>
                </div>
                <div class="space-y-4 mt-2">
                  {!! $comment->body !!}
                </div>
              </div>
            </div>
          @endforeach
          @if ($answer->comments->count() - $answer->limited_comments->count())
            <form action="/forum/{{ $question->slug }}#answer{{ $answer->id }}" method="get" class="mt-6">
              @csrf
              <input type="hidden" name="answer_with_all_comment" value="{{ $answer->id }}">
              <button class="link" type="submit"
                href="link">{{ __('Afficher :Comments_left_count commentaires supplémentaires', ['comments_left_count' => $answer->comments->count() - $answer->limited_comments->count()]) }}</a>
              </button>
            </form>
          @endif
          @auth
            <form action="/forum/{{ $question->slug }}/{{ $answer->id }}/comment" method="post" class="grid mt-8">
              @csrf
              <label for="comment" class="label">{{ __('Ajouter un commentaire') }}</label>
              <textarea class="input h-10 focus:h-64 valid:h-64 transition-height duration-300 mt-2" id="comment" name="comment"
                required></textarea>
              <button class="button w-max mt-4" type="submit">{{ __('Commenter') }}</button>
            </form>
          @endauth
        </div>
      </div>
    @endforeach
    @auth
      <form action="/forum/{{ $question->slug }}/answer" method="post" class="grid mt-8">
        @csrf
        <label for="answer" class="label">{{ __('Ajouter une réponse') }}</label>
        <textarea class="input h-10 focus:h-64 valid:h-64 transition-height duration-300 mt-2" id="answer" name="answer"
          required></textarea>
        <button class="button w-max mt-4" type="submit">{{ __('Répondre') }}</button>
      </form>
    @endauth

  </section>
</x-layouts.main>
