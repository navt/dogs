<?php

abstract class Dogs {
    
    public $body = "Тело собаки.";
    
    public function sound() {
        return "Гав! Гав!";
    }
    
    public function hant() {
        return "Берёт след.";
    }
}
