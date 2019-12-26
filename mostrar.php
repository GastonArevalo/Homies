<h1>Resumen del pedido:</h1>

<?php
  
  
    $cantidad = $_POST["cantidad"];
     
    //es la manera de representar un select por medio de recorrer un string;
    for($k=0;$k<$cantidad;$k++){

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


        echo "<br>"."medida" . ": " . $medida[$k]."<br><br>";
        echo "Toppings de la Hamburguesa: <br><br>";
    
    

        
    if (isset($_POST["lechuga"]) && $lechuga[$k] != ""){//consulta si existe a recepcion del dato en el formulario
          echo "<br>"."+ ".$lechuga[$k]."<br><br>";
            }
  
        
    if (isset($_POST["tomate"]) && $tomate[$k]!=""){//consulta si existe a recepcion del dato en el formulario                             
            echo "<br>"."+ ".$tomate[$k]."<br><br>";
            }
  
        
    if (isset($_POST["cebollam"]) && $cebollam[$k]!=""){//consulta si existe a recepcion del dato en el formulario                          
            echo "<br>"."+ ".$cebollam[$k]."<br><br>";
            }
      
        
    if (isset($_POST["cebollac"]) && $cebollac[$k]!=""){//consulta si existe a recepcion del dato en el formulario                        
            echo "<br>"."+ ".$cebollac[$k]."<br><br>";
            }
      
    
    if (isset($_POST["chiles"]) && $chiles[$k]!=""){//consulta si existe a recepcion del dato en el formulario
            echo "<br>"."+ ".$chiles[$k]."<br><br>";
            }
        
  
    if (isset($_POST["bacon"]) && $bacon[$k]!=""){//consulta si existe a recepcion del dato en el formulario
            echo "<br>"."+ ".$bacon[$k]."<br><br>";
            }
  
    if (isset($_POST["champ"]) && $champ[$k]!=""){//consulta si existe a recepcion del dato en el formulario
            echo "<br>"."+ ".$champ[$k]."<br><br>";
            }
  
    if (isset($_POST["salsa"]) && $salsa[$k]!=""){//consulta si existe a recepcion del dato en el formulario
            echo "<br>"."+ ".$salsa[$k]."<br><br>";
            }
 
    if (isset($_POST["pan"]) && $pan[$k]!=""){//consulta si existe a recepcion del dato en el formulario  
            echo "<br>"."+ ".$pan[$k]."<br><br>";
            }
            
         /*   if($k<$_POST["cantidad"]){
                $k++;
            }*/
            
    }
    


 ?>
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>