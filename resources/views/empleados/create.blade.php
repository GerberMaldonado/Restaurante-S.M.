@extends('layouts.app')
@section('title', 'Crear Empleado')
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
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">	
		<div class="col-md-6">
			<div class="card">
				<div class="card-body text-center">								
					<form method="POST" action="{{ route('empleados.store') }}">
						{{ csrf_field() }}
						<h3>Ingrese los Datos</h3>		
						<div class="form-row">  
							<div class="col">  {{--Primera Columna --}}						
								<div class="form-group label-floating">								
									<label for="nombre">Nombre</label>
									<input type="text" class="form-control" name="nombre" input id="nombre" required>
								</div>
							</div>						
							<div class="col">
								<div class="form-group label-floating">								
									<label for="apellido">Apellido</label>
									<input type="text" class="form-control" name="apellido" input id="apellido" required>
								</div>
							</div>
						</div>{{-- Fin Contenedor --}}
							
						<div class="form-row">  
							<div class="col">  {{--Primera Columna --}}	
								<div class="form-group label-floating">								
									<label for="direccion">Dirección</label>
									<input type="text" class="form-control" name="direccion" input id="descripcion" required>
								</div>
							</div>
							
							<div class="col">  {{--Primera Columna --}}	
								<div class="form-group label-floating">								
									<label for="cargo">Cargo</label>
									<input type="text" class="form-control" name="cargo" input id="descripcion" required>
								</div>
							</div>
						</div>{{-- Fin Contenedor --}}

						<div class="form-row">  
							<div class="col">  {{--Primera Columna --}}	
								<div class="form-group label-floating">								
									<label for="email">Correo Electrónico</label>
									<input type="email" class="form-control" name="email" input id="descripcion" required>
								</div>
							</div>

							<div class="col">  {{--Primera Columna --}}	
								<div class="form-group label-floating">								
									<label for="password">Contraseña</label>
									<input type="password" class="form-control" name="password" input id="descripcion" required>
								</div>
							</div>
						</div>{{-- Fin Contenedor --}}

						<div class="form-row">
							<div class="col">  {{--Primera Columna --}}	
								<div class="form-group label-floating">								
									<label for="telefono">Teléfono</label>
									<input type="text" class="form-control" name="telefono" input id="descripcion">
								</div>
							</div>
						</div>

						<div class="form-group">
							<button class="btn btn-primary" type="submit">Guardar</button>
							<a href="{{ route('empleados.index') }}" class="btn btn-default" >Cancelar</a>				
						</div>
					</form>											
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
