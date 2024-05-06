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
    protected $id_ot;
    protected $concepto;
    protected $importe;
    protected $comprobante;

    function __construct ($id_ot,$insumo)
    {
        $this->id_ot = $id_ot;
        $this->concepto = $insumo ["concepto"];
        $this->importe = $insumo ["importe"];
        $this->comprobante = $insumo ["comprobante"];
    }
    //GETTERS
    function id_ot()
    {
        return $this->id_ot;
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