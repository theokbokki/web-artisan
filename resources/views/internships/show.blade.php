<x-layouts.main>
  <section class="w-[90%] max-w-5xl mx-auto">
    <h2 class="small-title">{{ $internship->title }}</h2>
    <div class="mt-4">
      <div class="flex gap-2">
        <img src="/{{ $internship->company->avatar }}" alt="" class="w-7 aspect-square rounded-md">
        <p>{{ $internship->company->name }} • {{ $internship->address }}</p>
      </div>
    </div>
    <div class="mt-8">
      <p class="label">{{ __('Position') }}</p>
      <p class="mt-4">{{ $internship->position }}</p>
    </div>
    <div class="mt-8">
      <p class="label">{{ __('Profil recherché') }}</p>
      <p class="mt-4">{!! $internship->profile !!}</p>
    </div>
    <div class="mt-8">
      <p class="label">{{ __('Le travail que tu effectueras') }}</p>
      <p class="mt-4">{!! $internship->work !!}</p>
    </div>
    <div class="mt-8">
      <p class="label">{{ __('Ce que tu apprendras') }}</p>
      <p class="mt-4">{!! $internship->teachings !!}</p>
    </div>
    <div class="mt-8">
      <p class="label">{{ __('Possibilité de travail ?') }}</p>
      <p class="mt-4">{{ $internship->work_possibility ? __('oui') : __('non') }}</p>
    </div>
    <div class="mt-8">
      <p class="label">{{ __('Contact') }}</p>
      <a class="mt-4 link inline-block" href="mailto:{{ $internship->contact }}">{{ $internship->contact }}</a>
    </div>
  </section>
  <section class="w-[90%] max-w-5xl mx-auto mt-16">
    <h2 class="small-title">{{ __('D\'autres stages qui pourraient vous interesser') }}</h2>
    <div class="gap-8 grid lg:grid-cols-2 items-start mt-8">
      @foreach ($randomInternships as $internship)
        <x-internships.internship-card :$internship />
      @endforeach
    </div>
  </section>
</x-layouts.main>
