<div {{ $attributes }}>
  <a class="link inline-block min-w-max" href="/{{ app()->getLocale() }}/login">{{ __('navigation.login_button') }}</a>
  <a class="button inline-block" href="/{{ app()->getLocale() }}/register">{{ __('navigation.signup_button') }}</a>
</div>
