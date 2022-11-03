<x-layouts.main>
  <x-navigation.header />
  <div class="flex gap-x-24">
    <x-navigation.menu />
    <main class="w-full mt-10 md:mt-24">
      <section class="flex items-center">
        <div class="sm:min-w-max">
          <h2 class="text-5xl font-title font-bold max-w-[33rem]">N’attends pas le chômage, deviens développeur web</h2>
          <div class="text-lg text-slate-500 space-y-4 mt-6 max-w-[27.5rem]">
            <p class="">
              {{ __('home.intro_p1') }}
            </p>
            <p class="">
              {{ __('home.intro_p2') }}
            </p>
            <p class="">
              {{ __('home.intro_p3') }}
            </p>
          </div>
          <a href="#" class="button inline-block mt-8 max-w-max">
            {{ __('home.intro_cta') }}
          </a>
        </div>
        <img src="images/hero-image.png" alt="{{ __('home.hero_image_alt') }}"
          class="relative drop-shadow-2xl rounded-lg hidden sm:block h-[34rem] min-w-[55rem] shrink-0 perspective-r -ml-24">
      </section>
    </main>
  </div>
</x-layouts.main>
