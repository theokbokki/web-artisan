        <div class="p-5 hover:bg-slate-100 rounded-md transition-all duartion-300 relative">
          <h3 class="label">
            {{ $internship->title }}
          </h3>
          <div class="mt-4">
            <div class="flex gap-2">
              <img src="/{{ $internship->company->avatar }}" alt="" class="w-7 aspect-square rounded-md">
              <p>{{ $internship->company->name }} • {{ $internship->address }}</p>
            </div>
            <p class="mt-4">
              {{ $internship->excerpt }}
            </p>
          </div>
          @if ($internship->tags->count())
            <div class="flex mt-4 gap-2">
              @foreach ($internship->tags as $tag)
                <p class="tag">{{ $tag->tag }}</p>
              @endforeach
            </div>
          @endif
          <a href="/internships/{{ $internship->slug }}" class="absolute inset-0 z-0"></a>
        </div>
