<?php 

namespace {

	function calcualteHomeWorkSum (...$numbers) 
	{
		$sum = 0;

		foreach ($numbers as $number) {
			$sum += $number;
		}

		return $sum;
	}
}

namespace Nfq\Akademija\Not_Typed {

	function calcualteHomeWorkSum (...$numbers) :int 
	{
		$sum = 0;

		foreach ($numbers as $number) {
			$sum += $number;
		}

		return $sum;
	}
}

namespace Nfq\Akademija\Soft {

	function calcualteHomeWorkSum (int ...$numbers) :int 
	{
		$sum = 0;

		foreach ($numbers as $number) {
			$sum += $number;
		}

		return $sum;
	}
}

namespace Nfq\Akademija\Strict {

	function calcualteHomeWorkSum (int ...$numbers) :int 
	{
		$sum = 0;

		foreach ($numbers as $number) {
			$sum += $number;
		}

		return $sum;
	}
}