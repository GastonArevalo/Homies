<?php
  
  
    echo "<h1>Pedido: </h1><br><br>";
    $medida = $_POST["medida$i"];
    
    //es la manera de representar un select por medio de recorrer un string;
    foreach($medida as $medida){

        echo "<br> medida" . ": " . $medida."<br><br>";
        echo "Toppings de la Hamburguesa: <br><br>";
    
    $tomate = $_POST["tomate$i"];
    $lechuga = $_POST["lechuga$i"];
    $cebollam = $_POST["cebollam$i"];
    $cebollac = $_POST["cebollac$i"];
    $chiles = $_POST["chiles$i"];
    $bacon = $_POST["bacon$i"];
    $champ = $_POST["champ$i"];
    $salsa = $_POST["salsa$i"];
    $pan = $_POST["pan$i"];

        if (isset($_POST["lechuga"])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($lechuga as $lechuga){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$lechuga."<br><br>";
            }
        }
        
        if (isset($_POST["tomate$i"])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($tomate as $tomate){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$tomate."<br><br>";
            }
        }
        
        if (isset($_POST["cebollam"])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($cebollam as $cebollam){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$cebollam."<br><br>";
            }
        }
        
        if (isset($_POST["cebollac"])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($cebolac as $cebollac){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$cebollac."<br><br>";
            }
        }
    
        if (isset($_POST["chiles"])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($chiles as $chiles){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$chiles."<br><br>";
            }
        }
  
        if (isset($_POST["bacon"])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($bacon as $bacon){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$bacon."<br><br>";
            }
        }
  
        if (isset($_POST["champ"])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($champ as $champ){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$champ."<br><br>";
            }
        }
  
        if (isset($_POST["salsa"])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($salsa as $salsa){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$salsa."<br><br>";
            }
        }
 
        if (isset($_POST["pan"])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($pan as $pan){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$pan."<br><br>";
            }
        }    
    }
    


 ?>