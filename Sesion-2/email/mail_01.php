<?php
$estado=mail('alumno1@php.uni','test 805','desde php 805');
if($estado==1){
	echo "ok";
}else{
	echo "error";
}
?>