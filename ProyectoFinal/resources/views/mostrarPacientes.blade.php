<html>
<head>
	<title>Mostrar Pacientes</title>
</head>
<body>
	<?php if(Session::has('matriz')):?> 
                  
        <?php foreach (Session::get('matriz') as $array):?>  
            <ul> 
            <?php foreach ($array as $indice => $informacion):?> 
                <li>{{$indice}} -- {{$informacion}}</li>         
          <?php endforeach ?>                   
            <a href="Atender">Atender</a>
            </ul>          
        <?php endforeach ?>
        
    <?php endif ?>      
</body>
</html>