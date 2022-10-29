<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description", content="{{ __('head.description') }}">
  <meta name="keywords", content="{{ __('head.keywords') }}">
  <meta name="author", content="Théo Léonet">
  <meta name="viewport",
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') }}</title>
  @vite('resources/css/app.css')
</head>

<body class="w-[90%] mx-auto max-w-screen-2xl">
  {{ $slot }}
</body>

</html>
