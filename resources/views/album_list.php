<?php include("components/header.php")?>
<div class="container">
    <div class="row">
        <h3>Listado de Album - Base de Datos</h3>
        <a class='btn waves-effect waves-light  red darken-1' type='submit' name='action' href='?c=Album&a=formulario'>Crear Album
            <i class="material-icons right">create_new_folder</i>
        </a>
        <br>
        <?php
        foreach ($data as $post) {
            if (isset($post["id"])){
                print_r( " <div class=\"col m12\">
                                                <div class=\"card horizontal\">
                                                    <div class=\"card-stacked\">
                                                        <div class=\"card-content\">
                                                            <a class=\"card-title activator grey-text text-darken-4\">{$post["title"]}</a>
                                                           
                                                        </div>
                                                        <div class=\"card-action\">
                                                            <a class='btn waves-effect waves-light  blue darken-4' type='submit' name='action' href='?c=Album&a=formulario&id={$post["id"]}'>Editar
                                                                <i class=\"material-icons right\">edit</i>
                                                            </a>
                                                            <a class='btn waves-effect waves-light  red darken-1' type='submit' name='action' href='?c=Album&a=delete&id={$post["id"]}'>Eliminar
                                                                <i class=\"material-icons right\">delete</i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>"
                );
            }
        }
        ?>
    </div>
</div>
<?php include("components/footer.php")?>

