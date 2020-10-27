@extends('layout')
@section('content')
  <h1>編集ページ</h1>
  <p>{{ $message }}</p>

  {{ Form::model($article, ['route'=> ['article.update', $article->id] ]) }}
    <div class='form-group'>
      {{ Form::label('content', '内容：') }}
      {{ Form::text('content', null) }}
    </div>

    <div class='form-group'>
      {{ Form::label('user_name', '投稿者名： ') }}
      {{ Form::text('user_name', null) }}
    </div>

    <div class='form-group'>
      {{ Form::submit('保存', ['class' => 'btn btn-primary']) }}  <!-- 保存ボタン -->
      <a href='{{ route("article.show", ["id"=> $article->id]) }}'>もどる</a>  <!-- showページへのリンク -->
    </div>
  {{ Form::close() }}
@endsection