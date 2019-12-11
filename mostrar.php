<?php
    echo "<h1>Pedido: </h1><br><br>";
    $medida = $_POST["medida$i"]; //Toma el valor de la medida
    //es la manera de representar un select por medio de recorrer un string;
    foreach($medida as $medida){     
        echo "<br> medida" . ": " . $medida."<br><br>";
        echo "Toppings de la Hamburguesa: <br><br>";
    
    echo $_POST["lechuga[]"]." ";
    echo $_POST["tomate[]"]." ";
    echo $_POST["cebollam[]"]."<br>";
    echo $_POST["cebollac[]"]." ";
    echo $_POST["chiles[]"]." ";
    echo $_POST["bacon[]"]."<br>";
    echo $_POST["champ[]"]." ";
    echo $_POST["salsa[]"]." ";
    echo $_POST["pan[]"]."<br>";    
    }
    


 ?>