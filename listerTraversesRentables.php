<?php
	$nbPassagers = array(35 , 10 , 22 , 52 , 15 , 58 , 8 , 73 ) ;
	$rentables = 1 ;
	echo "Traversées rentables le 22/09/2022 : " ;
	for($i=0 ; $i < count($nbPassagers) ; $i=$i+1){
		if($nbPassagers[$i] >= 20){
			$rentables = $i + 1   ;
			echo $rentables , " "  ;
			
		}
		
	}
	



?>
