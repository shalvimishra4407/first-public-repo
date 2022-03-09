<?php
//wap in php to show prime no. or not range 1 to 100
$n=readline("Enter a number");
if($n<=100){
if($n%2==0){
	if($n==2)
		echo "$n is prime";
	else
	echo "$n is not prime";
	}
	else if($n%3==0){
		if($n==3)
			echo "$n is prime";
		else
		echo "$n is not prime";
	
	}
	else if($n%5==0){
		if($n==5)
			echo "$n is prime";
		else
		echo "$n is not prime";
	
	}
	else if($n%7==0){
		if($n==7)
			echo "$n is prime";
		else
		echo "$n is not prime";
	
	}
	else if($n%11==0){
		if($n==11)
			echo "$n is prime";
		else
		echo "$n is not prime";
	
	}
}
	else{
		echo "No. is less than or equal to 100";
	}

?>