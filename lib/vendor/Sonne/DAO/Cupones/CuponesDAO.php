<?php
namespace Sonne\DAO\Cupones;
/**
 * Description of CuponesDAO
 *
 * @author Rebolini Pablo <rebolini.pablo@gmail.com>
 */

class CuponesDAO extends \Sonne\DAO\Base\BaseDAO{
    
    private $tabla = 'cupones';
    
    public function nuevo(\Sonne\VO\Cupones\CuponesVO $cupon){
        $_sql = "INSERT INTO `{$this->tabla}`" .
                "(`id`,`codigo`,`valido`,`expira`,`referencia`)" .
                "VALUES(:id, :codigo, :valido, :expira, :referencia);";
        $this->query($_sql);
        
        $this->bind(':id',         $cupon->getId());
        $this->bind(':codigo',     $cupon->getCodigo());
        $this->bind(':valido',     $cupon->getValido()); 
        $this->bind(':expira',     $cupon->getExpira()); 
        $this->bind(':referencia', $cupon->getReferencia());        
        
        $this->execute();
        
        return $this->lastInsertId();
    }
  
    public function obtener(\Sonne\VO\Cupones\CuponesVO $cupon){
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
    
    public function eliminar(\Sonne\VO\Cupones\CuponesVO $cupon){
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
    }
}

?>
