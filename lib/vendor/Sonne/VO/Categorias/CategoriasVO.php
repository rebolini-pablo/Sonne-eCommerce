<?php
namespace Sonne\VO\Categorias;
/**
 * Value Object Categorias Class
 *
 * @author Rebolini Pablo <rebolini.pablo@gmail.com>
 */
class CategoriasVO extends \Sonne\VO\Base\BaseVO{
    private $titulo;
    private $tipo;
    
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
        return $this;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }
    
}

?>
