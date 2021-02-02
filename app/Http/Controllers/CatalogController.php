<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Movie;

class CatalogController extends Controller
{
	
    public function getShow($id){
    	$pelicula = Movie::findOrFail($id);
		return view('catalog.show', array('peliculainfo' => $pelicula));
	}
	public function getCreate(){
		return view('catalog.create');
		
	}
	public function getEdit($id){
		$pelicula = Movie::findOrFail($id);
		return view('catalog.edit', array('peliculainfo' => $pelicula));
	}
	public function getIndex() {
		$arrayPeliculas = Movie::all();
    	return view('catalog.index', array('arrayPeliculas'=>$arrayPeliculas));
	}
}
