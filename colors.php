<html>

    <head>
        <title>PHP Generated Colors</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <style>
            h1 {
                font-size: 50px;
            }

            p {
                font-size: 20px;
            }

            div {
                padding: 10px;
                text-align: center;
            }

            span {
                margin: 5px;
                font-size: 30px;
                font-weight: bold;
            }
        </style>
    </head>

    <body>

        <?php
        require_once('./classes/ColorGenerator.php');

        $colorGenerator = new ColorGenerator();

        $colors = $colorGenerator->generateArray(1);
        ?>

        <h1>Randomly Generated Colors</h1>
        <p>Each time you refresh the page, they will change.</p>
        <?PHP
        foreach ($colors as $bg_color => $color_info) {
        ?>
            <div style="color: <?PHP echo $color_info['text_color'];?>; background-color: <?PHP echo $bg_color;?>;">
                <p><?PHP echo $color_info['text'];?></p>
                <span><?PHP echo strtoupper($bg_color);?></span>
            </div>
        <?PHP
        }
        ?>

        <script language="javascript">
            setTimeout(function(){
                window.location.reload(1);
            }, 30000);
        </script>
    </body>
</html>

