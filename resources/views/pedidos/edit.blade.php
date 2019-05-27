@extends('layouts.app')
@section('title', 'Editar Empleado')
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
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('empleados.create') }}">Nuevo Empleado</a>
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
					<form method="post" action="{{ route('empleados.update', $empleado->idEmpleado) }}">
						@method('PUT')
						@csrf
						<h3>Actualizar los Datos</h3>		
						<div class="form-row">  						
							<div class="col">
								<div class="form-group label-floating">								
									<label for="nombre">Nombre</label>
									<input type="text" class="form-control" value='{{$empleado->nombreEmpleado}}' name="nombre" input id="nombre">
									@if ($errors->has('nombre'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('nombre') }}</strong>
										</span>
									@endif					
								</div>
							</div>
							<div class="col">
								<div class="form-group label-floating">								
									<label for="apellido">Apellidos</label>
									<input type="text" class="form-control" value='{{$empleado->apellidoEmpleado}}' name="apellido" input id="apellido">
									@if ($errors->has('apellido'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('apellido') }}</strong>
										</span>
									@endif					
								</div>
							</div>
						</div>{{-- Fin Contenedor --}}
							
						<div class="form-row">  
							<div class="col">  {{--Primera Columna --}}	
								<div class="form-group label-floating">								
									<label for="direccion">Dirección</label>
									<input type="text" class="form-control" value='{{$empleado->direccionEmpleado}}' name="direccion" input id="direccion">
									@if ($errors->has('direccion'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('direccion') }}</strong>
										</span>
									@endif					
								</div>
							</div>

							<div class="col">  {{--Primera Columna --}}	
								<div class="form-group label-floating">								
									<label for="cargo">Cargo</label>
									<input type="text" class="form-control" value='{{$empleado->cargoEmpleado}}' name="cargo" input id="cargo">
									@if ($errors->has('cargo'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('cargo') }}</strong>
										</span>
									@endif					
								</div>
							</div>
							
						</div>{{-- Fin Contenedor --}}

						<div class="form-row">  
							<div class="col">  {{--Primera Columna --}}								
								<div class="form-group label-floating">											
									<label for="telefono">Teléfono</label>
									<input type="text" class="form-control" value='{{$empleado->telefonoEmpleado}}' name="telefono" input id="telefono">
									@if ($errors->has('telefono'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('telefono') }}</strong>
										</span>
									@endif				
								</div>
							</div>
							<div class="col">  {{--Primera Columna --}}								
								<div class="form-group label-floating">											
									<label for="email">Correo</label>
									<input type="email" class="form-control" value='{{$empleado->e_mailEmpleado}}' name="email" input id="email">
									@if ($errors->has('email'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif				
								</div>
							</div>
							<div class="col">  {{--Primera Columna --}}								
								<div class="form-group label-floating">											
									<label for="password">Contraseña</label>
									<input type="password" class="form-control" value='{{$empleado->passwordEmpleado}}' name="password" input id="password">
									@if ($errors->has('password'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif				
								</div>
							</div>
						</div>{{-- Fin Contenedor --}}

						<div class="form-group">
							<button class="btn btn-primary" type="submit">Actualizar</button>
							<a href="{{ route('empleados.index') }}" class="btn btn-default" >Cancelar</a>				
						</div>
					</form>											
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
