@props([
    'label' => __('navigation.search_label'),
    'input' => __('navigation.search_input'),
    'button' => __('navigation.search_button'),
])
<header>
  <nav class="flex flex-wrap gap-y-4 gap-x-2 nav-1:gap-x-4 items-center mt-6 justify-between max-w-[90%] mx-auto">
    <h2 class="sr-only">
      {{ __('navigation.header_title') }}
    </h2>
    <x-logo class="w-8 min-[540px]:w-14" />
    <x-search :$label :$button :$input class="flex-1 min-w-[243px] max-w-[400px] min-[660px]:max-nav-2:min-w-[400px]" />
    <x-login-signup-buttons class="flex gap-2 items-center nav-1:gap-4" />
    <x-navigation.mobile-menu />
  </nav>
</header>
