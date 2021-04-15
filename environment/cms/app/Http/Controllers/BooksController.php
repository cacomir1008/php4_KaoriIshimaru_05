<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

//使うClassを宣言:自分で追加
use App\Book;   //Bookモデルを使えるようにする
use App\User;
use Validator;  //バリデーションを使えるようにする
use Auth;       //認証モデルを使用する

class BooksController extends Controller
{
    //ログイン認証後に表示・コンストラクタ （このクラスが呼ばれたら最初に処理をする）※ここの位置で良いのかな？
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //ダッシュボード表示
    // indexメソッド：引数不要、getメソッド→pageniteへ
    public function index() {
        $books = Book::where('user_id',Auth::user()->id)
            ->orderBy('created_at', 'asc')
            ->paginate(3);
        return view('books', [
            'books' => $books
        ]);
    }
    
    
    public function index2(){
        $books = Book::where('item_category','仕事の悩み')
        ->orderBy('created_at', 'asc')
        ->paginate(3);
        return view('all', [
            'books' => $books
        ]);
    } 
    public function index3(){
        $books = Book::where('item_category','家庭の悩み')
        ->orderBy('created_at', 'asc')
        ->paginate(3);
        return view('all', [
            'books' => $books
        ]);
    } 
    public function index4(){
        $books = Book::where('item_category','自分自身の悩み')
        ->orderBy('created_at', 'asc')
        ->paginate(3);
        return view('all', [
            'books' => $books
        ]);
    } 
    
    public function indexall(){
        $books = Book::orderBy('created_at', 'asc')
        ->paginate(5);
        return view('all', [
            'books' => $books
        ]);
    } 

        
    //更新画面　editメソッド
   public function edit($book_id){
    $books = Book::where('user_id',Auth::user()->id)->find($book_id);
    return view('booksedit', [
        'book' => $books
    ]);
}
    
    //更新
    public function update(Request $request) {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'item_problem' => 'required|min:3|max:500',
            'item_coping' => 'required|min:3|max:500',
            'item_result' => 'required|min:3|max:500',
            'added' => 'required',
            'item_category' => 'required'
        ]); 
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        
        // データ更新
        $books = Book::where('user_id',Auth::user()->id)->find($request->id);
        $books->item_problem  = $request->item_problem;
        $books->item_coping = $request->item_coping;
        $books->item_result = $request->item_result;
        $books->added   = $request->added;
        $books->item_category  = $request->item_category;
        $books->save();
        return redirect('/')->with('message', '更新が完了しました');
    }
         //登録
        public function store(Request $request) {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'item_problem' => 'required|min:3|max:500',
            'item_coping' => 'required|min:3|max:500',
            'item_result' => 'required|min:3|max:500',
            'added' => 'required',
            'item_category' => 'required'
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
                return redirect('/')
                    ->withInput()
                    ->withErrors($validator);
        }
        
        // Eloquentモデル（登録処理）
        $books = new Book;
        $books->user_id  = Auth::user()->id; //追加のコード
        $books->user_name  = Auth::user()->name;
        $books->item_problem = $request->item_problem;
        $books->item_coping = $request->item_coping;
        $books->item_result = $request->item_result;
        $books->added = $request->added;
        $books->item_category  = $request->item_category;
        $books->save();
        // フラッシュメッセージ（with + ヘルパー関数）
        return redirect('/')->with('message', '登録が完了しました');
    }
    
        //削除処理　destroyメソッド
        public function destroy(Book $book) {
            $book->delete();
            return redirect('/')->with('message', '削除が完了しました');
    }
    
        // 追加：リレーションの親子関係
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
