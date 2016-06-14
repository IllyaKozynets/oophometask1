<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 12.06.2016
 * Time: 14:51
 */

namespace Classes;


use Interfaces\IPlanetList;
use Interfaces\IPlanet;
class PlanetList implements IPlanetList
{
    private $listadd=[];

    public function add(IPlanet $planet){

        $this->listadd[count($this->listadd)+1]=$planet;
        return count($this->listadd);
    }
    public function getList(){

        return $this->listadd;
    }
    public function getCounts(){

        return count($this->listadd);
    }

}