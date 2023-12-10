<?php
class clase_cursos
{   public $vlcur_id;
    public $vlcur_nombre;
    public $vlcur_observacion;
    public function __construct()
    {
        $this->vlcur_id="";
        $this->vlcur_nombre="";
        $this->vlcur_observacion="";
        $this->vlcur_paralelo="";
    }
    public function _insertar($vlcur_nombre, $vlcur_observacion, $vlcur_paralelo){
        require_once("../../../conexion/conexion.php");
        //$dmlsentencia="insert into si_provincias(cur_nombre,cur_observacion) values ('vlcur_nombre ','vlcur_observacion')";
        $dmlsentencia="insert into snv_cursos(cur_nombre, cur_observacion, cur_paralelo) values ('" . $vlcur_nombre . "','" . $vlcur_observacion . "','" . $vlcur_paralelo . "')";
        $registros=$pdo->query($dmlsentencia);
        return $registros;
    }
    public function _consultartodo($valor){
        require_once("../../../conexion/conexion.php");

        if($valor=='')
        {
            $dmlsentencia="select * from snv_cursos";
        }
        else
        {
            $dmlsentencia="select * from snv_cursos where cur_nombre like '%s', %".$valor."%";
        }
        $registros=$pdo->query($dmlsentencia);
        return $registros;
    }
    public function _actualizar($id, $nombre, $observacion, $paralelo)
       { //update
    }
    public function _eliminar(){
        //delete
    }
}
?>