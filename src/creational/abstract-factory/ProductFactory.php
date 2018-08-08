<?php

namespace DesignPattern\Creational\AbstractFactory;

class ProductFactory extends AbstractFactory {
	public function createProductX() :AbstractProductX {
		return new ProductX();
	}

	public function createProductY() :AbstractProductY {
		return new ProductY();
	}
}