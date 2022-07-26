<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{

    public function index()
    {
        return view('tweets.index',[
            'tweets'=>auth()->user()->timeline()
        ]);
    }

    public function store()
    {
        $attributes = \request()->validate(['body'=>'required|max:255']);
        Tweet::create([
            'user_id'=>auth()->id(),
            'body'=>$attributes['body']
        ]);

        return redirect()->route('home');
    }

    public function destroy($id)
    {
        Tweet::destroy([
            'id'=>$id
        ]);
        return redirect()->back();
    }

    public function edit(Tweet $tweet)
    {
        return view('tweets.edit',compact('tweet'));
    }

    public function update(Tweet $tweet)
    {
    $tweet->update(['body'=>\request()->body]);
    return redirect()->route('home');
    }
}
