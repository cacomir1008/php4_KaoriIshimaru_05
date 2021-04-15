<!-- resources/views/books.blade.php -->
<!--親テンプレート読み込み--->
@extends('layouts.app')
@section('content')

    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            Add Coping
        </div>
        
         バリデーションエラーの表示に使用
        @include('common.errors')
         バリデーションエラーの表示に使用
         登録フォーム 
        <form action="{{ url('books') }}" method="POST" class="form-horizontal">
            @csrf
             フォーム項目 
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="category" class="col-sm-3 control-label">カテゴリ</label>
                    <select name="item_category" class="form-control">
                        <option value="仕事の悩み">仕事の悩み</option>
                        <option value="家庭の悩み">家庭の悩み</option>
                        <option value="自分自身の悩み">自分自身の悩み</option>
                    </select>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="published" class="col-sm-3 control-label">登録日</label>
                    <input type="date" name="added" class="form-control">
                </div>
             </div>   
        
            <div class="form-row">   
                <div class="form-group col-md-6">
                    <label for="book" class="col-sm-3 control-label">困ったこと</label>
                    <input type="text" name="item_problem" class="form-control">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="amount" class="col-sm-3 control-label">対処法</label>
                    <input type="text" name="item_coping" class="form-control">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="number" class="col-sm-3 control-label">結果</label>
                    <input type="text" name="item_result" class="form-control">
                </div>
                
                  登録ボタン 
                <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
            </div>
        
        </form>
        
        <!--登録内容-->
        @if (count($books) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table table-condensed">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>カテゴリ</th>
                        <th>困ったこと</th>
                        <th>対処法</th>
                        <th>結果</th>
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
                                    <div>{{ $book->added }}</div>
                                </td>
                            
                                
                                 更新ボタン 
                                <td>
                                    <form action="{{ url('booksedit/'.$book->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">
                                            更新
                                        </button>
                                    </form>
                                </td>
                                
                                 削除ボタン 
                                <td>
                                     <form action="{{ url('book/'.$book->id) }}" method="POST">
                                         @csrf               <!-- CSRF（なりすましハッキング）からの保護 -->
                                         @method('DELETE')   <!-- 擬似フォームメソッド -->
        
                                        <button type="submit" class="btn btn-danger">
                                            削除
                                        </button>
                                     </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
