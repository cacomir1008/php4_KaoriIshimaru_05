<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //デフォルトのtimestampsをオフに
    public $timestamps = false;
    // いいねしているかどうか？メソッド いいね済み＝false、いいねまだ＝true
    public function isFavorite(Int $user_id, Int $book_id) 
    {
        // user_idとbook_idがあるかどうか？ first()＝オブジェクト型のデータ　
        return (boolean) $this->where('user_id', $user_id)->where('book_id', $book_id)->first();
    }

    public function storeFavorite(Int $user_id, Int $book_id)
    {
        $this->user_id = $user_id;
        $this->book_id = $book_id;
        $this->save();

        return;
    }

    public function destroyFavorite(Int $favorite_id)
    {
        return $this->where('id', $favorite_id)->delete();
    }
}
