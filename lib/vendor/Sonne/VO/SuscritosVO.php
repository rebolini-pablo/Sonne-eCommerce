<?php

/**
 * Description of SuscritosVO
 *
 * @author Rebolini Pablo <rebolini.pablo@gmail.com>
 */
class SuscritosVO extends BaseVO{
    private $email;
    private $suscrito;
    
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function getSuscrito() {
        return $this->suscrito;
    }

    public function setSuscrito($suscrito) {
        $this->suscrito = $suscrito;
        return $this;
    }

}

?>
