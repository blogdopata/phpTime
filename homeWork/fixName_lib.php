<?php

	
	function TextoFix( $nombre ){
		
		$cadena=strtoupper(trim($nombre));
		while(strpos($cadena,"  ")){
			$cadena=str_replace("  "," ",$cadena);
		}
		return $cadena;
	}


?>