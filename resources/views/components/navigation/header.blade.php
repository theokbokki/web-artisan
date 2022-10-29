@props([
    'label' => __('navigation.search_label'),
    'input' => __('navigation.search_input'),
    'button' => __('navigation.search_button'),
])

<nav class="flex flex-wrap justify-between items-center gap-x-7 mt-6">
  <h2 class="sr-only">
    {{ __('navigation.header_title') }}
  </h2>
  <x-logo class="w-8 main-nav:w-14" />
  <x-search :$label :$button :$input
    class="order-2 mt-4 min-w-full main-nav:min-w-0 main-nav:flex-1 main-nav:max-w-xl main-nav:order-1 main-nav:mt-0" />
  <x-login-signup-buttons class="order-1 main-nav:order-2" />
</nav>
