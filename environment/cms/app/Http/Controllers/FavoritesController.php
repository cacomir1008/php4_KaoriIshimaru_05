<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;

class FavoritesController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Favorite $favorite){
        $user = auth()->user();
        $book_id = $request->book_id;
        $is_favorite = $favorite->isFavorite($user->id, $book_id);

        if(!$is_favorite) {
            $favorite->storeFavorite($user->id, $book_id);
            return back();
        }
        return back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favorite $favorite){
        $user_id = $favorite->user_id;
        $book_id = $favorite->book_id;
        $favorite_id = $favorite->id;
        $is_favorite = $favorite->isFavorite($user_id, $book_id);

        if($is_favorite) {
            $favorite->destroyFavorite($favorite_id);
            return back();
        }
        return back();
    }
}
