<?php

namespace App\Http\Controllers\Auth;

use GuzzleHttp\Client;
use App\Repositories\Empleados;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest', ['only' => 'formLogin']);
    }

    public function login(){
        $credenciales = $this->validate(request(), [
            'email'     =>  'required|email|string',
            'password'  =>  'required|string'
        ]);
        $empleado = $this->findByEmail(request(['email']));
        if((!empty($empleado->e_mailEmpleado)) && (!empty($empleado->passwordEmpleado))){
            if(($empleado->e_mailEmpleado == request()->email) && ($empleado->passwordEmpleado == request()->password)){
                //return 'Datos corretos';
                return redirect()->action('UserController@index');
            }else{
                return back()
                ->withErrors(['email' => trans('auth.failed')])
                ->withInput(request(['email']));
            }
        }
    }

    public function formLogin(){
        return view('auth.login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function findByEmail($email){
        $client = new Client([
            'base_uri' => 'http://d5kp4ul.shekalug.org/',
        ]);
        $response = $client->request('GET', 'metodos_lectura/read_empleado.php');
        $empleados = $response->getBody()->getContents();
        $empleados = json_decode($empleados);
        $indice = array_search($email, array_column($empleados, 'e_mailEmpleado'));
        $empleado = $empleados[$indice];
        return $empleado;
    }
}
