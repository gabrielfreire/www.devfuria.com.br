<?php
# Um array hipot�tico
$arr = array(5, 4, 7, 9, 2, 1);

/**
 * Ordena uma lista pelo m�todo Bubble Sort
 */
for($i=0; $i < count($arr); $i++){
	for($m=0; $m < count($arr)-1; $m++){
		$aux = null;
		if($arr[$m+1] <= $arr[$m]){
			$aux = $arr[$m];
			$arr[$m] = $arr[$m+1];
			$arr[$m+1] = $aux;
		}
	}
}

// Mostrar array ordenado
var_dump($arr);
?>