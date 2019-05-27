<?php 

namespace App\Repositories;

use GuzzleHttp\Client;
use Illuminate\Contracts\Session\Session;

class GuzzleHttpRequest
{
	protected $client;

	public function __construct(Client $client){
		$this->client =  $client;

	}

    protected function get($url){
    	$response = $this->client->request('GET', $url);
		return json_decode($response->getBody()->getContents());
    }

    public function postEmpleado($url){
    	$data = request();

    	$response = $this->client->post($url, array(
        	'headers'=>array('Content-Type'=>'application/json'),
            'json'=>array('nombreEmpleado' => ($data->nombre),
		    'apellidosEmpleado' => ($data->apellido),
		    'direccionEmpleado' => ($data->direccion),
		    'cargoEmpleado' => ($data->cargo),
		    'telefonoEmpleado' => ($data->telefono),
		    'e_mailEmpleado' => ($data->email),
		    'passwordEmpleado' => ($data->password))
            )
    	);
    }

    public function postPedido($url){
    	$data = request();

    	$response = $this->client->post($url, array(
        	'headers'=>array('Content-Type'=>'application/json'),
            'json'=>array('idPedido_a_Domicilio' => ($data->nombre),
		    'apellidosEmpleado' => ($data->apellido),
		    'direccionEmpleado' => ($data->direccion),
		    'cargoEmpleado' => ($data->cargo),
		    'telefonoEmpleado' => ($data->telefono),
		    'e_mailEmpleado' => ($data->email),
		    'passwordEmpleado' => ($data->password))
            )
    	);
    }

    public function delete($url, $id){
    	$response = $this->client->delete($url, array(
        	'headers'=>array('Content-Type'=>'application/json'),
            'json'=>array('idEmpleado' => $id)
            )
    	);
    }

    public function deletePedido($url, $id){
        $response = $this->client->delete($url, array(
            'headers'=>array('Content-Type'=>'application/json'),
            'json'=>array('idPedido_a_Domicilio' => $id)
            )
        );
    }

    public function deleteReservacion($url, $id){
        $response = $this->client->delete($url, array(
            'headers'=>array('Content-Type'=>'application/json'),
            'json'=>array('idReservacion' => $id)
            )
        );
    }

    public function put($url){
		$response = $this->client->request('PUT', $url, [
			
		]);
		return json_decode($response->getBody()->getContents());
    }
}
