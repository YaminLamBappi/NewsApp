<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store($user_id, $news_id)
    {
        $user = User::find($user_id);
        $news = News::find($news_id);
        $likeable = Like::where("user_id", $user->id)->where("news_id", $news->id)->count();

        $likes = Like::create([
            "user_id" => $user->id,
            "news_id" => $news->id,
        ]);

        $likes->save();

        return redirect()->route('posts.show', ['id' => $news_id])->with('likeable', $likeable);

        //
    }

    public function destroy(string $id)
    {
        $like = Like::where('news_id', $id);
        $like->delete();

        $user = Auth::user();
        $news = News::find($id);

        $likeable = Like::where("user_id", $user->id)->where("news_id", $news)->count();


        return redirect()->route('posts.show', ['id' => $id])->with('likeable', $likeable);
        //
    }
}
