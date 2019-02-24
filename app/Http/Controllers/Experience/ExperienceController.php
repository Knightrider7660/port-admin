<?php

namespace App\Http\Controllers\Experience;

use App\Experiences;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller
{
    public function index(){
        $table = Experiences::orderBy('experienceID','DESC')->get();
        return view('experience.experience')->with(['table' => $table]);
    }

    public function save(Request $request){
        $table = new Experiences();
        $table->position = $request->position;
        $table->institution = $request->institution;
        $table->save();

        return redirect()->back();
    }

    public function edit(Request $request){
        $table = Experiences::find($request->id);
        $table->position = $request->position;
        $table->institution = $request->institution;
        $table->save();

        return redirect()->back();
    }

    public function del($id){
        $table = Experiences::find($id);
        $table->delete();

        return redirect()->back();
    }
}
