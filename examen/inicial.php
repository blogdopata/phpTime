<?php

?>
<pre>
1. El ingreso al modulo, debe realizarse con validacion a tabla Usuarios, ya cuenta con 2 usuarios.
2. Debe contemplarse el acceso restringido. (sessiones).
3. Al ingresar un nuevo alumno convertir a mayusculas y quitar espacios en blanco al inicio, final e dobles espacios intermedios.
4. Se ha incorporado una vista correspondiente al reporte de notas como ayuda, puede utilizarla sin restricciones.
5. El matenimiento del estado de los cursos, debe usar un <SELECT></SELECT> para el estado (activo/inactivo).
6. La tabla MATRICULAS, cuenta con restriccion UNIQUE para la combinacion de id_alumno + id_curso para evitar registrar a un mismo alumno en un mismo curso varias veces.
</pre>
<img src="image/database01.png">