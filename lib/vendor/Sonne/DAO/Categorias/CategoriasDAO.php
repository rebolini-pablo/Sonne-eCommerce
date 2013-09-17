<?php
namespace Sonne\DAO\Categorias;

/**
 * @author Rebolini Pablo <rebolini.pablo@gmail.com>
 */

class CategoriasDAO extends \Sonne\DAO\Base\BaseDAO{
    
    private $tabla = 'categorias';


    public function nuevo(\Sonne\VO\Categorias\CategoriasVO $categoria){
        $_sql = "INSERT INTO `{$this->tabla}`" .
                "(`id`,`titulo`,`tipo`,`referencia`)" .
                "VALUES(:id, :titulo, :tipo, :referencia);";
        $this->query($_sql);
        
        $this->bind(':id',         $categoria->getId());
        $this->bind(':titulo',     $categoria->getTitulo());
        $this->bind(':tipo',       $categoria->getTipo()); 
        $this->bind(':referencia', $categoria->getReferencia());        
        
        $this->execute();
        
        return $this->lastInsertId();
    }
  
    // Simplificar usando un-named placeholders... 
    public function obtener(\Sonne\VO\Categorias\CategoriasVO $categoria){
        if($categoria->getId()){
            $_sql = "SELECT * FROM `{$this->tabla}` WHERE `id` = :id;";  
            $this->query($_sql);
            $this->bind(':id', $categoria->getId());
        }
        
        if($categoria->getTipo()){
           $_sql = "SELECT * FROM `{$this->tabla}` WHERE `tipo` = :tipo;"; 
           $this->query($_sql);
           $this->bind(':tipo', $categoria->getTipo());
        }
        
        if($categoria->getReferencia()){
           $_sql = "SELECT * FROM `{$this->tabla}` WHERE `referencia` = :referencia;"; 
           $this->query($_sql);
           $this->bind(':referencia', $categoria->getReferencia());           
        }
        
        return $this->resultset();
    }
    
    public function eliminar(\Sonne\VO\Categorias\CategoriasVO $categoria){
        if($categoria->getId()){
            $_sql = "DELETE FROM `{$this->tabla}` WHERE `id` = :id;";  
            $this->query($_sql);
            $this->bind(':id', $categoria->getId());
        }
        
        /*if($categoria->getCodigo()){
           $_sql = "DELETE FROM `{$this->tabla}` WHERE `codigo` = :codigo;"; 
           $this->query($_sql);
           $this->bind(':codigo', $categoria->getCodigo());
        }*/
        
        $this->execute();        
    }


}

?>
