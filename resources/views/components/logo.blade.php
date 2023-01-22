  <figure class="flex items-center relative">
    <a class="absolute inset-0" href="{{ LaravelLocalization::localizeUrl('/') }}"></a>
    <div {{ $attributes }}>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.852 27.68">
        <path
          d="M27.327,27.68H23.189l-3.637-16.7-3.367,16.7H6.779L0,0H6.382L11.5,22.636h.974L16.421,1.024h6.354l4.573,21.612h.965L32.739,0H44.4l9.449,27.482H47.47l-2.233-6.846-9.674.16-1.4,6.884ZM43.546,15.453,40.1,4.9H38.8L36.65,15.453Z"
          fill="#4f46e5" />
      </svg>
    </div>
    <figcaption
      class="text-sm leading-4 text-indigo-600 font-title font-bold max-w-[5rem] sm:max-w-[5.5rem] ml-3 sm:text-base sm:leading-4">
      {{ __('3 ans pour un futur') }}
    </figcaption>
  </figure>
