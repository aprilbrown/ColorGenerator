<!doctype html>
<html lang="en">

    <head>
        <title>PHP Generated Colors</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>

    <body>

        <?php
        require_once('./classes/ColorGenerator.php');

        $colorGenerator = new ColorGenerator();

        $colors = $colorGenerator->generateArray(30);
        ?>

        <h1 class="px-5 py-3">
            Randomly Generated Colors
            <small class="text-muted">Change with each refresh.</small>
        </h1>
        <div class="row justify-content-center">
            <?PHP
            $i = 0;
            foreach ($colors as $bg_color => $color_info) {
                $i++;
            ?>
                <div class="col-2 text-center" style="color: <?PHP echo $color_info['text_color'];?>; background-color: <?PHP echo $bg_color;?>;">
                    <p class="h2"><?PHP echo $color_info['text'];?></p>
                    <span class="h5"><?PHP echo strtoupper($bg_color);?></span>
                </div>
            <?PHP
                if($i >= 5){
                    $i = 0;

                    echo('<div class="w-100"></div>');
                }
            }
            ?>
        </div>

        <script language="javascript">
            setTimeout(function(){
                window.location.reload(1);
            }, 30000);
        </script>
    </body>
</html>

