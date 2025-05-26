<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view('home', [
            'recipe'=> Recipe::all()
        ]);
    }

    public function contact(){
        return view('contact');
    }
     
    public function saverecipe(Request $request){
        // dd(request()->all());
        // dd($request->all());

    //   dd($request[ 'recipename' ]) ;
    // dd($request->recipename);
    Recipe::create([
        'recipename' => $request->recipename,
        'ingredient_name'=>$request->ingredient_name,
        'quantity'=>$request->quantity,
        'instructions'=>$request->instructions,
    ]);
       
    }
}
