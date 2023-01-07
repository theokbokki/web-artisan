<article class="border-b flex flex-col gap-6 items-start last:border-none pb-8 relative sm:flex-row text-left">
  <!-- Post thumbnail -->
  <img src="/{{ $post->thumbnail }}" alt=""
    class="aspect-[2/1] object-cover rounded-md w-full sm:aspect-square sm:w-40">

  <!-- Post content -->
  <div class="space-y-4">
    <!-- Post title -->
    <h3
      class="font-bold hover:text-indigo-600 hover:underline hover:underline-offset-4 relative text-slate-800 text-xl z-10">
      <a href="/blog/{{ $post->slug }}" class="">{{ $post->title }}</a>
    </h3>

    <!-- Post excerpt -->
    <p class="">{{ $post->excerpt }}</p>

    <!-- Post meta data -->
    <div class="flex flex-wrap gap-4 justify-between">
      <!-- Post authors -->
      <div class="flex gap-2 items-start">
        <div>
          <p class="leading-6 relative text-base text-slate-500 z-10">
            Par
            @foreach ($post->users as $user)
              <a href="/profile/{{ $user->slug }}" class="link ">{{ $user->name }}</a>,
            @endforeach
            le <time
              datetime="{{ $post->published_at }}">{{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d M Y') }}</time>
          </p>
        </div>
      </div>

      <!-- Post tags -->
      <div>
        @foreach ($post->tags()->get() as $tag)
          <p class="inline-block tag text-base">{{ $tag->tag }}</p>
        @endforeach
      </div>
    </div>
  </div>

  <!-- Read more link -->
  <a href="#" class="absolute inset-0 z-1"><span class="sr-only">Lire la suite de l'article</span></a>
</article>
