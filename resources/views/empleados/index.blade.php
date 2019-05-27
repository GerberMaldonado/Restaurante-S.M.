@extends('layouts.app')
@section('title', 'Empleados')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" href="">Lista de Empleados</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('empleados.create') }}">Nuevo Empleado</a>
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
							<td>Nombre</td>
							<td>Direccion</td>											
							<td>Cargo</td>
							<td>Teléfono</td>							
              				<td>Correo</td>																	
							<td>Opciones</td>
						</thead>		
						@foreach($empleados as $e)		
						<tr>
							<td class="td-actions text-left">{{$e->idEmpleado}}</td>
							<td class="td-actions text-left">{{ $e->nombreEmpleado }} {{ $e->apellidosEmpleado }}</td>
							<td class="td-actions text-left">{{$e->direccionEmpleado}}</td>												
							<td class="td-actions text-left">{{$e->cargoEmpleado}}</td>
							<td class="td-actions text-left">{{$e->telefonoEmpleado}}</td>
							<td class="td-actions text-left">{{$e->e_mailEmpleado}}</td>      									
							<td class="td-actions text-center">
								<form method="post" action="{{ route('empleados.destroy', $e->idEmpleado) }}">						
									<a href="{{ route('empleados.show', $e->idEmpleado) }}" class="btn btn-info btn-sm" title="Ver">
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