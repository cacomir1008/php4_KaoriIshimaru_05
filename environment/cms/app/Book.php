<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // 追加
    protected $fillable = [
        'text'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    
    //モデルと関連しているテーブル 
    // 追加
    public function getUserTimeLine(Int $user_id)
    {
        return $this->where('user_id', $user_id)->orderBy('created_at', 'DESC')->paginate(50);
    }

    public function getBookCount(Int $user_id)
    {
        return $this->where('user_id', $user_id)->count();
    }
}
