<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
class Home extends Controller
{
    public function homepage(){
        return view('home',["data"=>Record::all()]);
    }
    public function delete($id){
        Record::find($id)->delete();
        return redirect()->back();
    }
    public function insert(Request $req){
        $req->validate([
            'name'=>'required|min:4',
            'contact'=>'required|min:8',
            'email'=>'required|email',
            'dob'=>'required|date',
        ]);
        //insert data here,
        Record::create([
            'name'=>$req->name,
            'contact'=>$req->contact,
            'email'=>$req->email,
            'dob'=>$req->dob,
        ]);
        return redirect()->back();

    }
    public function update($edit_id){
        $data['record']=Record::find($edit_id);
           return view('edit',$data);
      }

    public function updateData(Request $req){
        $req->validate([
            'name'=>'required|min:4',
            'contact'=>'required|min:8',
            'email'=>'required|email',
            'dob'=>'required|date',
        ]);
     Record::find($req->id)->update([
        'name'=>$req->name,
        'contact'=>$req->contact,
        'email'=>$req->email,
        'dob'=>$req->dob,
        ]);
         return redirect()->back();
    }
}
