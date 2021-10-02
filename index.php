<?php
/**
 * Created by PhpStorm.
 * Author by: Feras AlSouri.
 * IDE: Sublime
 * Date: 10/02/2021
 * Time: 02:44 AM
 * 
 */


//  Array of Integer. 
//For Example use [1,14,15,16,17,18,19];

	$array= [1,14,40,17,18,19];
		

// function gets Minimise, Maximize, and odd of number

    function getCalculator($array)
	{
	    if(!is_array($array) || count(($array)) ===0 )    
	               return  new InvalidArgumentException(__FUNCTION__.' expecting array, got an '.gettype($array) .',we expect array for this statment, kindly use [1,14,40,17,18,19]');

// initial of odd by 0 
      	$odd=0;

// get min of array using min() method
      	 $min = @min($array);

// get max of array using max() method
		$max= @max($array) ;
      	
// loop to calculate odd number in array
      	 for($i=0 ; $i< count($array) ; $i++)
      	 	 if($array[$i] %2 ) $odd++;

    	return  ['min'=> $min,'max'=>$max,'odd of number'=> $odd];      
	}
	 

// Returns Min, Max, and odd of numberin array
	

	print_r(getCalculator($array));