<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Repositories\Empleados;

class UserController extends Controller
{
	protected $empleados;

	public function __construct(Empleados $empleados){
		$this->empleados = $empleados;
	}

    public function index(){
    	$empleados = $this->empleados->all();
		return view('empleados.index', compact('empleados'));
    }

    public function show($id){
    	$empleado = $this->empleados->find($id);
		return view('empleados.show', compact('empleado'));
    }

    public function edit($id){
    	$empleado = $this->empleados->find($id);
    	return view('empleados.edit')->with(compact('empleado'));
    }

    public function store(){
    	$this->empleados->create();
    	return redirect()->route('empleados.index');
    }

    public function create(){
    	return view('empleados.create');
    }

    public function destroy($id){
    	$empleado = $this->empleados->find($id);
    	$this->empleados->destroy($empleado->idEmpleado);
    	return redirect()->route('empleados.index');
    }

    public function update($id)
    {
        $cursos = Curso::find($id);
        $cursos->fill($request->all())->save();        
        $request->session()->flash('alert-success', 'Empleado Actualizado');
        return redirect()->route('empleados.index'); 
    }
}
