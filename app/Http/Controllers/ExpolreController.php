<?php

namespace App\Http\Controllers;

use App\Models\User;

class ExpolreController
{
    public function index()
    {
     return   view('explore',
         ['users'=>User::paginate(50)]);
}
}
