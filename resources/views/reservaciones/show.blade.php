@extends('layouts.app')
@section('title', 'Reservaciones')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('reservaciones.index') }}">Lista de Reservaciones</a>
		        </li>
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
        <h3>Datos de la Reservacion</h3>
        </center>
        <div class="form-row"> {{--Primera Fila --}} 

          <div class="col">{{--Primera Columna --}}    
            <label>ID:</label>
          </div> {{--Fin Columna--}} 

          <div class="col"> {{--Segunda Columna --}}     
            <p>{{$reservacion->idReservacion}}</p>                 
          </div> {{--Fin Columna--}}
    
          <div class="col">{{--Primera Columna --}}
            <label>Cliente:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}                   
            <p>{{$reservacion->Clientes_nombreCliente}}</p>        
          </div> {{--Fin Columna--}}

          <div class="col">{{--Primera Columna --}}
            <label>Fecha:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            <p>{{$reservacion->fechaReservacion}}</p>
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Segunda Fila --}} 
          <div class="col">{{--Primera Columna --}}
            <label>Hora:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            <p>{{ $reservacion->horaReservacion }}</p>         
          </div> {{--Fin Columna--}}    

			<div class="col">{{--Primera Columna --}}
            <label>ID Mesa:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
          	<p>{{ $reservacion->Mesas_idMesa }}</p>
          </div> {{--Fin Columna--}}  
   
           <div class="col">{{--Primera Columna --}}
            <label>ID Establecimiento:</label>
          </div> {{--Fin Columna--}}
          
          <div class="col"> {{--Segunda Columna --}}			
                <p>{{ $reservacion->Establecimientos_idEstablecimiento }}</p>
          </div> {{--Fin Columna--}}		 
        </div>


      </div>
    </div>
  </div>  
</div>
@endsection