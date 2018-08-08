<?php

namespace DesignPatternTest\Creational;
use DesignPattern\Creational\AbstractFactory\AbstractProductX;
use DesignPattern\Creational\AbstractFactory\AbstractProductY;
use DesignPattern\Creational\AbstractFactory\ProductFactory;
use DesignPattern\Creational\AbstractFactory\ProductX;
use PHPUnit\Framework\TestCase;


class AbstractFactoryTest extends TestCase {
	public function testProductX() {
		$factory = new ProductFactory();
		$this->assertInstanceOf(AbstractProductX::class, $factory->createProductX());
	}

	public function testProductY() {
		$factory = new ProductFactory();
		$this->assertInstanceOf(AbstractProductY::class, $factory->createProductY());
	}

	public function testAccessAnotherProduct() {
		$factory = new ProductFactory();
		$this->assertEquals( 'Product type: This is super product',
			$factory->createProductY()->accessAnotherProduct(new ProductX()) );
	}
}