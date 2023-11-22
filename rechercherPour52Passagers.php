<?php
	$nbPassagers = array(35 , 10 , 22, 52, 15, 58, 8, 73) ;
	$numPassage52 = 0 ;
	for($i = 0 ; $i < count($nbPassagers) -1 ; $i++){
		if( $nbPassagers[$i] == 52){
			$numPassage52 =+ $i ;
			echo "La traversée " , $i +1 , " a transporté 52 passagers. \n" ;
		}
	}
	

?>
