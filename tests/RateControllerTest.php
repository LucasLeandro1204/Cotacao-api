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

        $this->get('cotacao/USD')
            ->seeStatusCode(200);

        $this->get('cotacao/USD;EUR')
            ->seeStatusCode(200)
            ->assertJson('{"type": "A", "initials": "USD", "type": "B", "initials": "EUR"}');
    }
}
