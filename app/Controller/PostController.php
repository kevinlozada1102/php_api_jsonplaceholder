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
        $posts = $this->postService->listarTodos('posts');
        $this->view('post_listado',$posts);
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
        if(isset($_REQUEST['id'])){
            $status = $this->postService->eliminarPorId('posts', $_REQUEST['id']);
        }
        if ($status == 200){
            $posts = $this->postService->listarTodos('posts');
            $mensaje = "Importante, el recurso no se eliminará realmente en el servidor, pero se falsificará como si lo fuera.";
            $posts['mensaje'] = $mensaje;
            $this->view('post_listado',$posts);
        } else {

        }
    }

    public function obtener()
    {
        if(isset($_REQUEST['id'])){
            $post = $this->postService->obtenerPorId('posts', $_REQUEST['id']);
            $comments = $this->postService->obtenerPorIdAdicional('posts', $_REQUEST['id'],'comments');
        }
        $post['comentarios'] = $comments;
        $this->view('post_info',$post);
    }

    public function view($vista,$datos){
        $data = $datos;
        require_once  __DIR__ . "/../../resources/views/" . $vista . ".php";

    }
}