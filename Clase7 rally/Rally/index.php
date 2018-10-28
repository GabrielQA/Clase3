
<?php
include'GetData.php';
$x = new GetData();
$result=$x->find();
$combobit="";
while ($row = $result->fetch_array(1)){
	    $combobit .=" <option value='".$row['id']."'>".$row['nombre_carrera']."</option>"; 
	}
?>

<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<title>Formulario</title>
</head>
<body>
	<div class="container">
        <h3>Formulario </h3>
        <form  action="estudiante.php" method="POST">
            <div class="form-group"  >
            <label for="nombre">Escriba su nombre</label>
            <input type="text" class="form-control" name="user_name" id="nombre" placeholder="">
            </div>  
            <div class="form-group">
            <label for="ape">Escriba sus apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="ape" placeholder="">
            </div>
            <div class="form-group">
            <label for="ced">Escriba su cédula</label>
            <input type="text" class="form-control" name="ced" id="ced" placeholder="">
            </div>
            <div class="form-group">
            <label>Carreras</label>
            <select NAME="carrera">
            <?php
                echo $combobit;
            ?>
            </select>
            </div>
            
            <input type="submit" value="Guardar">
        </form>
    </div>


</body>
</html>