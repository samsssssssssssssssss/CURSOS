<link href="../../../Libs/sweetalert2-8.2.5/sweetalert.css" rel="stylesheet">
<script src="../../../Libs/jquery.min.js"></script>
<script src="../../../Libs/sweetalert2-8.2.5/sweetalert.min.js"></script>

<?php
require_once('modelocurso.php');

$obj = new clase_cursos();
$result = $obj->_insertar($_POST['cur_nombre'], $_POST['cur_observacion'], $_POST['cur_paralelo'] );

if ($result) {
    echo '<script>jQuery(function(){swal({
        title:"Guardar cursos", text:"Registro Guardado", type:"success", confirmButtonText:"Aceptar"
    }, function(){location.href="http://localhost/school32/formularios/cursos/crud_cursos.php";});});</script>';
} else {
    echo '<script>jQuery(function(){swal({
        title:"Guardar ciclos", text:"Error al Guardar", type:"danger", confirmButtonText:"Aceptar"
    }, function(){location.href="http://localhost/school32/formularios/cursos/crud_cursos.php";});});</script>';
}
?>



