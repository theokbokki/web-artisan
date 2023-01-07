<x-layouts.main>
  <section class="w-[90%] max-w-5xl mx-auto ">
    <h2 class="sr-only">{{ __('Stages') }}</h2>
    <div class="flex items-center gap-4 mt-8 lg:flex-wrap">
      <x-filters>
        <select class="select" id="date" name="date">
          <option value="latest_first">{{ __('Plus récent d\'abord') }}</option>
          <option value="oldest_first">{{ __('Plus ancien d\'abord') }}</option>
        </select>
        <select class="select" id="companies" name="companies">
          <option value="all-companies">{{ __('Toutes les entreprises') }}</option>
          @foreach ($companies as $company)
            <option value="{{ $company->slug }}">{{ $company->name }}</option>
          @endforeach
        </select>
        <select class="select" id="companies" name="companies">
          <option value="all-cities">{{ __('Toutes les villes') }}</option>
          @foreach ($cities as $city)
            <option value="{{ $city->address }}">{{ $city->address }}</option>
          @endforeach
        </select>
      </x-filters>
      <x-search>
        <label class="label" for="search">{{ __('Cherchez parmis les stages') }}</label>
        <p>{{ __('Cherchez par tag, entreprise, ville, ...') }}</p>
      </x-search>
    </div>
    <div class="gap-8 grid lg:grid-cols-2 items-start mt-16">
      @foreach ($internships as $internship)
        <x-internships.internship-card :$internship />
      @endforeach
    </div>
    <div class="mt-16">
      {{ $internships->links('pagination::tailwind') }}
    </div>
  </section>
</x-layouts.main>
