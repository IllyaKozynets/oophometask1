<?php
namespace Classes;
use Interfaces\IBeing;
use Interfaces\IPlanet;
class Planet implements IPlanet
{

    private $name;
    private $startWeight;
    private $fast;
    private $list=[];

    public function __construct($name,$weight,$fast)
    {
        $this->name=$name;
        $this->startWeight=$weight;
        $this->fast=$fast;


    }

    public function addBeing(IBeing $being ){
        $this->list[count($this->list)+1]=$being;
    return count($this->being_list);
}

    public function getCountBeings(){
        return count($this->being_list);
    }

    public function getName()
    {
       return $this->name;
    }
    public function getWeight()
    {
        return $this->startWeight;
    }

}