<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Especificar</title>
</head>
<body>
<div class="container">
<!--se utiliza el valor de canidad para imprimir por pantalla un formulario por hamburguesa-->
<form action="mostrar.php" method="POST">
<?$cantidad = $_POST["cantidad"];?>
<?for($i=0;$i<$cantidad;$i++){?>
<h1 class="h1">Por favor especifique el pedido: </h1><br>
 <input type="hidden" name="cantidad" value="<?echo $cantidad;?>">

 <div class="input-group mb-3">
 <div div class="input-group-prepend">
 <label class="input-group-text" for="inputGroupSelect01">TAMAÑO: </label>
 </div>
 <select name="medida[]"  class="custom-select" id="inputGroupSelect01">
 <option value="s">S</option>
 <option value="m">M</option>
 <option value="l">L</option>
 <option value="xl">XL</option>
 </select>
 </div>
 <br>
 <!--se almacenan los datos del formulario en arrays -->
 <label for="toppings">Toppings:</label> <br>
 Lechuga                 <input type="checkbox" name="lechuga[]" value="lechuga">
 Tomate                  <input type="checkbox" name="tomate[]" value="tomate">
 Cebolla Morada          <input type="checkbox" name="cebollam[]" value="cebollam"><br>
 Cebolla Caramelizada    <input type="checkbox" name="cebollac[]" value="cebollac">
 Chiles                  <input type="checkbox" name="chiles[]" value="chiles">
 Bacon                   <input type="checkbox" name="bacon[]" value="bacon"><br>
 Champiñones             <input type="checkbox" name="champ[]" value="champ">
 Salsa Homies            <input type="checkbox" name="salsa[]" value="salsa">
 Pan Homies              <input type="checkbox" name="pan[]" value="pan"><hr>
 <?}?>
 <input type="submit" class="btn btn-danger" value="Enviar">
 </form>
 </div>
 <br><br>
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>
</html>