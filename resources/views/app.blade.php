<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
  <head>
    <meta charset="utf-8" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Шоколадное дело">
    <meta property="og:title" content="Шоколадное дело - курс для начинающих" />
    <meta property="og:url" content="https://alenabanokina.ru/"/>
    <meta property="og:locale" content="ru_RU"/>
    <meta property="og:description" content="Обучение проходит по видео-урокам и с личной, не ограниченной по времени поддержкой от меня в чате Телеграмма.">
    <meta property="og:image" content="https://alenabanokina.ru/img/social-media.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/appv1.31.js') }}" defer></script>
    @inertiaHead
  </head>
  <body style="padding: 0; margin: 0">
    @inertia
  </body>
</html>