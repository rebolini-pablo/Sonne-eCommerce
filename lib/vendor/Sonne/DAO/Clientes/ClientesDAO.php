<?php
namespace Sonne\DAO\Clientes;
/**
 * Description of ClientesDAO
 *
 * @author Rebolini Pablo <rebolini.pablo@gmail.com>
 */

class ClientesDAO extends \Sonne\DAO\Base\BaseDAO{
    
    private $tabla = 'clientes';
    
    public function nuevo(\Sonne\VO\Clientes\ClientesVO $cliente){
        $_sql = "INSERT INTO `{$this->tabla}`" .
                "(`id`,`nombre`,`apellido`,`dni`,`email`,`telefono`,`direccion`, `referencia`)" .
                "VALUES(:id, :nombre, :apellido, :dni, :email, :telefono, :direccion, :referencia);";
        $this->query($_sql);
        
        $this->bind(':id',         $cliente->getId());
        $this->bind(':nombre',     $cliente->getNombre());
        $this->bind(':apellido',   $cliente->getApellido()); 
        $this->bind(':dni',        $cliente->getDni()); 
        $this->bind(':email',      $cliente->getEmail());        
        $this->bind(':telefono',   $cliente->getTelefono());
        $this->bind(':direccion',  $cliente->getDireccion());        
        $this->bind(':referencia', $cliente->getReferencia());        
        
        $this->execute();
        
        return $this->lastInsertId();
    }
  
/*    public function obtener(\Sonne\VO\Clientes\ClientesVO $cliente){
        if($cupon->getId()){
            $_sql = "SELECT * FROM `{$this->tabla}` WHERE `id` = :id;";  
            $this->query($_sql);
            $this->bind(':id', $cupon->getId());
        }
        
        if($cupon->getCodigo()){
           $_sql = "SELECT * FROM `{$this->tabla}` WHERE `codigo` = :codigo;"; 
           $this->query($_sql);
           $this->bind(':codigo', $cupon->getCodigo());
        }
        
        return $this->single();
    }
    
    public function eliminar(\Sonne\VO\Clientes\ClientesVO $cliente){
        if($cupon->getId()){
            $_sql = "DELETE FROM `{$this->tabla}` WHERE `id` = :id;";  
            $this->query($_sql);
            $this->bind(':id', $cupon->getId());
        }
        
        if($cupon->getCodigo()){
           $_sql = "DELETE FROM `{$this->tabla}` WHERE `codigo` = :codigo;"; 
           $this->query($_sql);
           $this->bind(':codigo', $cupon->getCodigo());
        }
        
        $this->execute();        
    }*/
}
