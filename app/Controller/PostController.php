<?php

namespace App\Controller;
use App\Service\PostService;

class PostController implements BaseController {

    private $postService;

    public function __construct(){
        $this->postService = new PostService();
    }

    public function index()
    {
        $posts = $this->postService->listarTodos();
        return json_decode($posts);
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }
}