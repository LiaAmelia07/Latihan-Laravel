<?php

namespace App\Http\Controllers;
use App\Models\biodatas;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
 public function bio(){
     $data= biodatas::all();
     return view('biodata', compact('data'));
 }
}
