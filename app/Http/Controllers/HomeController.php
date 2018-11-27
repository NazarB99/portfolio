<?php

namespace App\Http\Controllers;

use App\Images;
use App\MainImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->with('imgs',Images::all());
    }

    public function add_img(Request $request)
    {
        $filename = time().'.'.$request->image->getClientOriginalExtension();
        request()->image->move(public_path('images/projects'), $filename);

        Images::create([
            'image' => $filename
        ]);

        return redirect()->back();
    }

    public function add_img_delete(Request $request)
    {
        $img = Images::find($request->img);
        $img->delete();
        return redirect()->back();
    }

    public function main_img()
    {
        $main_img = MainImage::find(1);

        return view('main')->with('main_img',$main_img);
    }

    public function main_img_post(Request $request)
    {
        $filename = time().'.'.$request->main_image->getClientOriginalExtension();
        $request->main_image->move(public_path('images'), $filename);

        $main_img = MainImage::find(1);
        if ($main_img !== null){
            $main_img->img_name = $filename;
            $main_img->save();
        }
        else{
            MainImage::create([
               'img_name' => $filename
            ]);
        }

        return redirect()->back();
    }

}
