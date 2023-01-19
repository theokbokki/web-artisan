<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', LaravelLocalization::getCurrentLocale()) }}"
  class="{{-- overflow-x-hidden --}} max-w-screen">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="{{ __('head.description') }}">
  <meta name="keywords" content="{{ __('head.keywords') }}">
  <meta name="author" content="Théo Léonet">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') }}</title>
  @vite('resources/css/app.css')
</head>

<body class="max-w-screen-2xl {{-- overflow-x-hidden --}} mx-auto">

  <h1 class="sr-only">
    {{ __('home.title') }}
  </h1>
  <x-navigation.header />
  <div class="flex">
    <main class="mt-10 w-full">
      {{ $slot }}
      <x-newsletter />
    </main>
  </div>
  <x-navigation.footer />
  @if (session('success'))
    <div class="p-3 fixed bottom-0 bg-lime-100/90 right-0 mr-[5vw] mb-[5vw] rounded-xl flex gap-4 items-center">
      <div
        class="w-2 aspect-square rounded-full bg-lime-500 shadow-lime-400/70 shadow-[0_0_10px_5px] border-white border-[.95px]">
      </div>
      <p class="text-lime-700">{{ session('success') }}</p>
      <a href="/" class="text-lime-700 font-bold -mt-0.5">&#9587;</a>
    </div>
  @endif
</body>

</html>
