<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
//Variaveis
$num1 = 9;
$num2 = 5;
$soma = $num1 + $num2;
$resto = $num1 % $num2;
echo "A soma entre $num1 e $num2 e: ". $soma;
echo "<br>A divisao entre $num1 e $num2 e: ". ($num1 / $num2);
echo "\n";
echo "<br> A variável é do tipo: " . gettype($soma);
echo "<br>O resto da divisão de $num1 por $num2 = " . $resto;
echo "<br>Resto incorreto de (7 % 3.3) inteiro por decimal = " .(7%3.3);
echo "<br>Resto correto de intteiro por decimal(fmod) = ". fmod(7, 3.3);

//Condicionais (if)
if ($num1 < $num2) {
  echo "<br>$num1 é menor que $num2!";
} else {
  echo "<br>$num1 é maior que $num2!";
}
echo "<br>-----------------------------------------------<br>";

/*Arrays - Gera índice(posições a partir do '0')

$carros = array("BMW","Veloster","Hilux");
$carros[] = "Amarok";
$carros[10] = "Camaro";
print_r($carros);

echo "<br>".$carros[1];
echo "<br>----------------------------------------<br>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";

print_r($motos);
echo "<br>-----------------------------------------<br>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo "<hr>";
echo "Contador de elementos de um Array(count) <br>";

$totalClientes = count($clientes);
echo "O total de clientes é: ".$totalClientes;
echo "<br>";

echo "Os valores do Array percorridos por foreach são: <br>";
foreach($clientes as $valor) {
  echo $valor."<br>";
} echo "<hr>";

//Arrays associativos (arrays que possuem strings nos seus índices)*/

echo "<a href='arrays.php'>Arrays</a>";


?>
  </body>
</html>