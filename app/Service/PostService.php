<?php

namespace App\Service;
use GuzzleHttp\Client as GuzzleHttp;

class PostService implements BaseService {

    public function listarTodos()
    {
        $cliente = new GuzzleHttp();
        $res =  $cliente->request('GET', 'http://jsonplaceholder.typicode.com/posts');
        return $res->getBody()->getContents();
    }
}