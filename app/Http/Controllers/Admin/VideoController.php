<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Video;
use App\Models\playlist_detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{

    public function index(){
        $videos = Video::all();

        return view('admin.videos', ['videos' => $videos]);
    }

    public function create(){
        return view('admin.video-create');
    }

    public function edit($id){
        $video = Video::find($id);
        return view('admin.video-edit', ['video' => $video]);
    }

    public function store(Request $request){ 
        $data = $request->except('_token'); // Get all of the input and files for the request except _token column.

        $request->validate([
            'title' => 'required|string', //if one of column is not vali or null, system will sending the error massage
            'thumbnail' => 'required|image|mimes:png,jpg,jpeg',
            'trailer' => 'required|url',
            'video' => 'url',
            'mentor' => 'required|string',
            'categories' => 'required|string',
            'release_date' => 'required|string',
            'about' => 'required|string',
            'number_of_parts' => 'required|numeric',
            'featured' => 'required',
        ]);

        $thumbnail = $request->thumbnail;
        $thumbnailName = Str::Random(10).$thumbnail->getClientOriginalName();
        //Line above is the command to create 10 random character before name thumbnail file to avoid the redudancy name 
         $thumbnail->storeAs('public/thumbnail' , $thumbnailName); //Kode ini digunakan untuk mentimpan foto pada folder dengan value pertama nama folder dan value ke dua nama filenya
        $data['thumbnail'] = $thumbnailName; //change the value in thumbnail column to new thumbnail name

       $video_id = DB::table('videos')->max('id');
       
       dd($data);
       return view('admin.playlist-create', [
        'data' => $data,
        'id' => $video_id,
    ]);        
    }

    public function store_playlist(Request $request){
        $array= $request->all();
        $data = $request->only('title', 'thumbnail', 'trailer','video', 
                               'mentor', 'categories', 'release_date', 'about', 'number_of_parts', 
                               'featured');
        Video::create($data); //Create record
        $video_id = DB::table('videos')->max('id'); //Find New video_id


        $loop = $data['number_of_parts'];
        for ($i=0; $i < $loop; $i++) { 
            $array = ['video_id' => $video_id,
                     'title_part' => data_get($request, ['title_'.$i+1]),
                     'link_video' => data_get($request, ['link_'.$i+1])
                    ];
            playlist_detail::create($array);
        }
        $video_id = DB::table('videos')->max('id'); //Find New video_id


        return redirect()->route('admin.video')->with('success', 'Movie Created');

    }

    public function update(Request $request, $id){
        $data = $request->except('_token'); // Get all of the input and files for the request except _token column.

        $request->validate([
            'title' => 'required|string', //if one of column is not vali or null, system will sending the error massage
            'thumbnail' => 'image|mimes:png,jpg,jpeg',
            'trailer' => 'required|url',
            'video' => 'url',
            'mentor' => 'required|string',
            'categories' => 'required|string',
            'release_date' => 'required|string',
            'about' => 'required|string',
            'number_of_parts' => 'required|numeric',
            'featured' => 'required|numeric',
        ]);

        $video = Video::find($id);

        if($request->thumbnail){
            //Save new Image
            $thumbnail = $request->thumbnail;
            $thumbnailName = Str::Random(10).$thumbnail->getClientOriginalName();
            $thumbnail->storeAs('public/thumbnail' , $thumbnailName); //Kode ini digunakan untuk mentimpan foto pada folder dengan value pertama nama folder dan value ke dua nama filenya
            $data['thumbnail'] = $thumbnailName; 

            //Delete new Image
            Storage::delete('public/thumbnail/'.$video->thumbnail);
        }

        $video->update($data);

        // dd($data);
        return redirect()->route('admin.video')->with('success', 'Movie Updated');
    }

    public function destroy($id){
        Video::find($id)->delete();
        return redirect()->route('admin.video')->with('success', 'Video Deleted');
    }
}
