<?php

namespace App\Http\Controllers;

use App\Models\Stars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index(){
        return view('index', [
            'stars' => Stars::all()
        ]);
    }

    public function viewAddStars(){
        return view('addStars', [
            'stars' => Stars::all()
        ]);
    }

    public function addStars(Request $request){
        $stars = new Stars();
        $stars->Nom=$request->Nom;
        $stars->Prenom=$request->Prenom;
        $stars->Image=$request->Image;
        $stars->Description=$request->Description;
        if($stars->save()) {
            echo "La star a été enregistré !";
        }return redirect('index.php');
    }
}
