<?php

	//Converting an array into a string. Page 217 and 218 in the book beginning of php and mysql 4th edition.

	//implode(glue, pieces)

	function print_out_cities($cities){

		return '<ul><li>'. implode('</li><li>', $cities).'</li></ul>';
	}

	function print_out_cities2($cities){

		$output = array();

		foreach ($cities as $value) {

			$output[] = '<li>'. $value . '</li>';
		}

		return '<ul>' . implode("", $output). '</ul>';
	}

	$cities = array("Columbus", "Akron", "Cleveland", "Cincinnati");

	// echo implode("|", $cities);

	echo print_out_cities($cities);

	echo '<br>';

	echo print_out_cities2($cities);


	//****************************************************************************************







?>