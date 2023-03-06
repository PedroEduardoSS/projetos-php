<?php
namespace Heroi;

class Heroi {
    private $name;
    private $pdv;
    private $xp = 0;

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

    public function getXp()
    {
        return $this->xp;
    }
 
    public function setXp($xp)
    {
        $this->xp = $xp;
        return $this;
    }

    public function atacar(int $dano = 0): int
    {
        $ataque = (rand(10, 200) / 10) + $dano;
        return (int) $ataque;
    }

    public function defender(int $resitencia): int
    {
        $defesa = (rand(10, 200) / 10) + $resitencia;
        return (int) $defesa;
    }

    public function atualizar_pdv(int $ataque, int $defesa)
    { 
        if ($ataque > $defesa){
            $dano = $ataque - $defesa;
            $this->pdv -= $dano;
        }
    }
}
?>