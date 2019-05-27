<?php 

namespace App\Repositories;

class Empleados extends GuzzleHttpRequest
{

    public function all(){
		return $this->get('metodos_lectura/read_empleado.php');
    }

    public function find($id){
    	$empleados = $this->get('metodos_lectura/read_empleado.php');
    	$indice = array_search($id, array_column($empleados, 'idEmpleado'));
    	$empleado = $empleados[$indice];
    	return $empleado;
    }

    public function create(){
    	return $this->postEmpleado('metodos_insertar/create_empleado.php');
    }

    public function update($id){
    	return $this->put('metodos_editar_modificar/update_empleado.php');
    }

    public function destroy($id){
    	return $this->delete('metodos_eliminar/delete_empleado.php', $id);
    }

}
