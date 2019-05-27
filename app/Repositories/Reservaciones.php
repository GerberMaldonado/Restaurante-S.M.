<?php 

namespace App\Repositories;

class Reservaciones extends GuzzleHttpRequest
{

    public function all(){
		return $this->get('metodos_lectura/read_reservaciones.php');
    }

    public function find($id){
    	$reservaciones = $this->get('metodos_lectura/read_reservaciones.php');
    	$indice = array_search($id, array_column($reservaciones, 'idReservacion'));
    	$reservacion = $reservaciones[$indice];
    	return $reservacion;
    }

    public function create(){
        return $this->postPedido('metodos_insertar/create_reservacion.php');
    }

    public function update($id){
        return $this->put('metodos_editar_modificar/update_reservacion.php');
    }

    public function destroy($id){
        return $this->deleteReservacion('metodos_eliminar/delete_reservacion.php', $id);
    }

}
