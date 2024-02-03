<?php

namespace App\Http\Controllers;

use App\Models\trashlist;
use Illuminate\Http\Request;

class TrashcollController extends Controller
{
    public function index(){
        $trashcoll = trashlist::get();
        return view('trashcoll',compact('trashcoll'));
 
    }
}