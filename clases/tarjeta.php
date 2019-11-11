<?php
class Tarjeta{
    //ATRIBUTOS//
    private $fechaVencimiento;
    private $codigoSeguridad;
    private $nombre;
    private $apellido;
    private $numeroTarjeta;
    private $metodoPago;

    //CONSTRUCTOR //
    public function __construct(int $fechaVencimiento,int $codigoSeguridad,string $nombre, string $apellido,int $numeroTarjeta,metodoPago $metodoPago){
    $this->fechaVencimiento=$fechaVencimiento;
    $this->codigoSeguridad=$codigoSeguridad;
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->numeroTarjeta=$numeroTarjeta;
    $this->metodoPago=$metodoPago;
    }

    //RESPONSABILIDADES//
    public function setFechaVencimiento(int $fechaVencimiento){
        $this->fechaVencimiento=$fechaVencimiento;
    }

    public function getFechaVencimiento(): int{
        return $this->fechaVencimiento;
    }

    public function setCodigoSeguridad(int $codigoSeguridad){
        $this->codigoSeguridad=$codigoSeguridad;
    }

    public function getNumeroTarjeta(): int{
        return $this->numeroTarjeta;
    }

    public function setNombre(string $nombre){
        $this->nombre=$nombre;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function setApellido(string $apellido){
        $this->apellido=$apellido;
    }

    public function getApellido(): string{
        return $this->apellido;
    }

    public function setNumeroTarjeta(int $numeroTarjeta){
        $this->numeroTarjeta=$numeroTarjeta;
    }


    public function setMetodoPago(metodoPago $metodoPago){
        $this->metodoPago=$metodoPago;
    }

    public function getMetodoPago(): metodoPago{
        return $this->metodoPago;
    }
}
