<?php
function mostrar($todasPizzas){
	echo "<table border='1'>
			<tr>    
				<th>Código</th>
				<th>Descripción</th>
				<th>Tipo</th>
				<th>Precio</th>
			</tr>";
	foreach ($todasPizzas as $datos) {
            echo "<tr>
					<td>".$datos->getCodigo()."</td>
					<td>".$datos->getDescripcion()."</td>
					<td>".$datos->getTipo()."</td>
					<td>".$datos->getPrecio()."</td>
				</tr>";
  	}
    echo "</table>";
}
?>