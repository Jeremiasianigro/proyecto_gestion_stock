<?php
class presupuestos
{
    //clase q instancia los presupuestos
    // funcion buscar clientes en tabla

    // funcion q crea presupuestos en borrador
    // funcion q busca un presupuesto
    // funcion q da de baja presupuesto
    // funcion q cambia de estado y lo modifica
}

class cliente
{
    protected $id;
    protected $nombre;
    protected $fecha_ingreso;
    protected $cuil;
    protected $cbu;
    
    function __construct ($id, $cliente,$fecha_ingreso)
    {
        $this->id = $id;
        $this->nombre = $cliente["nombre"];
        $this->fecha_ingreso = $fecha_ingreso;
        $this->cuil = $cliente["cuil"];
        $this->cbu = $cliente["cbu"];
    }
    //GETTERS
    function id()
    {
        return $this->id;
    }
    function nombre()
    {
        return $this->nombre;
    }

    function fecha_ingreso()
    {
        return $this->fecha_ingreso;
    }

    function cuil()
    {
        return $this->cuil;
    }

    function cbu()
    {
        return $this->cbu;
    }

}   //fin de la clase

class insumo
{
    protected $id_presup;
    protected $concepto;
    protected $importe;
    protected $comprobante;


    function __construct ($id_presup,$insumo)
    {
        $this->id_presup = $id_presup;
        $this->concepto = $insumo ["concepto"];
        $this->importe = $insumo ["importe"];
        $this->comprobante = $insumo ["comprobante"];
    }
    //GETTERS
    function id_presup()
    {
        return $this->id_presup;
    }
    function concepto()
    {
        return $this->concepto;
    }
    function importe()
    {
        return $this->importe;
    }
    function comprobante()
    {
        return $this->comprobante;
    }

    
} // fin de la clase
class presupuesto
{

    private $datosDB;
    protected $id_presup;
    protected $estado;
    protected $cuil;
    protected $nombre;
    protected $insumos=[];
    protected $insumos_instanciados=[];
    protected $total;

    function __construct($cliente,$insumos,$estado)
    {
       $datosDB=new datosDB;
       $this->datosDB = $datosDB;
       $presupuestos= $datosDB->leer_tabla_presupuestos_borrador();
       $id=0;
       foreach ($presupuestos as $un_presupuesto)
        {
            $id=$un_presupuesto["id_presp"];
        }
        $id_presup=$id+1;
        $this->id_presup=$id_presup;
        $this->estado=$estado;
        $this->cuil=$cliente["cuil"];
        $this->nombre=$cliente["nombre"];
        $this->insumos=$insumos;

        if (is_array($this->insumos())) 
        {
            
        }





    }
// GETERS
function datosDB()
{
    return $this->datosDB;
}
function id_presup()
{
    return $this->id_presup;
}
function estado()
{
    return $this->estado;
}
function cuil()
{
    return $this->cuil;
}
function nombre()
{
    return $this->nombre;
}
function insumos()
{
    return $this->insumos;
}
function total()
{
    return $this->total;
}

}// fin de la clase

class datosDB
{
    function leer_tabla_clientes()
    {
        $textoDelArchivo = file_get_contents("tabla_clientes.json");
        return json_decode($textoDelArchivo,true);
    }
    function leer_tabla_presupuestos_borrador()
    {
        $textoDelArchivo = file_get_contents("tabla_presupuestos_borrador.json");
        return json_decode($textoDelArchivo,true);
    }
    function leer_tabla_insumos_variables()
    {
        $textoDelArchivo = file_get_contents("tabla_insumos_variables.json");
        return json_decode($textoDelArchivo,true);
    }
}