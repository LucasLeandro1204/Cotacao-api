<?php

class HelpersTest extends TestCase
{
    /**
     * Test Helpers
     *
     * @return void
     */
    public function testHelpers()
    {
        $numbers = [
            ['initial' => '1,2345', 'int' => 12345, 'float' => 1.2345],
            ['initial' => '12,3456', 'int' => 123456, 'float' => 12.3456],
            ['initial' => '123,4567', 'int' => 1234567, 'float' => 123.4567],
            ['initial' => '32,000392002', 'int' => 320003, 'float' => 32.0003],
            ['initial' => '666,666666666', 'int' => 6666666, 'float' => 666.6666],
        ];

        foreach ($numbers as $number) {
            $int = format($number['initial'], true);
            $float = format($number['int']);

            $this->assertEquals($number['int'], $int);
            $this->assertEquals($number['float'], $float);
        }
    }
}
