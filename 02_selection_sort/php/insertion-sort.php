<?php

function insertionSort(array $list): array {
	for($i = 1, $len = count($list); $i < $len; $i++) {
		$hold = $list[$i];
		$j = $i - 1;
		while($j >= 0 && $hold < $list[$j]) {
			$list[$j + 1] = $list[$j];
			--$j;
		}
		$list[$j + 1] = $hold;
	}
	return $list;
}

echo '[' . join(', ', insertionSort([5, 3, 6, 2, 10])) . ']' . PHP_EOL;

echo '[' . join(', ', insertionSort([5, 3, 6, 2, 10, 15, 78, 45, 4, 8])) . ']' . PHP_EOL;


