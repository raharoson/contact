<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 2/1/19
 * Time: 4:02 PM
 */

namespace App\Tests\Service;


use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

/**
 * Tests relatifs à l'API de validation d'email
 *
 * Class EmailServiceTest
 * @package App\Tests\Service
 */
class EmailServiceTest extends TestCase
{
    /**
     * @var
     */
    protected $client;

    /**
     *
     */
    protected function setUp()
    {
        $this->client = new Client([
            'base_uri' => 'http://www.poo.com'
        ]);
    }

    /**
     *
     */
    public function testEmailValid(): void
    {
        $response = $this->client->get('/api.php', [
            'query' => [
                'email' => 'noarimanana@gmail.com'
            ]
        ]);

        $this->assertEquals(200, $response->getStatusCode());

        $data = json_decode($response->getBody(), true);

        $this->assertArrayHasKey('code_status', $data);

        $this->assertArrayHasKey('message', $data);

        $this->assertEquals(1, $data['code_status']);

        $this->assertEquals('adresse email valide', $data['message']);
    }

    /**
     *
     */
    public function testEmailNotValid(): void
    {
        $response = $this->client->get('/api.php', [
            'query' => [
                'email' => 'noa.com'
            ]
        ]);

        $this->assertEquals(200, $response->getStatusCode());

        $data = json_decode($response->getBody(), true);

        $this->assertArrayHasKey('code_status', $data);

        $this->assertArrayHasKey('message', $data);

        $this->assertEquals(0, $data['code_status']);

        $this->assertEquals('adresse email non valide', $data['message']);
    }

}