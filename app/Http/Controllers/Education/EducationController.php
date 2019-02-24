<?php

namespace App\Http\Controllers\Education;

use App\Educations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    public function index(){
        $table = Educations::orderBy('eduID','DESC')->get();
        return view('education.education')->with(['table' => $table]);
    }

    public function save(Request $request){
        $table = new Educations();
        $table->name = $request->name;
        $table->institution = $request->institution;
        $table->save();

        return redirect()->back();
    }

    public function edit(Request $request){
        $table = Educations::find($request->id);
        $table->name = $request->name;
        $table->institution = $request->institution;
        $table->save();

        return redirect()->back();
    }

    public function del($id){
        $table = Educations::find($id);
        $table->delete();

        return redirect()->back();
    }
}
