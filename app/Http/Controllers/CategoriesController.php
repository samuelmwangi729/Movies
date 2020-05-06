<?php

namespace App\Http\Controllers;
use App\Category;
use Session;
use App\Video;
use Auth;
use App\CatSubscriber;
use App\Likes;
use Illuminate\Http\Request;
use App\Views;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        $featured=Video::orderBy('id','desc')->get()->take(5);
        return view('Categories.Index')
        ->with('featured',$featured)
        ->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video=Video::where('VideoSlug','=',$id)->get()->first();
        $categories=Category::all();
        if(is_null($video) || empty($video)){
            Session::flash('error','Video Does Not Exist');
            return redirect()->back();
        }
        $isSubscriber=CatSubscriber::where([
            ['Subscriber','=',Auth::user()->email],
            ['Category','=',$video->VideoCategory],
        ])->get()->last();
        $cat=Category::where('CategoryName','=',$video->VideoCategory)->get()->first();
        $categoryPrice=$cat->Price;
        $featured=Video::orderBy('id','desc')->get()->take(5);
        if(is_null($isSubscriber) || $isSubscriber->count() == 0){
           return view('Subscribe')
           ->with('featured',$featured)
           ->with('Price',$categoryPrice)
           ->with('vidCategory',$video->VideoCategory)
           ->with('categories',$categories);
        }
        if($isSubscriber->Status==1){
            //subscription expired, renew
            return view('Renew')
            ->with('featured',$featured)
            ->with('Price',$categoryPrice)
            ->with('vidCategory',$video->VideoCategory)
           ->with('categories',$categories);
        }
        $isViewed=Views::where([
            ['UserEmail','=',Auth::user()->email],
            ['VideoUrl','=',$id]
        ])->get();
        if($isViewed->count()==0){
            $initialViews=$video->Views;
            $video->Views=$initialViews+1;
            $video->save();
            Views::create([
                'UserEmail'=>Auth::user()->email,
                'VideoUrl'=>$id,
            ]);
        }
        $liked=Likes::where([
            ['SubscriberEmail','=',Auth::user()->email],
            ['VideoUrl','=',$id]
        ])->get()->first();
        if(is_null($liked)){
            $isLiked=0;
        }else{
            $isLiked=1;
        }
        return view('Review')
        ->with('featured',$featured)
        ->with('isLiked',$isLiked)
        ->with('categories',$categories)
        ->with('video',$video);
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
            'CategoryName'=>'required|unique:categories',
            'CategoryImage'=>'required|mimes:png,jpg,jpeg'
        ]);
        $file=$request->CategoryImage;
        $newImageName=time().$file->getClientOriginalName();
        $file->move('Categories',$newImageName);
        Category::create([
            'CategoryImage' =>'/Categories/'.$newImageName,
            'CategoryName' =>$request->CategoryName
        ]);
        Session::flash('success','Category Successfully Created');
        return  back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function find($id)
    {
        $videos=Video::where('VideoCategory','=',$id)->get();
        if(is_null($videos) || count($videos)==0){
            Session::flash('error','No videos Under Such Category Uploaded');
            return redirect()->back();
        }
        $featured=Video::orderBy('id','desc')->get()->take(5);
        $categories=Category::all();
        return view('Group')
        ->with('featured',$featured)
        ->with('categories',$categories)
        ->with('videos',$videos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::where('CategoryName','=',$id)->get()->first();
        if(is_null($category)){
            Session::flash('error','The Category Does not exist');
            return redirect()->back();
        }
        $id=$category->id;
        $category->destroy($id);
       @unlink(public_path($category->CategoryImage));
       Session::flash('error','Category Successfully Deleted');
       return redirect()->back();
    }
}
