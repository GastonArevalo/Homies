<?php
  
  
    echo "<h1>Pedido: </h1><br><br>";
    $medida = $_POST["medida$i"]; //Toma el valor de la medida
    //es la manera de representar un select por medio de recorrer un string;
    foreach($medida as $medida){     
        echo "<br> medida" . ": " . $medida."<br><br>";
        echo "Toppings de la Hamburguesa: <br><br>";
    
        $lechuga = $_POST['lechuga'];
        if (isset($_POST['lechuga'])){
            
            foreach($lechuga as $lechuga){     
                echo "<br>"."+ ".$lechuga."<br><br>";
            }
        }
        $tomate = $_POST['tomate'];
        if (isset($_POST['tomate'])){
            
            foreach($tomate as $tomate){     
                echo "<br>"."+ ".$tomate."<br><br>";
            }
        }
        $cebollam = $_POST['cebollam'];
        if (isset($_POST['cebollam'])){
            
            foreach($cebollam as $cebollam){     
                echo "<br>"."+ ".$cebollam."<br><br>";
            }
        }
        $cebollac = $_POST['cebollac'];
        if (isset($_POST['cebollac'])){
            
            foreach($cebolac as $cebollac){     
                echo "<br>"."+ ".$cebollac."<br><br>";
            }
        }
        $chiles = $_POST['chiles'];
        if (isset($_POST['chiles'])){
            
            foreach($chiles as $chiles){     
                echo "<br>"."+ ".$chiles."<br><br>";
            }
        }
        $bacon = $_POST['bacon'];
        if (isset($_POST['bacon'])){
            
            foreach($bacon as $bacon){     
                echo "<br>"."+ ".$bacon."<br><br>";
            }
        }
        $champ = $_POST['champ'];
        if (isset($_POST['champ'])){
            
            foreach($champ as $champ){     
                echo "<br>"."+ ".$champ."<br><br>";
            }
        }
        $salsa = $_POST['salsa'];
        if (isset($_POST['salsa'])){
            
            foreach($salsa as $salsa){     
                echo "<br>"."+ ".$salsa."<br><br>";
            }
        }
        $pan = $_POST['pan'];
        if (isset($_POST['pan'])){
            
            foreach($pan as $pan){     
                echo "<br>"."+ ".$pan."<br><br>";
            }
        }    
    }
    


 ?>