<?php 

namespace App\Http\Controllers;

class HomeController extends Controller {

	public function index()
	{
		$mes = \DB::table('month')->first();
		return view('index');
	}

}