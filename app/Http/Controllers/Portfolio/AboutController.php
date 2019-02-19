<?php

namespace App\Http\Controllers\Portfolio;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index(){
        $table = About::orderBy('aboutID','ASC')->get();
        $count = About::count();
        return view('about.about')->with(['table'=>$table,'count'=>$count]);
    }

    // add about
    public function save(Request $request){

        //dd($request->all());
        $table = new About();
        $table->position = $request->position;
        $table->description_1 = $request->description_1;
        $table->description_2 = $request->description_2;

        //image upload
        if ($request->hasFile('imageName')) {

            $extnshon = $request->imageName->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extnshon;

            $table->imageName = $filename;

            $request->imageName->move('public/uploads/about',$filename);
        }

        $table->save();
        return redirect()->back();
    }
}
