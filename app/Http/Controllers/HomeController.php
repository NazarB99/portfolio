<?php

namespace App\Http\Controllers;

use App\About;
use App\Images;
use App\MainImage;
use App\MainText;
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

    public function about()
    {
        return view('about')->with('about',About::find(1));
    }

    public function about_post(Request $request)
    {
        $about = About::find(1);

        $about->title = $request->title;
        $about->text = $request->text;
        $about->save();

        return redirect()->back();

    }

    public function main()
    {
        return view('main_text')->with('main',MainText::find(1));
    }

    public function main_post(Request $request)
    {
        $main = MainText::find(1);

        $main->first_line = $request->first_line;
        $main->second_line = $request->second_line;
        $main->third_line_1 = $request->third_line_1;
        $main->third_line_2 = $request->third_line_2;
        $main->third_line_3 = $request->third_line_3;

        $main->save();

        return redirect()->back();
    }

}
