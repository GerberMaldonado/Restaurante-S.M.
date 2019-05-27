<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Reservaciones;

class ReservacionController extends Controller
{
    protected $reservaciones;

	public function __construct(Reservaciones $reservaciones){
		$this->reservaciones = $reservaciones;
	}

    public function index(){
    	$reservaciones = $this->reservaciones->all();
		return view('reservaciones.index', compact('reservaciones'));
    }

    public function show($id){
    	$reservacion = $this->reservaciones->find($id);
		return view('reservaciones.show', compact('reservacion'));
    }

    public function store(){
        $this->reservaciones->create();
        return redirect()->route('reservaciones.index');
    }

    public function create(){
        return view('reservaciones.create');
    }

    public function destroy($id){
        $reservacion = $this->reservaciones->find($id);
        $this->reservaciones->destroy($reservacion->idReservacion);
        return redirect()->route('reservaciones.index');
    }
}
