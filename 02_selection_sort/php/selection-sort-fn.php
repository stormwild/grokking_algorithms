<?php

// In place selectionSort
function selectionSort(array $list): array {
	for($i = 0, $len = count($list); $i < $len; $i++) {
		$smallest = $i;
		for($j = $i + 1; $j < $len; $j++) {
			if($list[$j] < $list[$smallest]) {
				$smallest = $j;
			}
		}
		$hold = $list[$i];
		$list[$i] = $list[$smallest];
		$list[$smallest] = $hold;
	}
	return $list;
}

echo '[' . join(', ', selectionSort([5, 3, 6, 2, 10])) . ']' . PHP_EOL;