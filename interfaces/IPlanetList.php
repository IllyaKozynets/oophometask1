<?php
namespace Interfaces;
interface IPlanetList{
    public function add(IPlanet $planet);
    public function getList();
    public function getCounts();
    

}