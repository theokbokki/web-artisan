<article class="flex gap-x-6 border-b border-slate-200 pb-8">
  <aside class="grid gap-6 justify-end self-start">
    <div class="min-w-0 justify-self-end">
      @if ($question->solved_status)
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-6 h-6 text-indigo-600">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      @else
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      @endif
    </div>
    <div class="flex gap-2 items-center justify-self-end">
      <p>{{ $question->comments->count() }}</p>

      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
        class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
      </svg>
    </div>
    <div class="flex gap-2 items-center justify-self-end">
      <p>{{ $question->score }}</p>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
        stroke="currentColor" class="w-4 h-4 @if ($question->score < 0) rotate-180 @endif">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
      </svg>
    </div>
  </aside>
  <div class="flex flex-col gap-6">
    <h3 class="font-bold text-slate-800 text-xl hover:text-indigo-600 hover:underline underline-offset-4"><a
        href="forum/{{ $question->slug }}">{{ $question->title }}</a>
    </h3>
    <div class="flex gap-2">
      <img class="w-7 h-7 rounded-md" src="/{{ $question->user->avatar }}" alt="">
      <p class="text-base">Question posée par <a href="profile/{{ $question->user->slug }}" class="link">
          {{ $question->user->name }}</a> <time datetime="{{ $question->published_at }}"> le
          {{ $question->published_at_formatted }}</time></p>
    </div>
    @if ($question->tags->count() > 0)
      <div class="flex gap-2 flex-wrap">
        @foreach ($question->tags as $tag)
          <p class="tag text-base">{{ $tag->tag }}</p>
        @endforeach
      </div>
    @endif
  </div>
</article>
