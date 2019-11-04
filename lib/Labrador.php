<?php

class Labrador extends Dogs {
    public $body = "Плюш";
    public function sound() {
       return "Нет функции голоса."; 
    }
    public function hant() {
        return "Нет функции охоты.";
    }
}
