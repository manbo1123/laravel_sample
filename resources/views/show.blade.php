<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Laravel_sample</title>
    <style>body {padding: 10px;}</style>
  </head>
  <body>
    <h1>詳細表示ページ</h1>
    <p>{{ $message }}</p>
    <p>{{ $article -> content }}</p>
    <p>
      <a href = {{ route('article.list') }}>戻る</a>
    </p>
  </body>
</html>