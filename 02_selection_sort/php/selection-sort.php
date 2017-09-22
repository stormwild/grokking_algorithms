<?php

/**
 * Return the index of the smallest value in array
 */
function findSmallest(array & $list):int {
	$smallest = $list[0]; // Set the smallest value to the first item in the array
	$index = 0;
	for($i = 0, $len = count($list); $i < $len; $i++) {
		if($list[$i] < $smallest) {
			$smallest = $list[$i];
			$index = $i;
		}
	}
	return $index;
}

function selectionSort(array $list): array {
	$sorted = [];
	for($i = 0, $len = count($list); $i < $len; $i++) {
		$smallest = findSmallest($list);
		$sorted[] = array_splice($list, $smallest, 1)[0];
	}
	return $sorted;
}

echo '[' . join(', ', selectionSort([5, 3, 6, 2, 10])) . ']' . PHP_EOL;