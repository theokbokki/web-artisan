  <section class="space-y-4 mt-16  w-[90%] mb-10 mx-auto main-nav:mx-0">
    <h2 class="title max-w-[33rem]">{{ __('home.newsletter_title') }}</h2>
    <div class="space-y-2 max-w-[33rem]">
      <p>{{ __('home.newsletter_p1') }}</p>
      <p>{{ __('home.newsletter_p2') }}</p>
    </div>
    <form action="/{{ app()->getLocale() }}" class="space-y-4" method="post">
      <div class="space-y-2 grid">
        <label class="label" for="email">{{ __('home.newsletter_label') }}</label>
        <input class="input max-w-[400px]" type="email" id="email" name="email"
          placeholder="{{ __('home.newsletter_input') }}">
      </div>
      <button class="button mt-3" type="submit">{{ __('home.newsletter_cta') }}</button>
    </form>
  </section>
