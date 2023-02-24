<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkaiciuokleController extends Controller
{
public function index(){
    return view('skaiciuokle');
}

public function rezultatas(Request $request){


    $all= $request->all();
    $weigh = $all['weight'];
    $centimeters=$all['tall'] ;

    if($centimeters!=0) {
    $kmi = $weigh / (($centimeters / 100) ** 2);
    return view("rezultatas",[
      'kmi'=>$kmi
    ]);
       }else{
        header("location: ".route('index'));
        die();
    }
}
}
