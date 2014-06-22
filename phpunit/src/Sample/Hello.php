<?php
namespace Sample;

require_once __DIR__ . "/../../vendor/autoload.php";

class Hello
{
    private $name;

    public function __construct()
    {
        $this->name = "hoge";
    }

    public function getName()
    {
        return $this->name;
    }
    public function setname($name)
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        echo "Hello " . $this->name . " !!!" . PHP_EOL;
    }
}