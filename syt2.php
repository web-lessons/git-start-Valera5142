<?
$array=['Урядов Валерий Сергеевич','Работа над проектами: Создание кликера, множество сайтов.','Прохождение полного обучения в школе Movavi.']
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="syt.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Internet</title>
</head>

<body background="https://previews.123rf.com/images/popaukropa/popaukropa1704/popaukropa170400175/76931644-joystick-retro-seamless-pattern-gampad-game-console-8-bit-texture-retro-video-game-control-backgroun.jpg">
    <div class="square5">

        <h1>
            <p class='textcent'>
                <font color='white'><?echo $array[0]?></font>
            </p>
        </h1>
    </div>
    <font color='blue' size='5'>
        <?echo $array[1]?><br> <?echo $array[2]?><br>
    </font>
    <a href="http://syt.loc/syt3.php"><button>Оформить заявку</button></a>
    <script src="syt.js"></script>
</body>

</html>
