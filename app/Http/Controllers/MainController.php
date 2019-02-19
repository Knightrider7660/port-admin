<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\File;

class MainController extends Controller
{
    public function index(){
        $user = User::first();
        return view('main')->with(['user'=>$user]);
    }

    public function update(Request $request){
//        dd($request->all());
        $user = User::first();
        if ($user != null){
            $table = User::find($user->id);
            $table->name = $request->name;
            $table->email = $request->email;
            $table->company = $request->company;
            $table->position = $request->position;
            $table->address = $request->address;

            //image upload
            if ($request->hasFile('imageName')) {
                
                // previous file delete
                if(file_exists(public_path('profile/user/'.$user->imageName))){
                    unlink(public_path('profile/user/'.$user->imageName));
                }
                // previous file delete

                $extnshon = $request->imageName->extension();
                $filename =  md5(date('Y-m-d H:i:s'));
                $filename = $filename.'.'.$extnshon;

                $table->imageName = $filename;

                $request->imageName->move('public/profile/user',$filename);
            }
            $table->save();
        }else{
            $table = new User();
            $table->name = $request->name;
            $table->email = $request->email;
            $table->company = $request->company;
            $table->position = $request->position;
            $table->address = $request->address;

            //image upload
            if ($request->hasFile('imageName')) {
                // previous file delete
                if(file_exists(public_path('profile/user/'.$user->imageName))){
                    unlink(public_path('profile/user/'.$user->imageName));
                }
                // previous file delete
                $extnshon = $request->imageName->extension();
                $filename =  md5(date('Y-m-d H:i:s'));
                $filename = $filename.'.'.$extnshon;

                $table->imageName = $filename;

                $request->imageName->move('public/profile/user',$filename);
            }
            $table->save();
        }
        return redirect()->back();
    }

    // single over view
    public function inner_view(Request $request){
        $table = User::find($request->id);
        return view('inner.inner_main')->with(['table'=>$table]);
    }
}
