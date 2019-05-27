<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'empleados';
    protected $primary_key = 'idEmpleado';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombreEmpleado', 
        'apellidoEmpleado', 
        'direccionEmpleado',
        'cargoEmpleado',
        'telefonoEmpleado',
        'e_mailEmpleado',
        'passwordEmpleado',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'passwordEmpleado', 'remember_token',
    ];
}
