<?php
include_once 'moto.php';
include_once 'venta.php';
class empresa{
    // Zona de atributos
    private $denominacionInstancia;
    private $direccionInstancia;
    private $coleccionClientesInstancia; # array de clientes & Referencia clase cliente
    private $coleccionMotosInstancia; # array de motos & Referencia clase moto
    private $coleccionVentasInstancia; # array de ventas & Referencia clase venta
    // Zona de metodos
    # Metodo construct
    public function __construct($denominacion,$direccion,$cliente,$moto,$ventas) {
        $this->denominacionInstancia = $denominacion;
        $this->direccionInstancia = $direccion;
        $this->coleccionClientesInstancia = $cliente;
        $this->coleccionMotosInstancia = $moto;
        $this->coleccionVentasInstancia = $ventas;
    }
    # Metodos Get's (acceso)
    public function getDenominacionInstancia(){
        return $this->denominacionInstancia;
    }
    public function getDireccionInstancia(){
        return $this->direccionInstancia;
    }
    public function getColeccionClientesInstancia(){
        return $this->coleccionClientesInstancia;
    }
    public function getColeccionMotosInstancia(){
        return $this->coleccionMotosInstancia;
    }
    public function getColeccionVentasInstancia(){
        return $this->coleccionVentasInstancia;
    }
    # Metodos Set's (modificacion)
    public function setDenominacionInstancia($nuevaDenominacion){
        $this->denominacionInstancia = $nuevaDenominacion;
    }
    public function setDireccionInstancia($nuevaDireccion){
        $this->direccionInstancia = $nuevaDireccion;
    }
    public function setColeccionClientesInstancia($nuevaColeccionClientes){
        $this->coleccionClientesInstancia = $nuevaColeccionClientes;
    }
    public function setColeccionMotosInstancia($nuevaColeccionMotos){
        $this->coleccionMotosInstancia = $nuevaColeccionMotos;
    }
    public function setColeccionVentasInstancia($nuevaColeccionVentas){
        $this->coleccionVentasInstancia = $nuevaColeccionVentas;
    }
    # Método __toString
    public function __toString() {
        $clientes = $this->getColeccionClientesInstancia();
        $motos = $this->getColeccionMotosInstancia();
        $ventas = $this->getColeccionVentasInstancia();

        $cadenaClientes = "";
        foreach ($clientes as $cliente) {
            $cadenaClientes .= $cliente . "\n";
        }

        $cadenaMotos = "";
        foreach ($motos as $moto) {
            $cadenaMotos .= $moto . "\n";
        }

        $cadenaVentas = "";
        foreach ($ventas as $venta) {
            $cadenaVentas .= $venta . "\n";
        }

        $cadena = (
            "Denominación: " . $this->getDenominacionInstancia() . "\n" .
            "Dirección: " . $this->getDireccionInstancia() . "\n" .
            "Clientes:\n" . $cadenaClientes .
            "Motos:\n" . $cadenaMotos .
            "Ventas:\n" . $cadenaVentas
        );

        return $cadena;
    }
    # Método retornarMoto($codigoMoto)
    public function retornarMoto($codigoMotoIngresado) {
        $coleccionMotos = $this->getColeccionMotosInstancia();
        $motoEncontrada = null;
    
        foreach ($coleccionMotos as $unaMoto) {
            $codigo = $unaMoto->getCodigoInstancia();
            if ($codigo == $codigoMotoIngresado) {
                $motoEncontrada = $unaMoto;
            }
        }
    
        return $motoEncontrada;
    }
    # Metodo registrarVenta($colCodigosMoto, $objCliente) 
    public function registrarVenta($colCodigosMoto, $objCliente) {
        $estadoCliente = $objCliente->getEstadoClienteInstancia();
        $retorno = false;
        if ($estadoCliente) {
            
        } else {
            # code...
        }
    return $retorno;}
    
        # Metodo retornarVentasXCliente($tipo,$numDoc)
        public function retornarVentasXCliente($tipo, $numDoc) {
            
        }
        
}    
?>