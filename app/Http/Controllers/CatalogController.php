<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capa;

class CatalogController extends Controller
{
    
    public	function	getIndex()				
    {	
        $capas=Capa::all();
        return view('catalog.index',['capas'=>$capas]);

       /* return view('catalog.index',array('arrayCapas'=>$this->arrayCapas));*/
    } 

    public	function	getShow($id) 
    {	
        $capa=Capa::findOrFail($id);
        return view('catalog.show',['capa'=>$capa]);

    	/*return	view('catalog.show', array('id'=>$this->arrayCapas[$id])); */
    }

    public	function	getCreate()				
    {								
    	return view('catalog.create');
    } 

    public	function	getEdit($id) 
    {				
    	$capa=Capa::find0rFail($id);
        return view('catalog.edit',['capa'=>$capa]);
        /*
            return	view('catalog.edit', array('id'=>$id)); */
    }

}
