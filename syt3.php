<? $reg = ['Введите ваш Email', 'Ввелите ваш номер телефона', 'Введите ваше имя'] ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="syt.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Internet</title>
</head>

<body background="https://i.imgur.com/cHu2yVI.png">
    <font color='purple' size='5'>
        <? echo $reg[0] ?>
    </font>
    <br>
    <input type="text">
    <br>

    <font color='blue' size='5'>
        <? echo $reg[1] ?>
    </font>
    <br>
    <input type="text">
    <br>
    <font color='green' size='5'>
        <? echo $reg[2] ?>
    </font>
    <br>
    <input type="text">
    <a href="http://syt.loc/syt1.php"><button>В начало</button></a>
</body>

</html>
