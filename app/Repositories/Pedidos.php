<?php 

namespace App\Repositories;

class Pedidos extends GuzzleHttpRequest
{

    public function all(){
		return $this->get('metodos_lectura/read_pedidos_a_domicilio.php');
    }

    public function find($id){
    	$pedidos = $this->get('metodos_lectura/read_pedidos_a_domicilio.php');
    	$indice = array_search($id, array_column($pedidos, 'idPedido_a_Domicilio'));
    	$pedido = $pedidos[$indice];
    	return $pedido;
    }

    public function create(){
        return $this->postPedidos('metodos_insertar/create_pedido_a_domicilio.php');
    }

    public function update($id){
        return $this->put('metodos_editar_modificar/update_pedido_a_domicilio.php');
    }

    public function destroy($id){
        return $this->deletePedido('metodos_eliminar/delete_pedido_a_domicilio.php', $id);
    }

}
