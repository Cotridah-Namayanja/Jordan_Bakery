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
}
