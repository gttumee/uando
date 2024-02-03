<?php

namespace App\Http\Controllers;

use App\Models\Finishwork;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $allService = Service::all();
        $allFinishJob = Finishwork::all();
        return view('index',compact('allService','allFinishJob'));
    }
}