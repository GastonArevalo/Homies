<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ComboHamburguesa</title>
    
</head>
<body>
<div class="container">
<h1 class="display-3">Elige Las Hamburguesas para pedir</h1>
<form action="procesar.php" method="POST">
<p>Elija la cantidad de Hamburguesas que se van a pedir: </p>
<input type="number" class="col-2 col-form-label" name="cantidad">
<button type="submit" class="btn btn-danger">Enviar</button>

</form>
</div>
<!--Se envia por el metodo POST el valor de las cantidad de hamburguesas que elija el usuario-->

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    
</body>
</html>