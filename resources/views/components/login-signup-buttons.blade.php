<div {{ $attributes }}>
  <a class="text-indigo-600 hover:text-indigo-500 visited:text-indigo-700 active:text-indigo-700 font-bold"
    href="/{{ app()->getLocale() }}/login">{{ __('navigation.login_button') }}</a>
  <a class="button inline-block" href="/{{ app()->getLocale() }}/register">{{ __('navigation.signup_button') }}</a>
</div>
