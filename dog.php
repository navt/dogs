<?php
spl_autoload_register(function ($class) {
    include 'lib/' . $class . '.php';
});

$breeds = ["Shibu","Labrador","Taksa", "Mops", "RubberTaksa"];

$breed = $argv[1];
if (in_array($breed, $breeds) !== true) {
    exit("Нет данных о такой породе.\n");
}

$dog = new $breed;

switch ($argv[2]) {
    case "body":
        echo $dog->body."\n";
        break;
    case "sound":
        echo $dog->sound()."\n";
        break;
    case "hant":
        echo $dog->hant()."\n";
        break;
    default:
        echo "Нет фичи ".$argv[2]."\n";
        break;
}
