<?php

namespace App\Http\Controllers;

use App\Models\Finishwork;
use App\Models\Service;
use Illuminate\Http\Request;

class FinishjobController extends Controller
{
    public function index(Request $request){
        if (!$request->isMethod('post')) {
            $allService = Service::all();
            $allFinishJob = Finishwork::all();
            return view('finishjob',compact('allService','allFinishJob'));
         }
        }
}