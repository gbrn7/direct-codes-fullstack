<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Models\UserPremium;
use App\Models\Package;

class VideoController extends Controller
{
    public function show($id){

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

        $Videos = DB::table('videos')
                ->join('playlist_detail', 'videos.id', 'playlist_detail.video_id')
                ->select('videos.*', 'playlist_detail.*')
                ->where('videos.id', $id)
                ->get();
        $i=1;
        $data = Arr::first($Videos);
        // dd($Videos->first());
        foreach ($Videos as $key => $value) {
            if($key == 0){
                $value->selected= 1;
            }else{
                $value->selected= 0;
            }
        };
        // Arr::add($test, 'selected', 1);
        // $test->selected = 1;
        // $test['selected'] = 1;
        // dd($Videos);
        return view('member.video-detail', ['videos' => $Videos], ['data' => $data]);
    }


    public function playlist_show($video_id,  $id, $i){
    // $videos =  DB::select('select * from playlist_detail where video_id = :video_id and id = :id', ['video_id' => $video_id, 'id' => $id]);
    $videos = DB::table('videos')
    ->join('playlist_detail', 'videos.id', 'playlist_detail.video_id')
    ->select('videos.*', 'playlist_detail.*')
    ->where('videos.id', $video_id)
    ->get();

    $data = DB::table('videos')
    ->join('playlist_detail', 'videos.id', 'playlist_detail.video_id')
    ->select('videos.*', 'playlist_detail.*')
    ->where('videos.id', $video_id)
    ->where('playlist_detail.id', $id)
    ->first();

        foreach ($videos as $key => $value) {
            if($key == $i-1){
                $value->selected= 1;
            }else{
                $value->selected= 0;
            }
        }

    // dd($i);
    // dd($videos);
    // dd($data);
    return view('member.video-detail', ['videos' => $videos], ['data' => $data]);
    }
}
