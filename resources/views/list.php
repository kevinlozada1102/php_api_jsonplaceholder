<?php include("components/header.php")?>
    <div class="container">
        <div class="row">
                <h3>Listado de Post</h3>
                <?php
                    foreach ($productos as $producto) {
                        print_r( " <div class=\"col m12\">
                                                <div class=\"card horizontal\">
                                                    <div class=\"card-stacked\">
                                                        <div class=\"card-content\">
                                                            <span class=\"card-title activator grey-text text-darken-4\">$producto->id. $producto->title</span>
                                                            <p>$producto->body</p>
                                                        </div>
                                                        <div class=\"card-action\">
                                                            <button class=\"btn waves-effect waves-light  blue darken-4\" type=\"submit\" name=\"action\">Editar
                                                                <i class=\"material-icons right\">edit</i>
                                                            </button>
                                                            <button class=\"btn waves-effect waves-light  red darken-1\" type=\"submit\" name=\"action\">Eliminar
                                                                <i class=\"material-icons right\">delete</i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>"
                        );
                    }
                ?>
        </div>
    </div>
<?php include("components/footer.php")?>
