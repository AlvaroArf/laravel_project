<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use View;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$ar = Empleado::all();
        $ar1 = $ar->toArray();
        return view('todos', ['todos' => $ar1]);
    }
   
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()
    {
        return view('create');
    }

    

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)
    {
        Empleado::create($request->all());
        return redirect()->route('empleados.index')
                        ->with('success','Empleado creado correctamente.');
    }

    public function edit(Empleado $emple)
    {
    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Autor  $autor

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Empleado $emple)
    {
        $emple->update($request->all());
        return redirect()->route('empleados.index')
                        ->with('success','Empleado actualizado');
    }

    public function destroy(int $id)
    {
	Empleado::where('id',$id)->delete();
	return redirect()->route('empleados.index')
		->with('success', 'Empleado eliminado con éxito');
    }

}
