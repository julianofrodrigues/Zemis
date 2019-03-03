<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\colecao;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $colecaos = colecao::all();
        return view('home',[
            'colecaos'=>$colecaos
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
}
