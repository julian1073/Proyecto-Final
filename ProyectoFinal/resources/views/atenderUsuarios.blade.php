<html>
<head>
	<title>Atender usuarios</title>
</head>
<body>

	<?php if(Session::has('matriz')):?> 
        <h1>PHP TRADICIONAL</h1>           
        <?php foreach (Session::get('matriz') as $array):?>  
           
        <ul> 
            <?php foreach ($array as $indice => $informacion):?> 
                <li>{{$indice}} -- {{$informacion}}</li>         
        	<?php endforeach ?>
        </ul>
           
           <?php                     
            Session::forget('matriz');
            ?>
        <?php endforeach ?>
        
    <?php endif ?>   

    <a href="inicio">Regresar</a>   

</body>
</html>