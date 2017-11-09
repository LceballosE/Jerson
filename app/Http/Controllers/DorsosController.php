<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dorso;
use DB;

class DorsosController extends Controller
{
   
	public function dorsosfuncion()
	{
		$dorsos = Dorso::all();
		return view('dorsos') -> with ('dorsos',$dorsos);
	


	}
}
