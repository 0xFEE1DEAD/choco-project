<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/appv1.2.js') }}" defer></script>
    @inertiaHead
  </head>
  <body style="padding: 0; margin: 0">
    @inertia
  </body>
</html>