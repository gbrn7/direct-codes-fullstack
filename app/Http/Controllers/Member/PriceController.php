<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class PriceController extends Controller
{
    public function index(){
        if(!auth()->user()){
            return redirect()->route('member.login');
        }

        $basic = Package::where('name', 'basic')->first();
        $pro = Package::where('name', 'pro')->first();
        $ultimate = Package::where('name', 'ultimate')->first();
        // dd($ultimate->name);
        return view('member.pricing', ['basic' => $basic, 'pro' => $pro, 'ultimate' => $ultimate]);
    }

}
