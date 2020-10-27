<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset='utf-8'>
    <title>Laravel_sample</title>
    <style>body {padding: 10px;}</style>
    @include('style-sheet')      <!-- Bootstrapの読み込み -->
  </head>
  <body>
    @include('nav')      <!-- ナビゲーションバー -->
    <div class='container'>
      @yield('content')
    </div>
  </body>
</html>