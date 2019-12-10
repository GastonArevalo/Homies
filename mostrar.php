<?php
    echo $_POST["tomate"];
    for($i = 0;$i<$cantidad;$i++){
    echo "HAMBURGUESA ".$i;
    $medida = $_POST["medida$i"]; //Toma el valor de la medida
    //es la manera de representar un select por medio de recorrer un string;
    for ($i=0;$i<count($medida);$i++){     
        echo "<br> medida" . ": " . $medida[$i]."<br><br>";    
    }
    
    echo "Toppings de la Hamburguesa: <br><br>";
    
    echo $_POST["lechuga$i"]." ";
    echo $_POST["tomate$i"]." ";
    echo $_POST["cebollam$i"]."<br>";
    echo $_POST["cebollac$i"]." ";
    echo $_POST["chiles$i"]." ";
    echo $_POST["bacon$i"]."<br>";
    echo $_POST["champ$i"]." ";
    echo $_POST["salsa$i"]." ";
    echo $_POST["pan$i"]."<br>";
}
 ?>