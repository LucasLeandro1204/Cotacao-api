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
        $number = format('666,6666', true);
        $this->assertEquals(6666666, $number);

        $number = format(6666666);
        $this->assertEquals(666.6666, $number);
    }
}
