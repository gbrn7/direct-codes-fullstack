<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class DashboardController extends Controller
{
    public function index(){

        // dd(auth()->user());

        $videos = Video::orderBy('featured', 'DESC')
        ->orderBy('created_at', 'DESC')
        ->get();

        return view('member.dashboard', ['videos' => $videos]);
    }
}
