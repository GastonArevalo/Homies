<h1>Resumen del pedido:</h1>

<?php
  
  

    $medida = $_POST["medida$i"];
    
    //es la manera de representar un select por medio de recorrer un string;
    foreach($medida as $k => $medida){

        echo "<br> medida" . ": " . $medida."<br><br>";
        echo "Toppings de la Hamburguesa: <br><br>";
    
    $tomate = $_POST["lechuga"];
    $tomate = $_POST["tomate"];
    $cebollam = $_POST["cebollam"];
    $cebollac = $_POST["cebollac"];
    $chiles = $_POST["chiles"];
    $bacon = $_POST["bacon"];
    $champ = $_POST["champ"];
    $salsa = $_POST["salsa"];
    $pan = $_POST["pan"];

        
    if (isset($_POST["lechuga"])){//consulta si existe a recepcion del dato en el formulario
            
        if($lechuga[$k]!= ""){                              
          echo "<br>"."+ ".$lechuga[$k]."<br><br>";
      }
  }
        
    if (isset($_POST["tomate"])){//consulta si existe a recepcion del dato en el formulario
            
        if($tomate[$k]!=""){                              
          echo "<br>"."+ ".$tomate[$k]."<br><br>";
      }
  }
        
        if (isset($_POST["cebollam"])){//consulta si existe a recepcion del dato en el formulario
            
              if($cebollam[$k]!=""){                              
                echo "<br>"."+ ".$cebollam[$k]."<br><br>";
            }
        }
        
        if (isset($_POST["cebollac"])){//consulta si existe a recepcion del dato en el formulario
            
            if($cebollac[$k]!=""){                              
              echo "<br>"."+ ".$cebollac[$k]."<br><br>";
          }
      }
    
       if (isset($_POST["chiles"])){//consulta si existe a recepcion del dato en el formulario
            
              if($chiles[$k]!=""){                              
                echo "<br>"."+ ".$chiles[$k]."<br><br>";
            }
        }
  
        if (isset($_POST["bacon"])){//consulta si existe a recepcion del dato en el formulario
            
            if($bacon[$k]!=""){                              
              echo "<br>"."+ ".$bacon[$k]."<br><br>";
          }
      }
  
       if (isset($_POST["champ"])){//consulta si existe a recepcion del dato en el formulario
            
              if($champ[$k]!=""){                              
                echo "<br>"."+ ".$champ[$k]."<br><br>";
            }
        }
  
        if (isset($_POST["salsa"])){//consulta si existe a recepcion del dato en el formulario
            
            if($salsa[$k]!=""){                              
              echo "<br>"."+ ".$salsa[$k]."<br><br>";
          }
      }
 
       if (isset($_POST["pan"])){//consulta si existe a recepcion del dato en el formulario
            
              if($pan[$k]!=""){                              
                echo "<br>"."+ ".$pan[$k]."<br><br>";
            }
        }
    }
    


 ?>