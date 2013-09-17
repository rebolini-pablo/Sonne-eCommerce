<?php

/**
 * Description of NewsletterVO
 *
 * @author Rebolini Pablo <rebolini.pablo@gmail.com>
 */
class NewsletterVO {
    private $letter;
    private $estado;

    public function getLetter() {
        return $this->letter;
    }

    public function setLetter($letter) {
        $this->letter = $letter;
        return $this;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
        return $this;
    }

}

?>
