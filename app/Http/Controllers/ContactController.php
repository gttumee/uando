<?php

namespace App\Http\Controllers;

use App\Mail\InquiryMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request){
        if ($request->isMethod('post')) {     
            $validated = $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'message' => 'required'
            ],[
                'name.required' => 'お名前入力してください!',
                'phone.required' => 'お電話番号を入力してください!',
                'email.required' => '電子メールを入力してください！',
                'message.required' => 'お問い合わせ内容を入力してください!'
            ]
        );
        $data =[
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ];
            $contact = new Contact();
            $contact->name =  $request->name;
            $contact->phone =$request->phone;
            $contact->email = $request->email;
            $contact->message = $request->message;
            $contact ->save();
            Mail::to(env('MAIL_ADDRESS'))->send(new InquiryMail($data));
            return redirect()->back()->with('success', 'お問い合わせが送信されました。ありがとうございます！');

        }
          return view('contact');
    }
}