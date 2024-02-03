<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Finishwork;
use App\Models\Service;
use App\Models\trashlist;
use App\Models\Workrequest;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class AdminController extends Controller
{
   public function addservice(Request $request){
      if (!$request->isMethod('post')) {
         $allService = Service::paginate(3);
         return view('admin.addservice',['allService' => $allService]);
      }
      else
      {
         if ($id = $request->input('id')) {
            $service = Service::find($id);
            if ($service) {
                $service->delete(); 
                return redirect()->route('addservice')->with('success', '削除が完了しました');
            }
            else
            {
               return redirect()->route('addservice')->with('error', '削除に失敗しました');
   
            }
        }
          
        if ($request->isMethod('post')) {
            $image = $request->file('image');
            $image = Image::make($image)->orientate()->resize(640, 427);
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $image->save(public_path('img') . '/' . $imageName);
            $addService = new Service();
            $addService->name = $request->name;
            $addService->content = $request->content;
            $addService->date = $request->date;
            $addService->price = $request->price;
            $addService->image = $imageName;
            $addService->save();
            return redirect()->route('addservice')->with('success', '保存が完了しました');
           }
           else
           {
           return redirect()->route('addservice')->with('error', '保存に失敗しました');
           }
      } 
   }
   
   public function addjob(Request $request){
      if (!$request->isMethod('post')) {
         $allService = Service::orderBy('created_at', 'desc')->get();;
         $allFinishJob = Finishwork::all();
         return view('admin.addjob',compact('allService','allFinishJob'));
      }
      else
      {
         if ($id = $request->input('id')) {
            $service = Finishwork::find($id);
            if ($service) {
                $service->delete(); 
                return redirect()->route('addjob')->with('success', '削除が完了しました');
            }
            else
            {
               return redirect()->route('addjob')->with('error', '削除に失敗しました');
   
            }
        }    
         if ($request->isMethod('post')) {
            $image1 = $request->file('image1');
            $image2 = $request->file('image2');
            $image1 = Image::make($image1)->orientate()->resize(640, 500);
            $image2 = Image::make($image2)->orientate()->resize(640, 500);
            $imageName1 = time() . '_' .$request->image1->getClientOriginalName();
            $imageName2 = time() . '_' . $request->image2->getClientOriginalName();
            $image1->save(public_path('img') . '/' . $imageName1);
            $image2->save(public_path('img') . '/' . $imageName2);
            $addWork = new Finishwork();
            $addWork->service = $request->service;
            $addWork->title = $request->title;
            $addWork->content = $request->content;
            $addWork->date = $request->date;
            $addWork->image1 = $imageName1;
            $addWork->image2 = $imageName2;
            $addWork->save();
            return redirect()->route('addjob')->with('success', '保存が完了しました');
           }
           else
           {
           return redirect()->route('addjob')->with('error', '保存に失敗しました');
           }
      } 
       return view('admin.addjob');
   }
   
   public function jobrequest(Request $request){
      if ($request->isMethod('post')) {
            $service = Workrequest::find($request->input('id'));
            if ($service) {
                $service->delete(); 
                return redirect()->route('jobrequest')->with('success', '対応済みにしました。');
            }
            else
            {
               return redirect()->route('jobrequest')->with('error', '対応済みに失敗しました');
   
            }
         
      }
    $allRequest = Workrequest::orderBy('created_at', 'desc')->get();
    return view('admin.jobrequest',compact('allRequest'));
   }

   public function contactcheck(){
      $allContact = Contact::orderBy('created_at', 'desc')->get();
    return view('admin.contactcheck',compact('allContact'));
   }

   public function trashlist(Request $request){
      if (!$request->isMethod('post')) { 
      $trashlist = trashlist::orderby('created_at','desc')->get();
      return view('admin.trashlist',compact('trashlist'));
      }
      else
      {
         if ($id = $request->input('id')) {
            $trashlist = trashlist::find($id);
            if ($trashlist) {
                $trashlist->delete(); 
                return redirect()->route('trashlist')->with('success', '削除が完了しました');
            }
            else
            {
               return redirect()->route('trashlist')->with('error', '削除に失敗しました');
   
            }
        }
          
        if ($request->isMethod('post')) {
            $image = $request->file('image');
            $image = Image::make($image)->orientate()->resize(640, 427);
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $image->save(public_path('img') . '/' . $imageName);
            $trashlist = new trashlist();
            $trashlist->name = $request->name;
            $trashlist->type = $request->type;
            $trashlist->image1 = $imageName;
            $trashlist->save();
            return redirect()->route('trashlist')->with('success', '保存が完了しました');
           }
           else
           {
           return redirect()->route('trashlist')->with('error', '保存に失敗しました');
           }
      } 
   }

}