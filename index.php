<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fifty Shades</title>
</head>
<body>
    <?php
        for($i=0; $i < 50;$i++)
        {
            $fade = $i *4;
            echo "<div class='square' style='background-color:rgb(${fade},${fade},${fade}); height:20px; width:20px; margin:3px; '></div>";
        }
    ?>
</body>
</html>