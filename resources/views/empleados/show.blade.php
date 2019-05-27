@extends('layouts.app')
@section('title', 'Empleado')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('empleados.index') }}">Lista de Empleados</a>
		        </li>
		        <!-- <li class="nav-item">
		          <a class="nav-link" href="{{ route('empleados.create') }}">Nuevo Curso</a>
		        </li> -->
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>

<div class="row justify-content-center">
  <div class="col-md-8">
		<div class="card">    
			<div class="card-body text-left">        
        <center>      
        <h3>Datos del Empleado</h3>
        </center>
        <div class="form-row"> {{--Primera Fila --}} 

          <div class="col">{{--Primera Columna --}}    
            <label>ID:</label>
          </div> {{--Fin Columna--}} 

          <div class="col"> {{--Segunda Columna --}}     
            <p>{{$empleado->idEmpleado}}</p>                 
          </div> {{--Fin Columna--}}
    
          <div class="col">{{--Primera Columna --}}
            <label>Nombres:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}                   
            <p>{{$empleado->nombreEmpleado}}</p>        
          </div> {{--Fin Columna--}}

          <div class="col">{{--Primera Columna --}}
            <label>Apellidos:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            <p>{{$empleado->apellidosEmpleado}}</p>
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Segunda Fila --}} 
          <div class="col">{{--Primera Columna --}}
            <label>Dirección:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            <p>{{ $empleado->direccionEmpleado }}</p>         
          </div> {{--Fin Columna--}}    

			<div class="col">{{--Primera Columna --}}
            <label>Cargo:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
          	<p>{{ $empleado->cargoEmpleado }}</p>
          </div> {{--Fin Columna--}}  
   
           <div class="col">{{--Primera Columna --}}
            <label>Teléfono:</label>
          </div> {{--Fin Columna--}}
          
          <div class="col"> {{--Segunda Columna --}}			
                <p>{{ $empleado->telefonoEmpleado }}</p>
          </div> {{--Fin Columna--}}		 
        </div>

        <div class="form-row"> {{--Tercera Fila --}}
          

          <div class="col-2">{{--Primera Columna --}}
            <label>Correo:</label>
          </div> {{--Fin Columna--}}
          
          <div class="col-2"> {{--Segunda Columna --}}			
                <p>{{ $empleado->e_mailEmpleado }}</p>
          </div> {{--Fin Columna--}}  
        </div>

      </div>
    </div>
  </div>  
</div>
@endsection