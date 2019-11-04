<?php
use PHPUnit\Framework\TestCase;

spl_autoload_register(function ($class) {
    include '../lib/' . $class . '.php';
});

// запуск тестов, помеченных @group all
// $  ./phpunit.phar --group all ./

/**
 *@group all
 */
class LabradorTest extends TestCase {
    protected $dog;

    protected function setUp(): void {
        $this->dog = new Labrador();
    }
    protected function tearDown(): void {
        $this->dog = NULL;
    }
    
    public function testSound() {
        $this->assertEquals("Нет функции голоса.", $this->dog->sound());
    }
    public function testHant() {
        $this->assertEquals("Нет функции охоты.", $this->dog->hant());
    }
    public function testBody() {
        $this->assertEquals("Плюш", $this->dog->body);
    }
}
