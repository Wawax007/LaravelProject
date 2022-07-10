<?php

namespace App\Http\Controllers;

use App\Models\Stars;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        return view('index', [
            'stars' => Stars::all()
        ]);
    }

    public function backoffice(){
        return view('backoffice', [
            'stars' => Stars::all()
        ]);
    }

    public function viewAddStars(){
        return view('addStars', [
            'stars' => Stars::all()
        ]);
    }

    public function viewEditStars(){
        return view('editStars', [
            'stars' => Stars::all()
        ]);
    }

    public function addStars(Request $request){
        $stars = new Stars();
        $stars->Nom = $request->Nom;
        $stars->Prenom = $request->Prenom;
        $stars->Image = $request->Image;
        $stars->Description = $request->Description;
        if(isset($stars->Nom) && isset($stars->Prenom) && isset($stars->Image) && isset($stars->Description)) {
            if ($stars->save()) {
                echo "La star a été enregistré !";
            }
            return redirect('backoffice');
        } else {
            echo "Veuillez remplir tous les champs s'il vous plait";
            header( "refresh:3; url=viewAddStars" );
        }
    }

    public function edit($id){
        $stars = Stars::find($id);
        return view('editStars', compact('stars'));
    }

    public function update(Request $request, $id){
        $stars = Stars::find($id);
        $stars->Nom = $request->Nom;
        $stars->Prenom = $request->Prenom;
        $stars->Image = $request->Image;
        $stars->Description = $request->Description;
        if(isset($stars->Nom) && isset($stars->Prenom) && isset($stars->Description)) {
            if(isset($stars->Image)) {
                if ($stars->update()) {
                    echo "La star a été enregistré !";
                }
                return redirect('backoffice');
            } else {
                echo "Veuillez ajouter une image s'il vous plait";
            }
        } else {
            echo "Veuillez remplir tous les champs s'il vous plait";
            header( "refresh:3; url=viewAddStars" );
        }
        return view('editStars', compact('stars'));
    }

    public function destroy(Stars $star){
        $star->delete();
        return back();
    }
}
