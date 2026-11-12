<?php
require_once (__DIR__ . '/data.php');
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Spår</title>
        <meta
        name="SPÅR"
        content="A sustainable brand for shoes and more."
        />
        <link rel="stylesheet" href="stylej.css" />
        <script src="scriptj.js" defer></script>
    </head>

<?php

?>
            <section class="karusell">
                <div class="rubrik">
                    <h2>Varje rörelse lämnar ett spår. Låt ditt göra skillnad.</h2>
                    <h4>Vi att framtidens rörelse börjar med medvetna val. 
                        Genom att förena innovativ teknik, funktionell design och hållbarhet 
                        vill vi skapa produkter som hjälper dig att utvecklas, på dina egna villkor.</h4>
                </div>
            
                <div class="container-karusell">
                    <?php
                    foreach ($cards as $card) {
                    ?>
                    <div class="card">
                         <div class="bubbles">
                            <div class="bubble">
                                <div class="plupp"></div>
                                    <p><?php echo $card['name']?></p>
                                    </div>
                                    <div class="bubbleround">
                                        <div class="plus"></div>
                                    </div>
                        </div>
                        <h5><?php echo $card['text']?></h5>
                    </div>
                    <?php ; } ?>
                </div>
            </section>