<?php


namespace App\Controller;


use App\Entities\Album;

class AlbumController implements BaseController
{

    public function index()
    {
        $albunes = Album::get();
        $this->view('album_list', $albunes);
    }

    public function obtener()
    {
        // TODO: Implement obtener() method.
    }

    public function createupdate()
    {
       if ($_REQUEST['id'] > 0) {
           $album = Album::find($_REQUEST['id']);
           $album->title = $_REQUEST['title'];
           $album->save();
           $this->index();
       } else {
           $album = new Album();
           $album->title = $_REQUEST['title'];
           $album->save();
           $this->index();
       }

    }

    public function delete()
    {
        if(isset($_REQUEST['id'])){
            $album = Album::find($_REQUEST['id']);
            $album->delete();
            $this->index();
        }
    }

    public function formulario()
    {
        if(isset($_REQUEST['id'])){
            $album = Album::find($_REQUEST['id']);
            $this->view('album_form',$album);
        } else {
            $this->view('album_form');
        }
    }

    public function view($vista,$datos = null){
        $data = $datos;
        require_once  __DIR__ . "/../../resources/views/" . $vista . ".php";
    }
}