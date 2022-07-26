<?php

namespace App\Http\Controllers;

use App\Models\Replies;
use App\Models\Tweet;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function store($tweet_id)
    {
        $attributes = \request()->validate(['body'=>'required|max:255']);
        Replies::create([
            'user_id'=>auth()->id(),
            'tweet_id'=>$tweet_id,
            'body'=>$attributes['body']
        ]);

        return redirect()->route('home');
    }

    public function edit(Replies $reply)
    {
        return view('replies.edit',compact('reply'));
    }

    public function update(Replies $reply)
    {
        $reply->update(['body'=>\request()->body]);
        return redirect()->route('home');
    }

}
