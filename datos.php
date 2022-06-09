<?php
$conexion=mysqli_connect('localhost','root','','turnos');
$sele=$_POST['sele'];

	$sql="SELECT esp,
			 sele,
			 esp
		from turn
		where sele='$sele'";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>espesialisacion</label>
			<select esp='lista2' name='lista2'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";


?>
