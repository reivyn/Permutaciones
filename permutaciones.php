<?php
/* 
Formula General de Permutaciones
n! = n(n-1)(n-2)...1
n = numero de elementos
*/

$a = array(1,2,3); 
$b = array('a','b','c');
$c = array(4,5,6);

$count_a = count($a); //Contador arreglo A
$count_b = count($b); //Contador arreglo B
$count_c = count($c); //Contador arreglo C
$count_perm = 0;

echo "Numero de objetos en A = " . $count_a ."<br>";
echo "Numero de objetos en B = " . $count_b ."<br>";
echo "Numero de objetos en C = " . $count_c ."<br>";

for ($x=0; $x < $count_a; $x++) {
	// Ciclo arreglo A 
	for ($y=0; $y < $count_b; $y++) {
		// Ciclo arreglo B
		for ($z=0; $z < $count_c; $z++) {
			// Ciclo arreglo C  
			echo $a[$x] . $b[$y] . $c[$z] . "<br>"; // Impresion de permutaciones de objetos de A + B + C
			$count_perm++; //Contador total de permutaciones
		}
	}
}

echo "Numero total de permutaciones = " . $count_perm;

?>