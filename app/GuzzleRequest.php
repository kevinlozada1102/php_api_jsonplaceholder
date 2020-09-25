<?php

namespace App;
use GuzzleHttp\Client;

class GuzzleRequest
{
    public $cliente;

    public function __construct(){
        $this->cliente = new Client();
    }

    protected function get($url) {
        $res = $this->cliente->request('GET', $url);
        return json_decode($res->getBody()->getContents(),true);
    }

    protected function delete($url) {
        $res = $this->cliente->request('DELETE', $url);
        return json_decode($res->getStatusCode(),true);
    }

}