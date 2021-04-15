<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 追加
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Follower;
use App\Favorite;
use App\Book;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    //  一覧表示
    public function index(User $user)
    {
        // ログインしているユーザーのidをメソッド：getAllUsers()に引数で渡す
        // getAllUsers()＝ユーザー取得
        
        $all_users = $user->getAllUsers(auth()->user()->id);

        // モデルから返ってくる結果をviewに表示
        return view('users.index', [
            'all_users'  => $all_users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // ユーザー毎のマイページ
        public function show(User $user, Book $books, Follower $follower, Favorite $favorites)
    {
        $login_user = auth()->user();
        $is_following = $login_user->isFollowing($user->id);
        $is_followed = $login_user->isFollowed($user->id);
        $timelines = $books->getUserTimeLine($user->id);
        $book_count = $books->getBookCount($user->id);
        $follow_count = $follower->getFollowCount($user->id);
        $follower_count = $follower->getFollowerCount($user->id);
        

        return view('users.show', [
            'user'           => $user,
            'is_following'   => $is_following,
            'is_followed'    => $is_followed,
            'timelines'      => $timelines,
            'book_count'    => $book_count,
            'follow_count'   => $follow_count,
            'follower_count' => $follower_count
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    // 追加①：フォロー
    // follow/unfollowのはモデル（User.php）に記載
    public function follow(User $user)
    {
        $follower = auth()->user();
        // $is_following：フォローしているか？
        $is_following = $follower->isFollowing($user->id);
        if(!$is_following) {
        // もしフォローしていなければフォローできる
            $follower->follow($user->id);
            return back();
        }
    }
    
    // 追加②：フォロー解除
    public function unfollow(User $user)
    {
        $follower = auth()->user();
        // $is_following：フォローしているか？
        $is_following = $follower->isFollowing($user->id);
        if($is_following) {
        // もしフォローしていればフォローを解除できる
            $follower->unfollow($user->id);
            return back();
        }
    }
    
}
