<?php include("components/header.php")?>
<div class="container">
    <div class="row">

        <?php

        print_r( " <h3>Post N° {$data["id"]}</h3>
                                    <div class=\"col m12\">
                                            <div class=\"card horizontal\">
                                                <div class=\"card-stacked\">
                                                    <div class=\"card-content\">
                                                        <a class=\"card-title activator grey-text text-darken-4\" href=''>{$data["title"]}</a>
                                                        
                                                        <p>{$data["body"]}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class='container'>
                                            <h4>Comentarios</h4>
                                        </div>
                                        "
        );
        ?>
        <?php
        foreach ($data["comentarios"] as $comment) {
            print_r( "        <div class='container'>
                                            <div class=\"col m12\">
                                                <div class=\"card horizontal\">
                                                    <div class=\"card-stacked\">
                                                        <div class=\"card-content\">
                                                           <p>{$comment["body"]}<p>
                                                           <p><cite>{$comment["email"]}</cite></p>

                                                        </div>
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

