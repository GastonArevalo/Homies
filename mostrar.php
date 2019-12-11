<?php
  
  
    echo "<h1>Pedido: </h1><br><br>";
    $medida = $_POST["medida$i"]; //Toma el valor de la medida
    //es la manera de representar un select por medio de recorrer un string;
    foreach($medida as $medida){     
        echo "<br> medida" . ": " . $medida."<br><br>";
        echo "Toppings de la Hamburguesa: <br><br>";
    
        $lechuga = $_POST['lechuga'];//almacena el valor en una variable
        if (isset($_POST['lechuga'])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($lechuga as $lechuga){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$lechuga."<br><br>";
            }
        }
        $tomate = $_POST['tomate'];//almacena el valor en una variable
        if (isset($_POST['tomate'])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($tomate as $tomate){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$tomate."<br><br>";
            }
        }
        $cebollam = $_POST['cebollam'];//almacena el valor en una variable
        if (isset($_POST['cebollam'])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($cebollam as $cebollam){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$cebollam."<br><br>";
            }
        }
        $cebollac = $_POST['cebollac'];//almacena el valor en una variable
        if (isset($_POST['cebollac'])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($cebolac as $cebollac){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$cebollac."<br><br>";
            }
        }
        $chiles = $_POST['chiles'];//almacena el valor en una variable
        if (isset($_POST['chiles'])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($chiles as $chiles){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$chiles."<br><br>";
            }
        }
        $bacon = $_POST['bacon'];//almacena el valor en una variable
        if (isset($_POST['bacon'])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($bacon as $bacon){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$bacon."<br><br>";
            }
        }
        $champ = $_POST['champ'];//almacena el valor en una variable
        if (isset($_POST['champ'])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($champ as $champ){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$champ."<br><br>";
            }
        }
        $salsa = $_POST['salsa'];//almacena el valor en una variable
        if (isset($_POST['salsa'])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($salsa as $salsa){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$salsa."<br><br>";
            }
        }
        $pan = $_POST['pan'];//almacena el valor en una variable
        if (isset($_POST['pan'])){//consulta si existe a recepcion del dato en el formulario
            
            foreach($pan as $pan){     //recorre el array para mostrar el valor del mismo en el caso que existavalor algun
                echo "<br>"."+ ".$pan."<br><br>";
            }
        }    
    }
    


 ?>