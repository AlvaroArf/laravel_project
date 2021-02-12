<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    //
	    	$empleado = Empleado::all();
	        $array = $empleado->toArray();
        	return view('all_emple', ['empleados' => $array]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    //
	    return view("alta_emple");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    //
	    $request->validate(['nom_emple' => 'required', 'ape_emple' => 'required', 'dni' => 'required', 'departamento_id' => 'required']);

        Empleado::create($request->all());

        return redirect()->with('success', 'Empleado dado de alta correctamente.');
        return redirect()->route('emple.index')
            ->with('success', 'Empleado dado de alta correctamente.');
	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
	    //
	    $obj = Empleado::find($id);
            if($obj === null) {
              return view('EmpNoExiste', ['id' => $id]);
            }
            return view('Emp', ['emple' => $obj]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
