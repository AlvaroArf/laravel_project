<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use View;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }
   
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Frases  $frases
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
	    $obj = Departamento::firstwhere('nombre_depto', $id);
	    if ($obj === null) {
	    	return view('unoNoExiste', ['id' => $id]);
	    }
	    return view('departamento', ['dep' => $obj]);
    }

    public function create()
    {
    }

    

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)
    {
    }

    public function edit($id)
    {
    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Frases  $frases

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
   
    
}
