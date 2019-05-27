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
		          <a class="nav-link" href="">Lista de Pedidos</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('pedidos.create') }}">Nuevo Pedido</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="datatable_table" class="table table-condensed table-hover">
						<thead>
							<td>No.</td>	
							<td>Cliente</td>
							<td>Teléfono Cliente</td>											
							<td>Fecha</td>
							<td>Hora</td>							
              				<td>Dirección</td>																	
              				<td>Coordenadas</td>	
							<td>Opciones</td>
						</thead>		
						@foreach($pedidos as $e)		
						<tr>
							<td class="td-actions text-left">{{$e->idPedido_a_Domicilio}}</td>
							<td class="td-actions text-left">{{ $e->Clientes_nombreCliente }}</td>
							<td class="td-actions text-left">{{$e->telefonoCliente}}</td>		
							<td class="td-actions text-left">{{$e->fechaPedido}}</td>
							<td class="td-actions text-left">{{$e->horarioSalida}}</td>
							<td class="td-actions text-left">{{$e->ubicacionCliente}}</td>      				
							<td class="td-actions text-left">{{$e->coordenadasCliente}}</td>      									
							<td class="td-actions text-center">
								<form method="post" action="{{ route('pedidos.destroy', $e->idPedido_a_Domicilio) }}">						
									<a href="{{ route('pedidos.show', $e->idPedido_a_Domicilio) }}" class="btn btn-info btn-sm" title="Ver">
										<i class="material-icons">visibility</i>Ver
									</a>													

									{{ csrf_field() }}
                  					{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-danger btn-sm" title="Eliminar">
										<i class="material-icons">delete</i>Eliminar
									</button>								
								</form>
							</td>
						</tr>	
						@endforeach						
					</table>
				</div>
            </div>		
        </div>
	</div>
</div>
@endsection