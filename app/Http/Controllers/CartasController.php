<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carta;
use App\Tipo;
use App\Rareza;
use App\Expansion;
use DB;

class CartasController extends Controller
{
 
	public function infoCartas(){

	/*$cartas = Carta::where('clase',1)->get();*/

	/*$cartas = DB::select('select cartas.nombre, clase.nombre as nclase, tipo.nombre as ntipo, cartas.ataque, cartas.vida, cartas.coste,rareza.nombre as nrareza, expansion.nombre as nexpansion, cartas.imagen FROM cartas inner join clase on cartas.clase=clase.id inner join tipo on cartas.tipo=tipo.id inner join rareza on cartas.rareza=rareza.id inner join expansion on cartas.expansion=expansion.id where cartas.clase=1');*/
		
		$cartas=Carta::where('clase',1)
		->join ('clase','clase.id', '=' , 'cartas.clase')
		->join ('tipo','tipo.id', '=' , 'cartas.tipo')
		->join ('expansion','expansion.id', '=' , 'cartas.expansion')
		->join ('rareza','rareza.id' , '=' , 'cartas.rareza')
		->get(['cartas.nombre', 'clase.nombre AS nclase', 'tipo.nombre AS ntipo', 'cartas.ataque','cartas.vida','cartas.coste','rareza.nombre AS nrareza', 'expansion.nombre AS nexpansion','cartas.imagen']);
		return view('paladin') -> with ('cartas',$cartas);
}		

public function infoCartastodo()
	{
		$cartas = Carta::where('clase',2)->get();
	

		return view('crearmazo') -> with ('cartas',$cartas);


	}

public function infoCartasmago()
	{
		$cartas = Carta::where('clase',2)->get();
	

		return view('mago') -> with ('cartas',$cartas);


	}

public function infoCartascazador()
	{
		$cartas = Carta::where('clase',9)->get();
	

		return view('cazador') -> with ('cartas',$cartas);


	}

public function infoCartasdruida()
	{
		$cartas = Carta::where('clase',4)->get();
	

		return view('druida') -> with ('cartas',$cartas);


	}

public function infoCartasbrujo()
	{
		$cartas = Carta::where('clase',3)->get();
	

		return view('brujo') -> with ('cartas',$cartas);


	}

public function infoCartassacerdote()
	{
		$cartas = Carta::where('clase',6)->get();
	

		return view('sacerdote') -> with ('cartas',$cartas);


	}
	public function infoCartaschaman()
	{
		$cartas = Carta::where('clase',7)->get();
	

		return view('chaman') -> with ('cartas',$cartas);


	}

public function infoCartaspicaro()
	{
		$cartas = Carta::where('clase',8)->get();
	

		return view('picaro') -> with ('cartas',$cartas);


	}
	public function infoCartasguerrero()
	{
		$cartas = Carta::where('clase',5)->get();
	

		return view('guerrero') -> with ('cartas',$cartas);


	}


public function infoCartasnaxxramas()
	{
		$cartas = Carta::where('expansion',1)->get();
	

		return view('naxxramas') -> with ('cartas',$cartas);


	}

	public function infoCartasblackmountain()
	{
		$cartas = Carta::where('expansion',3)->get();
	

		return view('blackmountain') -> with ('cartas',$cartas);


	}

	public function infoCartastheoldgods()
	{
		$cartas = Carta::where('expansion',6)->get();
	

		return view('theoldgods') -> with ('cartas',$cartas);


	}

	public function infoCartasgadjetzan()
	{
		$cartas = Carta::where('expansion',8)->get();
	

		return view('gadjetzan') -> with ('cartas',$cartas);


	}

	public function infoCartaskarazan()
	{
		$cartas = Carta::where('expansion',7)->get();
	

		return view('karazan') -> with ('cartas',$cartas);


	}

	public function infoCartasungoro()
	{
		$cartas = Carta::where('expansion',9)->get();
	

		return view('ungoro') -> with ('cartas',$cartas);


	}
public function infoCartaskft()
	{
		$cartas = Carta::where('expansion',10)->get();
	

		return view('kft') -> with ('cartas',$cartas);


	}


}
