<?php
	$nbPassagers = array(35 , 10 , 22 , 52 , 15 , 58 , 8 , 73 ) ;
	$nonRentables = 0 ;
	for($i=0 ; $i < count($nbPassagers) ; $i=$i+1){
		if($nbPassagers[$i] < 20){
			$nonRentables = $nonRentables + 1 ;
		}
	}
	echo $nonRentables , " traversées non rentables le 22/09/2022 \n" ;


?>
