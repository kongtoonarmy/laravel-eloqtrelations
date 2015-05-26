<?php

class MyTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');

		//$response = $this->call('GET', 'user/profile');

		$this->assertEquals(200, $response->getStatusCode());

	}

	public function testSomethingIsTrue()
    {
		$response = $this->call($method, $uri, $parameters, $cookies, $files, $server, $content);
        $this->assertTrue(true);
    }



}
