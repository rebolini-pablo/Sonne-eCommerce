<?php
namespace Sonne\VO\Clientes;
/**
 * Description of ClientesVO
 *
 * @author Rebolini Pablo <rebolini.pablo@gmail.com>
 */
class ClientesVO extends \Sonne\VO\Base\BaseVO{
    private $nombre;
    private $apellido;
    private $dni;
    private $email;
    private $telefono;
    private $direccion;   

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
        return $this;
    }

    public function getDni() {
        return $this->dni;
    }

    public function setDni($dni) {
        $this->dni = $dni;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
        return $this;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
        return $this;
    }

    
}