<?php
use PHPUnit\Framework\TestCase;

spl_autoload_register(function ($class) {
    include '../lib/' . $class . '.php';
});
/**
 *@group all
 */
class MopsTest extends TestCase {
    protected $dog;

    protected function setUp(): void {
        $this->dog = new Mops();
    }
    protected function tearDown(): void {
        $this->dog = NULL;
    }
    
    public function testSound() {
        $this->assertEquals("Гав! Гав!", $this->dog->sound());
    }
    public function testHant() {
        $this->assertEquals("Ему лень.", $this->dog->hant());
    }
    public function testBody() {
        $this->assertEquals("Тело собаки.", $this->dog->body);
    }
}

