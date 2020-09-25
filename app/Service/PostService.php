<?php

namespace App\Service;
use App\GuzzleRequest;

class PostService extends GuzzleRequest implements BaseService {

    public function listarTodos($url)
    {
        return $this->get('http://jsonplaceholder.typicode.com/'.$url);
    }

    public function obtenerPorId($url, $id)
    {
        return $this->get('http://jsonplaceholder.typicode.com/'.$url.'/'.$id);
    }

    public function obtenerPorIdAdicional($url, $id, $add)
    {
        return $this->get('http://jsonplaceholder.typicode.com/'.$url.'/'.$id.'/'.$add);
    }

    public function eliminarPorId($url, $id)
    {
        return $this->delete('http://jsonplaceholder.typicode.com/'.$url.'/'.$id);
    }
}