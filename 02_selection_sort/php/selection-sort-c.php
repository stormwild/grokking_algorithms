<?php

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

function swap(array & $list, int $i, int $j): void {
	$hold = $list[$i];
	$list[$i] = $list[$j];
	$list[$j] = $hold;
}

function selectionSort(array $list): array {
	for($i = 0, $len = count($list); $i < $len; $i++) {
		swap($list, $i, findSmallest());
	}
}