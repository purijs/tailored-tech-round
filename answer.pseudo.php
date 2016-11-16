<?php

//Initialize vars here
$name="Jaskaran";
$numbers=0;

//Calls number-generate function
print_name_num($name,6,15);

//Function Def
function print_name_num($param,$min,$max) {
	
	//Generate random number, exclude 6,15
	while (in_array( ($numbers = rand($min,$max)), array(6,15)));
	
	//Print Output
    echo $param.' '.$numbers;
}

?>