<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    // プライマリーキーの設定
    protected $primaryKey = [
        'following_id',
        'followed_id'
    ];
    protected $fillable = [
        'following_id',
        'followed_id'
    ];
    // 使用しない
    public $timestamps = false;
    public $incrementing = false;
    
    // 追加
    public function getFollowCount($user_id)
    {
        return $this->where('following_id', $user_id)->count();
    }

    public function getFollowerCount($user_id)
    {
        return $this->where('followed_id', $user_id)->count();
    }
    
}
