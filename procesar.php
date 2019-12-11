<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="mostrar.php" method="POST">
<?$cantidad = $_POST["cantidad"];?>
<?for($i=0;$i<$cantidad;$i++){?>
<p>Por favor especifique el pedido</p><br><br>
 <input type="hidden" name="cantidad" value="$cantidad" >

 TAMAÑO:
 <select name="medida[]" id="">
 <option value="s">S</option>
 <option value="m">M</option>
 <option value="l">L</option>
 <option value="xl">XL</option>
 </select>
 <br>
 <label for="toppings">Toppings</label>
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
 <input type="submit" value="Enviar">
 </form>
 
 <br><br>
</body>
</html>