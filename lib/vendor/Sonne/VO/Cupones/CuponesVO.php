<?php
namespace Sonne\VO\Cupones;
/**
 * Description of CuponesVO
 *
 * @author Rebolini Pablo <rebolini.pablo@gmail.com>
 */
class CuponesVO extends \Sonne\VO\Base\BaseVO{
    private $codigo;
    private $valido;
    private $expira;
    
    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
        return $this;
    }

    public function getValido() {
        return $this->valido;
    }

    public function setValido($valido) {
        $this->valido = $valido;
        return $this;
    }

    public function getExpira() {
        return $this->expira;
    }

    // Formato: yyyy-mm-dd
    public function setExpira($expira) {
        $this->expira = $expira;
        return $this;
    }
    
}

?>
