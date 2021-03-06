<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
use App\Video;
use Auth;
use Str;
use App\Likes;
use App\Trailer;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        $videos=Video::all();
        $VideosCount=Video::count();
        $featured=Video::orderBy('id','desc')->get()->take(5);
        return view('Videos.Index')
        ->with('videos',$videos)
        ->with('featured',$featured)
        ->with('catgories',$categories);
    }
    public function trailer()
    {
       $trailers=Trailer::all();
        return view('Videos.Trailer')
        ->with('trailers',$trailers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function like($url)
    {
       $video=Video::where('VideoSlug','=',$url)->get()->first();
       $Likes=$video->Likes;
       $video->Likes=$Likes+1;
       $video->save();
       Likes::create([
           'SubscriberEmail'=>Auth::user()->email,
           'VideoUrl'=>$url
       ]);
       Session::flash('success','You have Successfully Liked the Video');
       return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tstore(Request $request)
    {
        $this->validate($request,[
            'TrailerTitle' =>'required|unique:trailers',
            'TrailerDescription'=>'required',
            'TrailerPoster' =>'required|mimes:png,jpeg,jpg',
            'TrailerFile'=>'required|mimes:mp4,webm'
        ]);
        //handle the poster uploaded
        $TrailerPoster=$request->TrailerPoster;
        $newPosterName=time().$TrailerPoster->getClientOriginalName();
        $TrailerPoster->move('TrailerPosters/',$newPosterName);
        //handle the Trailer uploaded
        $TrailerFile=$request->TrailerFile;
        if($TrailerFile->getSize() > 100000000){
            Session::flash('error','You cant upload a file larger than 100MBS');
            return redirect()->back();
        }
        $newTrailerName=time().$TrailerFile->getClientOriginalName();
        $TrailerFile->move('Trailers/',$newTrailerName);
        Trailer::create([
            'TrailerTitle'=>$request->TrailerTitle,
            'TrailerSlug'=>Str::random(12),
            'TrailerDescription'=>$request->TrailerDescription,
            'TrailerPoster'=>'/TrailerPosters/'.$newPosterName,
            'TrailerFile'=>'Trailers/'.$newTrailerName,
            'PostedBy'=>Auth::user()->email,
        ]);
        Session::flash('success','Trailer Successfully Uploaded');
        return redirect()->back();
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'VideoTitle' =>'required|unique:videos',
            'VideoCategory' =>'required',
            'VideoDescription'=>'required',
            'VideoPoster' =>'required|mimes:png,jpeg,jpg',
            'VideoFile'=>'required|mimes:mp4,webm'
        ]);
        //handle the poster uploaded
        $videoPoster=$request->VideoPoster;
        $newPosterName=time().$videoPoster->getClientOriginalName();
        $videoPoster->move('videoPosters/',$newPosterName);
        //handle the video uploaded
        $videoFile=$request->VideoFile;
        // dd($videoFile->getSize());
        if($videoFile->getSize() > 100000000){
            Session::flash('error','You cant upload a file larger than 100MBS');
            return redirect()->back();
        }
        $newVideoName=time().$videoFile->getClientOriginalName();
        $videoFile->move('Videos/',$newVideoName);
        Video::create([
            'VideoTitle'=>$request->VideoTitle,
            'VideoSlug'=>Str::random(12),
            'VideoCategory'=>$request->VideoCategory,
            'VideoDescription'=>$request->VideoDescription,
            'VideoPoster'=>'/videoPosters/'.$newPosterName,
            'VideoFile'=>'Videos/'.$newVideoName,
            'PostedBy'=>Auth::user()->email,
        ]);
        Session::flash('success','Video Successfully Uploaded');
        return redirect()->back();
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video=Video::where([
            'VideoSlug'=>$id,
            'PostedBy'=>Auth::user()->email
        ])->get()->first();
        if(is_null($video) || empty($video)){
            Session::flash('error','Video Does Not Exist');
            return redirect()->back();
        }
       return view('Videos.Show')->with('video',$video);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categories=Category::all();
        $video=Video::where([
            'VideoSlug'=>$id,
            'PostedBy'=>Auth::user()->email
        ])->get()->first();
        if(is_null($video) || empty($video)){
            Session::flash('error','Video Does Not Exist');
            return redirect()->back();
        }
       return view('Videos.Edit')
       ->with('categories',$categories)
       ->with('video',$video);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'VideoTitle' =>'required',
            'VideoCategory' =>'required',
            'VideoDescription'=>'required',
        ]);
        $video=Video::where([
            'VideoSlug'=>$id,
            'PostedBy'=>Auth::user()->email
        ])->get()->first();
        if(is_null($video) || empty($video)){
            Session::flash('error','Video Does Not Exist');
            return redirect()->back();
        }
        if(is_null($request->VideoPoster)){
            $newPoster=$video->VideoPoster;
        }else{
            $this->validate($request,[
                'VideoPoster'=>'mimes:png,jpg,jpeg'
            ]);
            $videoPoster=$request->VideoPoster;
            $newPosterName=time().$videoPoster->getClientOriginalName();
            $videoPoster->move('videoPosters/',$newPosterName);
            $newPoster='/videoPosters/'.$newPosterName;
            @unlink(public_path($video->VideoPoster));
        }
        if(is_null($request->VideoFile)){
           $newVid=$video->VideoFile;
        }else{
            $this->validate($request,[
                'VideoFile'=>'mimes:mp4,webm'
            ]);
             //handle the video uploaded
            $videoFile=$request->VideoFile;
            if($videoFile->getSize() > 100000000){
                Session::flash('error','You cant upload a file larger than 100MBs');
                return redirect()->back();
            }
            $newVideoName=time().$videoFile->getClientOriginalName();
            $videoFile->move('Videos/',$newVideoName);
            $newVid='/Videos/'.$newVideoName;
            @unlink(public_path($video->VideoFile));
        }
        $video->VideoTitle=$request->VideoTitle;
        $video->VideoCategory=$request->VideoCategory;
        $video->VideoDescription=$request->VideoDescription;
        $video->VideoPoster=$newPoster;
        $video->VideoFile=$newVid;
        $video->save();
        Session::flash('success','Video Successfully Updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video=Video::where([
            'VideoSlug'=>$id,
        ])->get()->first();
        if(is_null($video) || empty($video)){
            Session::flash('error','Video Does Not Exist');
            return redirect()->back();
        }
        @unlink(public_path($video->VideoPoster));
        @unlink(public_path($video->VideoFile));
        $idv=$video->id;
        $video->destroy($idv);
        Session::flash('success','Video Deleted Successfully');
        return redirect()->back();
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tdestroy($id)
    {
        $trailer=Trailer::where([
            'TrailerSlug'=>$id,
        ])->get()->first();
        if(is_null($trailer) || empty($trailer)){
            Session::flash('error','Trailer Does Not Exist');
            return redirect()->back();
        }
        // dd(url($trailer->TrailerFile));
        @unlink(public_path($trailer->TrailerPoster));
        @unlink(public_path($trailer->TrailerFile));
        $idv=$trailer->id;
        $trailer->destroy($idv);
        Session::flash('success','Trailer Deleted Successfully');
        return redirect()->back();
    }
}
