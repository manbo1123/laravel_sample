@extends('layout')

@section('content')
  <h1>一覧表示ページ</h1>
  <p>{{ $message }}</p>
  <table class="table table-striped table-hover">
    @foreach ($articles as $article)
      <tr>
        <td>
          <a href='{{ route('article.show', ['id' => $article->id]) }}' >
            {{ $article -> content }}
          </a>
        </td>
        <td>{{ $article -> user_name }}</td>
        <td>{{ $article -> created_at }}</td>
      </tr>
    @endforeach
  </tabel>
  <div>
    <a href = "{{ route('article.new') }}" class="btn btn-primary">新規投稿</a>
  </div>
@endsection