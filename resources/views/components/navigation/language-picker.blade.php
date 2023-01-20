<div {{ $attributes->merge(['class' => 'bg-slate-100 border-2 border-slate-200 rounded-md']) }}>
  @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <a class="px-2 py-1 inline-block hover:bg-slate-200 transition duration-300 @if (!$loop->last) border-r-2 border-slate-200 @endif"
      rel="alternate" hreflang="{{ $localeCode }}"
      href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $localeCode }}</a>
  @endforeach
</div>
