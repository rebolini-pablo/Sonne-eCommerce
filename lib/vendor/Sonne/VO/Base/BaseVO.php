<?php
namespace Sonne\VO\Base;
/**
 * Base Value Object Class
 *
 * @author Rebolini Pablo <rebolini.pablo@gmail.com>
 */
class BaseVO {
    
    protected $id;
    protected $referencia;
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        if(!intval($id)) throw new \InvalidArgumentException('Se esperaba: Entero');
            $this->id = $id;
    }
    
    public function getReferencia(){
        return $this->referencia;
    }
    public function setReferencia($referencia){
        $this->referencia = $referencia;
    }
}

?>
