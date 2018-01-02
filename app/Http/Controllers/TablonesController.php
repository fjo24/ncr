<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Tablon;
Use App\Clavo;

class TablonesController extends Controller
{
    public function index()
    {
    	$solucion=4;

    	$tablones = Tablon::orderBy('id', 'DESC')->get();
    	foreach ($tablones as $tablon){   
        		if ($tablon->status=='no_clavado') {
        			$solucion=-1;
        		}
        	}  
        return view('tablon.index', compact('tablones', 'solucion')); 
    }

    public function create()
    {

    	$ts=Tablon::all();
    	foreach ($ts as $t){   
        			$t->status='no_clavado';
        			$t->update();
        		}
       return view('tablon.create'); 
    }

    public function store(Request $request)
    {

    	//tablones;
    	$tablon1 = Tablon::find(1);
    	$tablon1->a=$request['a1'];
    	$tablon1->b=$request['b1'];
    	$tablon1->update();

    	$tablon2 = Tablon::find(2);
    	$tablon2->a=$request['a2'];
    	$tablon2->b=$request['b2'];
    	$tablon2->update();

    	$tablon3 = Tablon::find(3);
    	$tablon3->a=$request['a3'];
    	$tablon3->b=$request['b3'];
    	$tablon3->update();

    	$tablon4 = Tablon::find(4);
    	$tablon4->a=$request['a4'];
    	$tablon4->b=$request['b4'];
    	$tablon4->update();

    	//clavos
    	$clavo1 = Clavo::find(1);
    	$clavo1->pos=$request['clavo1'];
    	$clavo1->update();

    	$clavo2 = Clavo::find(2);
    	$clavo2->pos=$request['clavo2'];
    	$clavo2->update();

		$clavo3 = Clavo::find(3);
    	$clavo3->pos=$request['clavo3'];
    	$clavo3->update();

        $clavo4 = Clavo::find(4);
    	$clavo4->pos=$request['clavo4'];
    	$clavo4->update();

		$clavo5 = Clavo::find(5);
    	$clavo5->pos=$request['clavo5'];
    	$clavo5->update();

    	//clavando tablones
    	$clavos=Clavo::all();
    	$tablones=Tablon::all();
        foreach ($clavos as $clavo){
        	foreach ($tablones as $tablon){   
        		if (($tablon->a <= $clavo->pos) && ($clavo->pos <= $tablon->b) ) {
        			$tablon->status='clavado';
        			$tablon->update();
        		}
        	}    
        }
    	//dd($request->a0);
    	//dd($request['b0']);
       /* $request = $request->all();
        $provider = new Provider($request);
        $provider->save();*/
       // Flash::success('Se ha registrado el proveedor '. $provider->title. ' de manera exitosa!')->important();
        return redirect()->route('tablon.index');
    }

    public function show($id)
    {
  
    }

    public function edit()
    {
      $tablon1 = Tablon::find(1);
        return view('tablon.edit'); 
    }

    public function update(Request $request)
    {
    
    }

    public function destroy($id)
    {
   
    }

    public function caracteres()
    {
        return view('caracteres.form');
    }

    public function rcaracteres(Request $request)
    {
       
        //dd(mb_substr_count("This is a test is is is si sis siola clar si claris", $a)); // imprime 2
        $cadena=$request->cadena;
        $subcadena=$request->subcadena;

        $cad = strtolower($cadena);
        $sub = strtolower($subcadena);

        $c=(substr_count($cad, $sub));
        /*for($i = 0; $i < 10; $i ++){
            $ale=str_shuffle($subcadena);
            if ($ale!=$subcadena) {
                
                $conteo=(substr_count($cadena, $ale));
                $c=$conteo+$c;
            }
        }*/
        
        //dd(str_shuffle($subcadena));
        return view('caracteres.rcaracteres', compact('c', 'subcadena', 'cadena'));
    }
}