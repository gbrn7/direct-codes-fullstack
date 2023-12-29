<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserPremium;
use App\Models\Package;
use Illuminate\Support\Facades\DB;

class SubscriptionController extends Controller
{
    public function index(){
        $userId = auth()->user()->id;

        $userPremium = UserPremium::with('Package')
                      ->where('user_id', $userId)
                      ->where('end_of_subscription', '>', 'now()')
                      ->orderby('id', 'desc')
                      ->first();
        // dd($userPremium);
        if(!$userPremium){
            return redirect()->route('member.pricing');
        }
            
        $exp = DB::select('select datediff(end_of_subscription, now()) as exp from user_premiums where id='.$userPremium->id);
        // foreach ($exp as $key => $value) {
        //     $exp = $value;
        // }

        // dd($userPremium->package->name);
                        
        // dd($exp[0]->exp);

        return view('member.subscription', ['userPremium'=> $userPremium , 'exp' => $exp[0]->exp]);
    }

    public function stopSubs($id){
        // dd($id);
        UserPremium::destroy($id);
        return redirect()->route('member.dashboard');
    }
}
