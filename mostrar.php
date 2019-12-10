<?php


    echo "HAMBURGUESA 1";
    $medida = $_POST["medida"]; //Toma el valor de la medida
    //es la manera de representar un select por medio de recorrer un string;
    for ($i=0;$i<count($medida);$i++){     
        echo "<br> medida" . ": " . $medida[$i]."<br><br>";    
    }
    echo "Toppings de la Hamburguesa: <br><br>";
    
    echo $_POST["lechuga"]." ";
    echo $_POST["tomate"]." ";
    echo $_POST["cebollam"]."<br>";
    echo $_POST["cebollac"]." ";
    echo $_POST["chiles"]." ";
    echo $_POST["bacon"]."<br>";
    echo $_POST["champ"]." ";
    echo $_POST["salsa"]." ";
    echo $_POST["pan"]."<br>";
 ?>