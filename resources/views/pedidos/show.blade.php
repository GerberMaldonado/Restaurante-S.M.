@extends('layouts.app')
@section('title', 'Pedidos')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('pedidos.index') }}">Lista de Pedidos</a>
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
        <h3>Datos del Pedido</h3>
        </center>
        <div class="form-row"> {{--Primera Fila --}} 

          <div class="col">{{--Primera Columna --}}    
            <label>ID:</label>
          </div> {{--Fin Columna--}} 

          <div class="col"> {{--Segunda Columna --}}     
            <p>{{$pedido->idPedido_a_Domicilio}}</p>                 
          </div> {{--Fin Columna--}}
    
          <div class="col">{{--Primera Columna --}}
            <label>Cliente:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}                   
            <p>{{$pedido->Clientes_nombreCliente}}</p>        
          </div> {{--Fin Columna--}}

          <div class="col">{{--Primera Columna --}}
            <label>Teléfono Cliente:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            <p>{{$pedido->telefonoCliente}}</p>
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Segunda Fila --}} 
          <div class="col">{{--Primera Columna --}}
            <label>Fecha:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            <p>{{ $pedido->fechaPedido }}</p>         
          </div> {{--Fin Columna--}}    

			<div class="col">{{--Primera Columna --}}
            <label>Hora:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
          	<p>{{ $pedido->horarioSalida }}</p>
          </div> {{--Fin Columna--}}  
   
           <div class="col">{{--Primera Columna --}}
            <label>Dirección:</label>
          </div> {{--Fin Columna--}}
          
          <div class="col"> {{--Segunda Columna --}}			
                <p>{{ $pedido->ubicacionCliente }}</p>
          </div> {{--Fin Columna--}}		 
        </div>

        <div class="form-row"> {{--Tercera Fila --}}
          

          <div class="col-2">{{--Primera Columna --}}
            <label>Coordenadas:</label>
          </div> {{--Fin Columna--}}
          
          <div class="col-2"> {{--Segunda Columna --}}			
                <p>{{ $pedido->coordenadasCliente }}</p>
          </div> {{--Fin Columna--}}  
        </div>

      </div>
    </div>
  </div>  
</div>
@endsection