<?php

namespace Cryptommer\Smsir\Classes;

use Cryptommer\Smsir\Exceptions\HttpException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use function __;
use function config;

class Smsir {

    private const BASEURL = 'https://api.sms.ir/';

    private Client $client;
    public $LineNumber;

    public function __construct() {
        $this->client = new Client([
            'base_uri' => self::BASEURL,
            'headers' =>[
                'X-API-KEY' => config('smsir.api-key'),
                'ACCEPT' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ]);
        $this->LineNumber = config('smsir.line-number');
    }

    /**
     * Sending Messages
     * @return Send
     */
    public function Send(): Send {
        return new Send($this);
    }

    /**
     * Get Reports
     * @return Report
     */
    public function Report(): Report {
        return new Report($this);
    }

    /**
     * @return Setting
     */
    public function Setting(): Setting {
        return new Setting($this);
    }

    /**
     * @param string $path
     * @param array|null $params
     * @return mixed
     * @throws GuzzleException
     * @throws HttpException
     * @throws \JsonException
     */
    public function post(string $path, array $params = []) {
        $response = $this->client->post($path, ['body' => json_encode($params, JSON_THROW_ON_ERROR)]);
        if ($response->getStatusCode() !== 200) {
            throw new HttpException(__('smsir.error.'.$response->getStatusCode()));
        }
        return json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @param string $path
     * @param array|null $params
     * @return mixed
     * @throws GuzzleException
     * @throws HttpException
     * @throws \JsonException
     */
    public function get(string $path, array $params = []) {
        $response = $this->client->get($path, ['body' => json_encode($params, JSON_THROW_ON_ERROR)]);
        if ($response->getStatusCode() !== 200) {
            throw new HttpException(__('smsir.error.'.$response->getStatusCode()));
        }
        return json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @param string $path
     * @param array $params
     * @return mixed
     * @throws GuzzleException
     * @throws HttpException
     * @throws \JsonException
     */
    public function delete(string $path, array $params = []) {
        $response = $this->client->delete($path, ['body' => json_encode($params, JSON_THROW_ON_ERROR)]);
        if ($response->getStatusCode() !== 200) {
            throw new HttpException(__('smsir.error.'.$response->getStatusCode()));
        }
        return json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
    }


}
