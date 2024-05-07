<?php

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
    protected $cliente;
    protected $insumos=[];
    protected $total;

    function __construct($cuil,$insumos)
    {
        
    }
}

class datosDB
{
    function leer_tabla_clientes()
    {
        $textoDelArchivo = file_get_contents("tabla_clientes.json");
        return json_decode($textoDelArchivo,true);
    }
}