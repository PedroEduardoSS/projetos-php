<?php

include_once "Testes.php";

class Personagem extends Testes{
    private $name;
    private $name_player;
    private $race;
    private $profission;
    private $age;
    private $genre;

    private $pdv;
    private $pda;
    private $pde;

    private $pdv_max;
    private $pda_max;
    private $pde_max;

    private $xp;
    private $cash;
    private $weight;
    private $weight_max;
    private $weight_combat;

    function __construct($name, $name_player, $race, $profission, $age, $genre, $strength, $hability, $perception, $intelligence, $dominion)
    {
        parent::__construct($strength, $hability, $perception, $intelligence, $dominion);
        $this->name = $name;
        $this->name_player = $name_player;
        $this->race = $race;
        $this->profission = $profission;
        $this->age = $age;
        $this->genre = $genre;

        $this->strength = $strength;
        $this->hability = $hability;
        $this->perception = $perception;
        $this->intelligence = $intelligence;
        $this->dominion = $dominion;
    }

    private $magics = array(
        array("Classe", "Magia"),
        array("", ""),
        array("", ""),
        array("", ""),
        array("", ""),
        array("", ""),
        array("", ""),
        array("", ""),
        array("", ""),
        array("", ""),
        array("", "")
    );

    private $weapons = array(
        array("Arma", "Mod. de dano", "Teste", "Peso"),
        array("", 0, "", 0),
        array("", 0, "", 0),
        array("", 0, "", 0)
    );

    private $armors = array(
        array("Equipamento", "PdA", "Peso"),
        array("", 0, 0),
        array("", 0, 0),
        array("", 0, 0),
        array("", 0, 0),
        array("", 0, 0)
    );

    private $items = array(
        array("Qtd", "Item", "Peso"),
        array(0, "", 0),
        array(0, "", 0),
        array(0, "", 0),
        array(0, "", 0),
        array(0, "", 0),
        array(0, "", 0),
        array(0, "", 0),
        array(0, "", 0),
        array(0, "", 0)
    );

    public function get_name(){
        return $this->name;
    }

    public function set_name($name){
        $this->name = $name;
    }

    public function get_name_player(){
        return $this->name_player;
    }

    public function set_name_player($name_player){
        $this->name_player = $name_player;
    }

    public function get_race(){
        return $this->race;
    }

    public function set_race($race){
        $this->race = $race;
    }

    public function get_profission(){
        return $this->profission;
    }

    public function set_profission($profission){
        $this->profission = $profission;
    }

    public function get_age(){
        return $this->age;
    }

    public function set_age($age){
        $this->age = $age;
    }

    public function get_genre(){
        return $this->genre;
    }

    public function set_genre($genre){
        $this->genre = $genre;
    }

    public function get_pdv(){
        return $this->pdv;
    }

    public function set_pdv($pdv){
        $this->pdv = $pdv;
    }

    public function get_pda(){
        return $this->pda;
    }

    public function set_pda($pda){
        $this->pda = $pda;
    }

    public function get_pde(){
        return $this->pde;
    }

    public function set_pde($pde){
        $this->pde = $pde;
    }

    public function get_pdv_max(){
        return $this->pdv_max;
    }

    public function set_pdv_max($pdv_max){
        $this->pdv_max_max = $pdv_max;
    }

    public function get_pda_max(){
        return $this->pda_max;
    }

    public function set_pda_max($pda_max){
        $this->pda_max = $pda_max;
    }

    public function get_pde_max(){
        return $this->pde_max;
    }

    public function set_pde_max($pde_max){
        $this->pde_max = $pde_max;
    }

    public function get_xp(){
        return $this->xp;
    }

    public function set_xp($xp){
        $this->xp = $xp;
    }

    public function get_cash(){
        return $this->cash;
    }

    public function set_cash($cash){
        $this->cash = $cash;
    }

    public function get_weight(){
        return $this->weight;
    }

    public function set_weight($weight){
        $this->weight = $weight;
    }

    public function get_weight_max(){
        return $this->weight_max;
    }

    public function set_weight_max($weight_max){
        $this->weight_max = $weight_max;
    }

    public function get_weight_combat(){
        return $this->weight_combat;
    }

    public function set_weight_combat($weight_combat){
        $this->weight_combat = $weight_combat;
    }


}

?>