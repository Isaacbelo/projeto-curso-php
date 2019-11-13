<?php
  echo "<h1>ARRAYS</h1>";
  $carros = array("BMW", "Veloster", "Hilux");
 //Também pode usar a sintaxe: array(indice=>'nome'); $carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
 $carros[] = "Amarok"; // índice não especificado, porém, por padrão ele é adicionado na sequência.
 $carros[10] = "Camaro";

  echo "Impressos com print_r: <br>";
  print_r($carros);
  echo "<br><p>Arrays impressos pelos índices:<p>";
  echo "Posição 0 = ".$carros[0]."<br>";
  echo "Posição 1 = ".$carros[1]."<br>";
  echo "Posição 2 = ".$carros[2]."<br>";
  echo "<hr>";

  $motos = array();
  $motos[] ="Yamaha";
  $motos[] = "honda";
  $motos[5] = "Suzuki";

  print_r($motos);


  echo "<br><a href='index.php'>Home</a>";
?>