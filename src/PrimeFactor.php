<?php
class PrimeFactor {
	public function generate($number) {
		$result = [];
		for($candidate = 2; $number > 1; $candidate++) {
			for(; $number % $candidate == 0; $number /= $candidate) {
				$result[] = $candidate;
			}
		}
		return $result;
	}
}