<?php
namespace Interfaces;
interface IPlanet{
    public function addBeing(IBeing $being);
    public function getCountBeings();
    public function getName();
    public function getWeight();

}