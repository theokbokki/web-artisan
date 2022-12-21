  <article class="pb-8 relative text-left grid flex-col sm:flex-row items-start gap-6 border-b last:border-none">
    <img src="/{{ $post->thumbnail }}" alt="" class="w-full aspect-[2/1] object-cover rounded-md">
    <div class="space-y-4">
      <h3
        class="font-bold text-xl text-slate-800 relative z-10 hover:text-indigo-600 hover:underline hover:underline-offset-4">
        <a href="" class="">{{ $post->title }}</a>
      </h3>
      <p class="">{{ $post->excerpt }}</p>
      <div class="flex flex-wrap justify-between gap-4">
        <div class="flex items-start gap-2">
          <img src="/{{ $post->users()->get()[0]->avatar }}" alt="" class="w-7 h-7 object-cover rounded-md">
          <div>
            <p class="text-slate-500 leading-6 text-base">Par @foreach ($post->users as $user)
                <a href="/profile/{{ $user->name }}" class="link ">{{ $user->name }}</a>,
              @endforeach
              le <time
                datetime="{{ $post->published_at }}">{{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d M Y') }}</time>
            </p>
          </div>
        </div>
        <div>
          @foreach ($post->tags()->get() as $tag)
            <p class="tag inline-block text-base">{{ $tag->tag }}</p>
          @endforeach
        </div>
      </div>
    </div>
    <a href="#" class="absolute inset-0 z-1"><span class="sr-only">Lire la suite de l'article</span></a>
  </article>
