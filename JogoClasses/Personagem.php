<?php
namespace Personagem;

abstract class Personagem {
    private $name;
    private $pdv;

    public function __construct($name, $pdv)
    {
        $this->name = $name;
        $this->pdv = $pdv;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setPdv($pdv){
        $this->pdv = $pdv;
    }

    public function getName(){
        return $this->name;
    }

    public function getPdv(){
        return $this->pdv;
    }

    abstract public function atacar(int $dano = 0) : int;
    abstract public function defender(int $resitencia, int $dano_recebido) : int;
    abstract public function atualizar_pdv(int $ataque, int $defesa);
}
?>