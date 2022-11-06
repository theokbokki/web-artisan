@props([
    'label' => __('navigation.search_label'),
    'input' => __('navigation.search_input'),
    'button' => __('navigation.search_button'),
])
<nav class="flex flex-wrap gap-4 items-center mt-6 justify-between max-w-[90%] mx-auto">
  <h2 class="sr-only">
    {{ __('navigation.header_title') }}
  </h2>
  <x-logo class="w-14" />
  <x-navigation.mobile-menu />
  <x-search :$label :$button :$input class="w-full" />
  <x-login-signup-buttons class="flex w-full gap-4 items-center justify-end" />
</nav>
