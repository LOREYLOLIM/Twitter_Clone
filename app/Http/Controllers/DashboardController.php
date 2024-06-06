<?php

namespace App\Http\Controllers;

use App\Models\Twitter;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $twitter = new Twitter([
            'content'=>'hello Twitter',
        ]);
        $twitter->save();
        // dump(Twitter::all());
        return view('dashboard', [
            'twitter' => Twitter::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
