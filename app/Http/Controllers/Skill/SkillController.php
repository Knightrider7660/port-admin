<?php

namespace App\Http\Controllers\Skill;

use App\Skills;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
    public function index(){
        $table = Skills::orderBy('skillID','DESC')->get();
        return view('skills.skills')->with(['table' => $table]);
    }

    public function save(Request $request){
        $table = new Skills();
        $table->name = $request->name;
        $table->capability = $request->capability;
        $table->save();

        return redirect()->back();
    }

    public function edit(Request $request){
        $table = Skills::find($request->id);
        $table->name = $request->name;
        $table->capability = $request->capability;
        $table->save();

        return redirect()->back();
    }

    public function del($id){
        $table = Skills::find($id);
        $table->delete();

        return redirect()->back();
    }
}
