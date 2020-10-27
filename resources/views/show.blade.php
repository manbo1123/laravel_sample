@extends('layout')

@section('content')
  <h1>詳細表示ページ</h1>
  <p>{{ $message }}</p>
  <p>{{ $article -> content }}</p>
  <p>{{ $article -> user_name }}</p>
  <p>{{ $article -> created_at }}</p>
  <p>
    <a href='{{ route("article.edit", ["id"=> $article->id]) }}' class="btn btn-secondary">編集</a>
    <a href = '{{ route("article.list") }}' class="btn btn-outline-secondary">戻る</a>
  </p>
  <div>
    {{ Form::open(['method' => 'delete', 'route' => ['article.delete', $article -> id]]) }}
      {{ form::submit("削除ボタン") }}
    {{ Form::close() }}
  </div>
@endsection