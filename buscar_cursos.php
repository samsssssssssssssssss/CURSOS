<?php
require_once("modelocurso.php");
$provincia = new clase_cursos();
$registros = $provincia->_consultartodo($_POST['valor']);
echo "<thead class='bg-primary text-light text-center'>
         <tr>
             <th>ID</th>
             <th>NOMBRE DE Curso</th>
             <th>OBSERVACION</th>
             <th>Editar</th>
             <th>Eliminar</th>
         </tr>
      </thead>";

if ($registros) {
    $f = 1;
    while ($fila = $registros->fetch()) {
        echo "<tr>
                <td>".$fila['cur_id']."</td>
                <td>".$fila['cur_nombre']."</td>
                <td>".$fila['cur_observacion']."</td>
                <td>".$fila['cur_paralelo']."</td>
                <td><button class='btn btn-warning' onclick='editar_curso({$fila['cur_id']})'>Editar</button></td>
                <td><button class='btn btn-danger' onclick='eliminar_curso({$fila['cur_id']})'>Eliminar</button></td>
              </tr>";
        $f++;
    }
} else {
    echo "<tr><td colspan='5'>No se encontraron resultados</td></tr>";
}
?>
