<?php include("components/header.php")?>
<div class="container">
    <div class="row">

        <h3>Formulario</h3>

        <?php
            print_r("
            <div class=\"row\">
            <form class=\"col s12\" action='?c=Album&a=createupdate&id={$data["id"]}' method='POST' enctype='multipart/form-data'>
            <div class=\"row\">
                <div class='input-field col s6'>
                <input id='last_name' type='text' name='title' required value='{$data["title"]}'>
                <label for='last_name'>Titulo</label>
            </div>
        </div>
        <button class='btn waves-effect waves-light  blue darken-4' type='submit'>Guardar
            <i class='material-icons right'>save</i>
        </button>

        </form>
    </div>
            ");
        ?>

        <!--<div class="row">
            <form class="col s12" action="?c=Album&a=createupdate&id=<?php /*$data["id"] */?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="input-field col s6">
                <input id="last_name" type="text" name="title" class="validate" required value="<?/*= $data["id"] */?>">
                <label for="last_name">Titulo</label>
            </div>
        </div>
        <button class='btn waves-effect waves-light  blue darken-4' type='submit'>Guardar
            <i class='material-icons right'>save</i>
        </button>

        </form>
    </div>--->

    </div>
</div>
<?php include("components/footer.php")?>

