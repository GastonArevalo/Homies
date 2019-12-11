<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seleccion</title>
</head>
<body>

    <?php $cantidad = $_POST["cantidad"]; ?>
    <?php echo $_POST["cantidad"];?>
    <h1>Tu pedido: </h1><br><br>
    <?for($i=0;$i<$_POST["cantidad"];$i++){?>
    <h2>Hamburguesa </h2> <h2><?echo $cantidad;?></h2><br><br>
    <??>



</body>
</html>