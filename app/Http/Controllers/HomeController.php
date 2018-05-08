<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	$hdurum=file_get_contents('http://212.175.180.28/api/tahminler/gunluk?istno=93401');
	    $hhdurum=json_decode($hdurum);
    	//dd($hhdurum);
	    return View::make('home')
		    ->with('durum',$hhdurum);
//return view('home');
		  //  ->json();

    }




  /**  public function ckaydet(Request $request)
    {
        return view('\');
}*/
}