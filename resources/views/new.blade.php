@extends('layout')
@section('content')
  <h1>新規投稿ページ</h1>
  <p>{{ $message }}</p>

  {{ Form::open(['route'=>'article.store']) }}
    <div class='form-group'>
      {{ Form::label('content', '内容：') }}
      {{ Form::text('content', null) }}
    </div>

    <div class='form-group'>
      {{ Form::label('user_name', '投稿者名： ') }}
      {{ Form::text('user_name', null) }}
    </div>

    <div class='form-group'>
      {{ Form::submit('投稿', ['class' => 'btn btn-primary']) }}  <!-- 投稿ボタン -->
      <a href='{{ route("article.list") }}'>もどる</a>  <!-- indexページへのリンク -->
    </div>
  {{ Form::close() }}
@endsection