@props([
    'label' => __('navigation.search_label'),
    'input' => __('navigation.search_input'),
    'button' => __('navigation.search_button'),
])

<nav class="flex flex-wrap gap-4 items-center mt-6 justify-between">
  <h2 class="sr-only">
    {{ __('navigation.header_title') }}
  </h2>
  <x-logo class="w-8 md:w-14" />
  <x-search :$label :$button :$input class="flex-1 min-w-[13.75rem] sm:min-w-max md:max-w-[25rem] md:min-w-0" />
  <x-login-signup-buttons />
  <x-navigation.mobile-menu />
</nav>
