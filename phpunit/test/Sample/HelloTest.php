<?php
require_once __DIR__ . "/../../vendor/autoload.php";

class HelloTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testSayHello()
    {
        $hello = new \Sample\Hello();

        // check default name
        $this->assertEquals("hoge", $hello->getName());
        $this->expectOutputString("Hello hoge !!!" . PHP_EOL);
        $hello->sayHello();

        // clean out buffer for expectOustputString
        ob_clean();

        // change name
        $hello->setName("fuga");
        $this->assertEquals("fuga", $hello->getName());
        $this->expectOutputString("Hello fuga !!!" . PHP_EOL);
        $hello->sayHello();
    }
}