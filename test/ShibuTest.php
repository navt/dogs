<?php
use PHPUnit\Framework\TestCase;

spl_autoload_register(function ($class) {
    include '../lib/' . $class . '.php';
});
/**
 *@group all
 */
class ShibuTest extends TestCase {
    protected $dog;

    protected function setUp(): void {
        $this->dog = new Shibu();
    }
    protected function tearDown(): void {
        $this->dog = NULL;
    }
    
    public function testSound() {
        $this->assertEquals("Гав! Гав!", $this->dog->sound());
    }
    public function testHant() {
        $this->assertEquals("Берёт след.", $this->dog->hant());
    }
    public function testBody() {
        $this->assertEquals("Тело собаки.", $this->dog->body);
    }
}
