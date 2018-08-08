<?php

namespace DesignPattern\Creational\AbstractFactory;

abstract class AbstractFactory {
	abstract public function createProductX(): AbstractProductX ;
}