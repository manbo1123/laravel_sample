<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Laravel_sample</title>
    <style>body {padding: 10px;}</style>
  </head>
  <body>
    <h1>一覧表示ページ</h1>
    <p>{{ $message }}</p>
    @foreach ($articles as $article)
      <p>
        <a href='{{ route('article.show', ['id' => 1]) }}' >
          {{ $article -> content }}
          {{ $article -> created_at }}
        </a>
      </p>
    @endforeach
  </body>
</html>