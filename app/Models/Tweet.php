<?php

namespace App\Models;

use App\Likabel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\False_;

class Tweet extends Model
{
    use Likabel,HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies(){
        return   $this->hasMany(Replies::class);
    }
}
