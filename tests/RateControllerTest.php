<?php

class RateControllerTest extends TestCase
{
    /**
     * Test RateController
     *
     * @return void
     */
    public function testRateController()
    {
        $this->get('cotacao')
            ->seeStatusCode(200);
    }
}
