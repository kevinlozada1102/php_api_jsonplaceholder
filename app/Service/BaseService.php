<?php

namespace App\Service;

interface BaseService {

    public function listarTodos($url);

    public function obtenerPorId($url, $id);

    public function eliminarPorId($url, $id);

    public function obtenerPorIdAdicional($url, $id, $add);

}