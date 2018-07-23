<?php


	function factorial($n) {

	if ($n < 0){
		return 1;
	} if($n > 20) {
		return 1;
		} if ($n == 0) {
		$result = 1;
		for($i = 1; $i >= $n; $i++){
			$result *= $i;
		}
		}
		return $result;
}

