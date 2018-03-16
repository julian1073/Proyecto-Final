@extends('master')

@section('contenido')

	<h3>Citas Medicas</h3>

	<form action="{{url('datos')}}" method="POST">

		{{csrf_field()}}

		<label for="nombre">Ingrese su nombre:</label>
		<input type="text" placeholder="Nombre" maxlength="30" id="nombre" name="nombre">
		<br>

		<label for="apellido">Ingrese su apellido:</label>
		<input type="text" placeholder="Apellido" maxlength="30" id="apellido" name="apellido">
		<br>

		<label for="tipoDocumento">Seleccione su tipo de documento:</label>
		<select name="tipoDocumento" id="tipoDocumento">

			<option value="Ti">Tarjeta de identidad</option>
			<option value="Cc">Cédula de ciudadania</option>
			<option value="Ce">Cédula de extranjería</option>
			<option value="DocNa">Documento nacional de indentificación</option>
			
		</select>
		<br>

		<label for="numId">Ingrese su numero de identificación:</label>
		<input type="number" placeholder="N Identificación" min="1" max="999999999999" id="numId" name="numId">
		<br>

		<label for="ciudad">Seleccione su ciudad de residencia:</label>
		<select name="ciudad" id="ciudad">

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
		<br>

		<label for="edad">Escriba su edad: </label>
		<input type="number" placeholder="Edad" min="0" max="250" id="edad" name="edad">
		<br>

		<label for="turno">Seleccione su tipo de turno:</label>
		<select name="turno" id="turno">

			<option value="consignacion">Consignación</option>
			<option value="retiro">Retiro</option>
			<option value="consulta administrativa">Consulta Administrativa</option>

		</select>
		<br>

		<label for="prioridad">Seleccione su nivel de prioridad:</label>
		<select name="prioridad" id="prioridad">

			<option value="embarazo">Mujer Embarazada</option>
			<option value="mayores">Adultos Mayores</option>
			<option value="discapacitados">Persona con discapacidad</option> 	
			<option value="mujer">Mujer</option>
			<option value="hombre">Hombre</option>

		</select>
		<br>
		<br>

		<button type="sumbit">Enviar Datos</button>

	</form>

    <?php if(Session::has('matriz')):?>
        <h1>PHP TRADICIONAL</h1>        	
        <?php foreach (Session::get('matriz') as $array):?> 
            <ul>
            <?php foreach ($array as $indice => $informacion):?>
                <li>{{$indice}} -- {{$informacion}}</li>        
        	<?php endforeach ?>                  
            </ul>         
        <?php endforeach ?>   
    <?php endif ?>             
@stop	