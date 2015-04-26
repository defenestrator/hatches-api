<?php
use Laracasts\Integrated\Extensions\Laravel as IntegrationTest;

class ExampleIntegrationTest extends IntegrationTest
{

    /**
     * A basic functional test example.
     *
     * @return void
     */
    protected $baseUrl = 'http://localhost:8887';

    public function testBasicExample()
    {
        $response = $this->call('GET', '/');

        $this->assertEquals(200, $response->getStatusCode());
    }

}
