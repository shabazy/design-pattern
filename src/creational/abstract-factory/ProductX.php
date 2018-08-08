<?php

namespace DesignPattern\Creational\AbstractFactory;

class ProductX extends AbstractProductX {
	public function superProduct() :string {
		return 'This is super product';
	}
}