<!--親テンプレート読み込み--->
@extends('layouts.app')
@section('content')
<div class="container">

        <a href="/category0">仕事の悩み</a>
        <a href="/category1">家庭の悩み</a>
        <a href="/category2">自分自身の悩み</a>
        <!--登録内容-->
        @if (count($books) > 0)
            <div class="card-body">
                <table class="table table-striped task-table table-condensed">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>カテゴリ</th>
                        <th>困ったこと</th>
                        <th>対処法</th>
                        <th>結果</th>
                        <th>ユーザー</th>
                        <th>登録日</th>
                        <th>&nbsp;</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        <!--＄books（コントローラーbooksから渡された変数を保持）変数内のデータレコード数だけ処理の繰り返し-->
                        @foreach ($books as $book)
                            <tr>
                                <!-- 表示内容 -->
                                <td class="table-text">
                                    <div>{{ $book->item_category}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $book->item_problem}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $book->item_coping }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $book->item_result }}</div>
                                </td>
                                <td class="table-text">
                                   <a href="{{ url('users/' .$book->user_id) }}">{{ $book ->user_name }}</a>
                                </td>
                                <td class="table-text">
                                    <div>{{ $book->added }}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    
        <!--ページネーション埋め込み-->
        <div class="row">
            <div class="col-md-4 offset-md-4">
                {{ $books->links()}}
            </div>
       </div>
    @endif
    </div>
    <!--フラッシュメッセージ-->
      @if (session('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
  @endif
    <!-- Book: 既に登録されてる内容のリスト -->
@endsection
