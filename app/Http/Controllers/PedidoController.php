<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Pedidos;
class PedidoController extends Controller
{
    protected $pedidos;

	public function __construct(Pedidos $pedidos){
		$this->pedidos = $pedidos;
	}

    public function index(){
    	$pedidos = $this->pedidos->all();
		return view('pedidos.index', compact('pedidos'));
    }

    public function show($id){
    	$pedido = $this->pedidos->find($id);
		return view('pedidos.show', compact('pedido'));
    }

    public function store(){
        $this->pedidos->create();
        return redirect()->route('pedidos.index');
    }

    public function create(){
        return view('pedidos.create');
    }

    public function destroy($id){
        $pedido = $this->pedidos->find($id);
        $this->pedidos->destroy($pedido->idPedido_a_Domicilio);
        return redirect()->route('pedidos.index');
    }
}
