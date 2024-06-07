<?php

namespace App\Http\Controllers;

use App\Models\Twitter;
use Illuminate\Http\Request;

class TwitterController extends Controller
{
    //
    public function store(){
        $twitter = Twitter::create(
            [
            'content'=> request()->get('twitter', ''),
        ]
    );
        return redirect()->route('dashboard');
    }
}
