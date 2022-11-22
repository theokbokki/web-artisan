@props([
    'label' => __('navigation.search_label'),
    'input' => __('navigation.search_input'),
    'button' => __('navigation.search_button'),
    'labelHidden' => true,
])
<header>
  <nav
    class="flex flex-wrap gap-y-4 gap-x-2 nav-1:gap-x-4 items-center mt-6 justify-between px-[5vw,e] mx-auto border-b border-slate-200 pb-5">
    <h2 class="sr-only">
      {{ __('navigation.header_title') }}
    </h2>
    <x-logo class="w-8 min-[540px]:w-14" />
    <div class="flex gap-4 items-center">
      <x-login-signup-buttons class="gap-2 items-center nav-1:gap-4 hidden nav-2:flex" />
      <x-navigation.mobile-search />
      <x-navigation.search />
      <x-navigation.mobile-nav2 />
    </div>
  </nav>
</header>
