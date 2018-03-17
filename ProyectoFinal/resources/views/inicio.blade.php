@extends('master')

@section('contenido')
<section>
	<h3>Citas Medicas</h3>
</section>

	<div class="container">
	<form action="{{url('datos')}}" method="POST" class="form-control">

	<div class="form-group">
			<label for="nombre" class="control-label col-md-4">Ingrese su nombre:</label>
			<div class="col-md-10">		
				<input type="text" class="form-control" placeholder="Nombre" maxlength="30" id="nombre" name="nombre">
			</div>
		</div>

		<div class="form-group">
			<label for="apellido" class="control-label col-md-4">Ingrese su apellido:</label>
			<div class="col-md-10">		
				<input type="text" class="form-control" placeholder="Apellido" maxlength="30" id="apellido" name="apellido">
			</div>
		</div>

		<div class="form-group">
			<label for="tipoDocumento" class="control-label col-md-4">Seleccione su tipo de documento:</label>
			
			<div class="col-md-10">
				<select name="tipoDocumento" id="tipoDocumento" class="form-control">

					<option value="Ti">Tarjeta de identidad</option>
					<option value="Cc">Cédula de ciudadania</option>
					<option value="Ce">Cédula de extranjería</option>
					<option value="DocNa">Documento nacional de indentificación</option>
						
				</select>	
			</div>	
		</div>
			
		<div class="form-group">
			<label for="numId" class="control-label col-md-4">Ingrese su numero de Identificacion:</label>
			<div class="col-md-10">		
				<input type="number" class="form-control" placeholder="N Identificación" min="1" max="999999999999" id="numId" name="numId">
			</div>
		</div>

		<div class="form-group">
			<label for="ciudad" class="control-label col-md-4">Seleccione su ciudad de residencia:</label>
		<div class="col-md-10">	
			<select name="ciudad" id="ciudad" class="form-control">
				<option value="bogota">Bogóta</option>
				<option value="cali">Cali</option>
				<option value="medellin">Medellin</option>
				<option value="pereira">Pereira</option>
				<option value="cartagena">Cartagena</option>
				<option value="santa marta">Santa Marta</option>
				<option value="barranquilla">Barranquilla</option>
				<option value="cucuta">Cucuta</option>
				<option value="quibdo">Quibdo</option>
				<option value="tunja">Tunja</option>
				<option value="leticia">Leticia</option>
				<option value="funza">Funza</option>
				<option value="madrid">Madrid</option>
				<option value="mosquera">Mosquera</option>
				<option value="faca">Faca</option>
				<option value="chia">Chia</option>
				<option value="soacha">Soacha</option>

			</select>
		</div>	
		</div>

		<div class="form-group">
			<label for="edad" class="control-label col-md-4">Escriba su edad:</label>
			<div class="col-md-10">	
				<input type="number" class="form-control" placeholder="Edad" min="0" max="250" id="edad" name="edad">
			</div>
		</div>	

		<div class="form-group">
			<label for="turno" class="control-label col-md-4">Seleccione su tipo de turno:</label>
			<div class="col-md-10">	
				<select name="turno" id="turno" class="form-control">

					<option value="consignacion">Consignación</option>
					<option value="retiro">Retiro</option>
					<option value="consulta administrativa">Consulta Administrativa</option>

				</select>
			</div>	
		</div>

		<div class="form-group">
			<label for="prioridad" class="control-label col-md-4">Seleccione su nivel de prioridad:</label>
		<div class="col-md-10">	
			<select name="prioridad" id="prioridad" class="form-control">

				<option value="embarazo">Mujer Embarazada</option>
				<option value="mayores">Adultos Mayores</option>
				<option value="discapacitados">Persona con discapacidad</option> 	
				<option value="mujer">Mujer</option>
				<option value="hombre">Hombre</option>

			</select>
		</div>	
		</div>

		<div class="form-group col-md-2">
			<button type="sumbit" class="btn btn-primary">Enviar datos</button>
		</div>
	</form>
	</div>
    
    <?php if(Session::has('matriz')):?> 
        <h1>PHP TRADICIONAL</h1>           
        <?php foreach (Session::get('matriz') as $array):?>  
            <ul> 
            <?php foreach ($array as $indice => $informacion):?> 
                <li>{{$indice}} -- {{$informacion}}</li>         
          <?php endforeach ?>                   
            <a href="Atender">Atender</a>
            </ul>          
        <?php endforeach ?>
        
    <?php endif ?>      

<footer>
			<div class="container"><!--Container fluid- Abarca toda la pantalla -->
				<h4>Julián Vásquez Corredor - Estudiante de ingeniería de sistemas - Universidad de Cundinamarca</h4>
			</div>
</footer>

@stop	
