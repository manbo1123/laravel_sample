{{ Form::open(['method' => 'get']) }}   <!-- 入力した値をGETメソッドで取得 -->
  {{ csrf_field() }}           <!-- CSRFトークン -->
  <div class='form-group'>
    {{ Form::label('keyword', 'キーワード：') }}
    {{ Form::text('keyword', null, ['class' => 'form-control']) }}
  </div>

  <div class='form-group'>
    {{ Form::submit('検索', ['class' => 'btn btn-outline-primary']) }}  <!-- 検索ボタン -->
    <a href='{{ route("article.list") }}'>クリア</a>  <!-- indexページへのリンク（更新） -->
  </div>
{{ Form::close() }}