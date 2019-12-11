<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ComboHamburguesa</title>
</head>
<body>
<h1>Elige Las Hamburguesas para pedir</h1>
<!--Se envia por el metodo POST el valor de las cantidad de hamburguesas que elija el usuario-->
<form action="procesar.php" method="POST">
<p>Elija la cantidad de Hamburguesas que se van a pedir: </p>
<input type="number" name="cantidad">
<input type="submit" name="Enviar" value="ENVIAR">

</form>
    
</body>
</html>