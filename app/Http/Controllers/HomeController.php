<?php 

namespace App\Http\Controllers;

class HomeController extends Controller {

	public function index()
	{
		return view('index');
	}

	public function indexGrafico()
	{
		return view('indexGrafico');
	}

	public function indexAmbos()
	{
		return view('indexAmbos');
	}
}