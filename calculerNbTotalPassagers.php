<?php
	$nbPassagers = array(35 , 10 , 22 , 52 , 15 , 58 , 8 , 73 ) ;
	$resultat = 0 ;
	for($i=0 ; $i < count($nbPassagers) ; $i=$i+1){
		$resultat = $resultat + $nbPassagers[$i] ;
	}
	echo $resultat , " passagers transportés le 22/09/2022 \n" ;

?>
