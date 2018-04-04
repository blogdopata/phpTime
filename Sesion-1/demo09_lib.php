<?php
	function promediar($a=0,$b=0){
		return ($a+$b)/2;
	}
	
	function TextoMayusculas($a){
		$cadena=strtoupper(trim($a));
		while(strpos($cadena,"  ")){
			$cadena=str_replace("  "," ",$cadena);
		}
		return $cadena;
	}
?>