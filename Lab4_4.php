<?php 
$min = rand(25, 55);
$max = rand(56, 70);
$a = range($min, $max);
foreach($a as $el) {
	if($el >= $max) {
		echo "Максимальное чило массива - " . $el;
		echo "<br>";
		$b = $max;
	}
	elseif($el <= $min) {
		echo "Минимальное число массива - " . $el;
		echo "<br>";
        $c = $min;
	}
	else continue;
}
echo "Поменяли местами максимум - " . $c . "<br>" . "минимум - " . $b;