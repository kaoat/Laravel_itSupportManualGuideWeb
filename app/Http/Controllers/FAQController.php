<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FAQController extends Controller
{
    function index(){
        $title="Management";
        $faqList=Faq::all();
        return view('faqpage',compact('title','faqList'));
    }

    function getCreatePage(){
        $title="Create FAQ";
        return view('faqpage',compact('title'));
    }

    function showFaq($id){
        $data=Faq::find($id);
        $title=$data['title'];
        $faqDropdown=Faq::all();
        return view('index',compact('data','title','faqDropdown'));
    }

    function getEditPage($id){
        $title="Edit FAQ";
        $faq=Faq::find($id);
        return view('faqpage',compact('title','faq'));
    }

    function save(Request $request){
        $request->validate([
            'id'=>['required'],
            'title'=>['required'],
            'detail'=>['required'],
        ]);
        $data=$request->all();
        if($data['id']==0){
            $this->add($data);
        }else{
            $this->update($data);
        }
        //return reponse(route("managementpage"))->header('Cache-Control', 'no-store, must-revalidate');
        return Redirect(route('managementpage'));
    }

    function add(array $data){
        Faq::create([
            'title'=>$data["title"],
            'detail'=>$data['detail'],
        ]);
    }

    function update(array $data){
        $row=Faq::find($data['id']);
        $row->title=$data['title'];
        $row->detail=$data['detail'];
        $row->save();
    }

    function remove($id){
        $row=Faq::find($id)->delete();
        $data=[
            "result"=>true,
        ];
        return response()->json($data, 200);
    }

}
