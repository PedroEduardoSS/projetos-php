<?php

class Testes{
    private $strength; #vigor
    private $hability;
    private $perception;
    private $intelligence;
    private $dominion;

    private $force;
    private $phis_res;
    private $mental_res;
    private $survival;
    private $agility;
    private $dexterity;
    private $competence;
    private $creativity;
    private $manipulation;
    private $lucky;

    function __construct($strength, $hability, $perception, $intelligence, $dominion)
    {
        $this->strength = $strength;
        $this->hability = $hability;
        $this->perception = $perception;
        $this->intelligence = $intelligence;
        $this->dominion = $dominion;
    }

    public function get_strength(){
        return $this->strength;
    }

    public function get_hability(){
        return $this->hability;
    }

    public function get_perception(){
        return $this->perception;
    }

    public function get_intelligence(){
        return $this->intelligence;
    }

    public function get_dominion(){
        return $this->dominion;
    }

    public function set_strength($strength){
        $this->strength = $strength;
    }

    public function set_hability($hability){
        $this->hability = $hability;
    }

    public function set_perception($perception){
        $this->perception = $perception;
    }

    public function set_intelligence($intelligence){
        $this->intelligence = $intelligence;
    }

    public function set_dominion($dominion){
        $this->dominion = $dominion;
    }

    public function update_testes(){
        $this->force = $this->strength + $this->hability;
        $this->phis_res = $this->strength + $this->perception;
        $this->mental_res = $this->strength + $this->intelligence;
        $this->survival = $this->strength + $this->dominion;
        $this->agility = $this->hability + $this->perception;
        $this->dexterity = $this->hability + $this->dominion;
        $this->competence = $this->intelligence + $this->hability;
        $this->creativity = $this->intelligence + $this->perception;
        $this->manipulation = $this->intelligence + $this->dominion;
        $this->lucky = $this->dominion + $this->perception;
    }

    public function get_force(){
        return $this->force;
    }

    public function get_phis_res(){
        return $this->phis_res;
    }

    public function get_mental_res(){
        return $this->mental_res;
    }

    public function get_survival(){
        return $this->survival;
    }

    public function get_agility(){
        return $this->agility;
    }

    public function get_dexterity(){
        return $this->dexterity;
    }

    public function get_competence(){
        return $this->competence;
    }

    public function get_creativity(){
        return $this->creativity;
    }

    public function get_manipulation(){
        return $this->manipulation;
    }

    public function get_lucky(){
        return $this->lucky;
    }
}

?>