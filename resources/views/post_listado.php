<?php include("components/header.php")?>
    <div class="container">
        <div class="row">
                <h3>Listado de Post - API</h3>
                <!--<a class='btn waves-effect waves-light  red darken-1' type='submit' name='action' href='?c=Post&a=formulario'>Crear Post
                    <i class="material-icons right">create_new_folder</i>
                </a>-->
            <br>
                <?php
                    if (isset($data["mensaje"])) {
                        echo "
                                <script>
                                    var texto ='<span>{$data["mensaje"]}</span>'
                                    M.toast({html: texto, classes: 'rounded'});
                                </script>";
                    }
                    foreach ($data as $post) {
                        if (isset($post["id"])){
                        print_r( " <div class=\"col m12\">
                                                <div class=\"card horizontal\">
                                                    <div class=\"card-stacked\">
                                                        <div class=\"card-content\">
                                                            <a class=\"card-title activator grey-text text-darken-4\" href=\"?c=Post&a=obtener&id={$post["id"]}\">{$post["id"]}. {$post["title"]}</a>
                                                           
                                                        </div>
                                                        <div class=\"card-action\">
                                                            <a class='btn waves-effect waves-light  red darken-1' type='submit' name='action' href='?c=Post&a=delete&id={$post["id"]}'>Eliminar
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
