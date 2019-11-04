<?php
use PHPUnit\Framework\TestCase;

spl_autoload_register(function ($class) {
    include '../lib/' . $class . '.php';
});
/**
 *@group all
 */
class RubberTaksaTest extends TestCase {
    protected $dog;

    protected function setUp(): void {
        $this->dog = new RubberTaksa();
    }
    protected function tearDown(): void {
        $this->dog = NULL;
    }
    
    public function testSound() {
        $this->assertEquals("Пи! Пи!", $this->dog->sound());
    }
    public function testHant() {
        $this->assertEquals("Нет функции охоты.", $this->dog->hant());
    }
    public function testBody() {
        $this->assertEquals("Резина", $this->dog->body);
    }
}
