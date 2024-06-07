<?php

namespace App\Http\Controllers;

use App\Models\Twitter;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('dashboard', [
            'twitter' => Twitter::orderBy('created_at', 'DESC')->get()
        ]);
    }
}