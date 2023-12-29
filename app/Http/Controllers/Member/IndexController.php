<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        if(auth()->user()){
            return redirect()->route('member.dashboard');
        }

        return view('index');
    }
}
