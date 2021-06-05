<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Noticia;
use Redirect;



class NoticiaController extends Controller
{
	public function home(){
		$noticia = Noticia::get();
		return view('home', ['noticia'=>$noticia]);
	}
	
	public function noticia(){
		$noticia = Noticia::get();
		return view('exibirn', ['noticia'=>$noticia]);
		
	}
	public function criar(Request $request){
		$noticia = new Noticia;
		$noticia = $noticia->create($request->all());
		return Redirect::to('/cadastro');
		
	}
	public function red(){
		$noticia = Noticia::get();
		return view('cadastrarn', ['noticia'=>$noticia]);
	}
	public function red2(){
		$not= Noticia::get();
		return view('consultar', ['not'=>$not]);
	}
	
	public function consultar(Request $request){
		$pesq = $request->input('pesq');
		$noticia = Noticia::where('titulo',$pesq)->get();
		return view('consultar', ['noticia'=>$noticia]);
		
	}
	
	 
}
