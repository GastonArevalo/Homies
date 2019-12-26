<h1>Resumen del pedido:</h1>

<?php
  
  
    $cantidad = $_POST["cantidad"];
    $medida = $_POST["medida"];
    $lechuga = $_POST["lechuga"];
    $tomate = $_POST["tomate"];
    $cebollam = $_POST["cebollam"];
    $cebollac = $_POST["cebollac"];
    $chiles = $_POST["chiles"];
    $bacon = $_POST["bacon"];
    $champ = $_POST["champ"];
    $salsa = $_POST["salsa"];
    $pan = $_POST["pan"];    
    //es la manera de representar un select por medio de recorrer un string;
    for($k=0;$k<$cantidad;$k++){


        echo "<br>"."medida" . ": " . $medida[$k]."<br><br>";
        echo "Toppings de la Hamburguesa: <br><br>";
    
    

        
    if (isset($_POST["lechuga"])){//consulta si existe a recepcion del dato en el formulario  
        if($lechuga[$k])
        echo "<br>".$lechuga[$k]."<br><br>";
            }
  
        
    if (isset($_POST["tomate"])){//consulta si existe a recepcion del dato en el formulario                             
            echo "<br>".$tomate[$k]."<br><br>";
            }
  
        
    if (isset($_POST["cebollam"])){//consulta si existe a recepcion del dato en el formulario                          
            echo "<br>".$cebollam[$k]."<br><br>";
            }
      
        
    if (isset($_POST["cebollac"])){//consulta si existe a recepcion del dato en el formulario                        
            echo "<br>".$cebollac[$k]."<br><br>";
            }
      
    
    if (isset($_POST["chiles"])){//consulta si existe a recepcion del dato en el formulario
            echo "<br>".$chiles[$k]."<br><br>";
            }
        
  
    if (isset($_POST["bacon"])){//consulta si existe a recepcion del dato en el formulario
            echo "<br>".$bacon[$k]."<br><br>";
            }
  
    if (isset($_POST["champ"])){//consulta si existe a recepcion del dato en el formulario
            echo "<br>".$champ[$k]."<br><br>";
            }
  
    if (isset($_POST["salsa"])){//consulta si existe a recepcion del dato en el formulario
            echo "<br>".$salsa[$k]."<br><br>";
            }
 
    if (isset($_POST["pan"])){//consulta si existe a recepcion del dato en el formulario  
            echo "<br>".$pan[$k]."<br><br>";
            }
            
         /*   if($k<$_POST["cantidad"]){
                $k++;
            }*/
            
    }
    


 ?>
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>