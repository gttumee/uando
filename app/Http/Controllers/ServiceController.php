<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use App\Models\Service;
use App\Models\Workrequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ServiceController extends Controller
{
    public function index(){
        $allService = Service::all();
        return view('service',compact('allService'));
    }

    public function workrequest(Request $request){
        $serviceInfo = Service::where('id', $request->id)->first();
        return view('requests',compact('serviceInfo'));
    }

    public function requestcreate(Request $request){
        if ($request->isMethod('post')) {     
            $validated = $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'address' => 'required',
                'content' => 'required'
            ],[
                'name.required' => '名前入力してください!',
                'phone.required' => '電話番号入力してください!',
                'email.required' => 'メールを入力してください!',
                'address.required' => '住所を入力してください！',
                'content.required' => '作業内容を入力してください!'
            ]
        );
        $data =[
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'content' => $request->content,
        ];
            $Workrequest = new Workrequest();
            $Workrequest->name = $request->name;
            $Workrequest->phone = $request->phone;
            $Workrequest->email = $request->email;
            $Workrequest->address = $request->address;
            $Workrequest->content = $request->content;
            $Workrequest ->save();
            Mail::to(env('MAIL_ADDRESS'))->send(new InfoMail($data));
            return redirect()->back()->with('success', 'ご依頼いただありがとうございます！、担当者から折り返し連絡いたします。');

        }
          return view('requests');
    }
        
}