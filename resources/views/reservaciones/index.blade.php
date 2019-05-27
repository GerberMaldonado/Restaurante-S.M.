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
		          <a class="nav-link" href="">Lista de Reservaciones</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('reservaciones.create') }}">Nuevo Reservacion</a>
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
							<td>Fecha</td>											
							<td>Hora</td>
							<td>Mesa</td>							
              				<td>Establecimiento</td>
							<td>Opciones</td>
						</thead>		
						@foreach($reservaciones as $e)		
						<tr>
							<td class="td-actions text-left">{{$e->idReservacion}}</td>
							<td class="td-actions text-left">{{ $e->Clientes_nombreCliente }}</td>
							<td class="td-actions text-left">{{$e->fechaReservacion}}</td>		
							<td class="td-actions text-left">{{$e->horaReservacion}}</td>
							<td class="td-actions text-left">{{$e->Mesas_idMesa}}</td>
							<td class="td-actions text-left">{{$e->Establecimientos_idEstablecimiento}}</td>      									
							<td class="td-actions text-center">
								<form method="post" action="{{ route('reservaciones.destroy', $e->idReservacion) }}">						
									<a href="{{ route('reservaciones.show', $e->idReservacion) }}" class="btn btn-info btn-sm" title="Ver">
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