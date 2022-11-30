@props([
    'label' => __('navigation.search_label'),
    'input' => __('navigation.search_input'),
    'button' => __('navigation.search_button'),
    'labelHidden' => true,
])
<header class="pb-5 space-y-10 w-[90%] mx-auto">
  <nav class="flex flex-wrap gap-y-4 gap-x-2 nav-1:gap-x-4 items-center mt-6 justify-between">
    <h2 class="sr-only">
      {{ __('Navigation principale') }}
    </h2>
    <x-logo class="w-14" />
    <div class="flex gap-4 items-center">
      <x-login-signup-buttons class="gap-2 items-center nav-1:gap-4 hidden nav-2:flex" />
      <x-navigation.mobile-search />
      <x-navigation.mobile-nav2 />
      <x-navigation.search />
    </div>
  </nav>
  <x-navigation.menu />
</header>
