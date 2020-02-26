<? $arr=['Приветстуем тебя на нашем сайте, где ты можешь заказать уроки программирования.','Цена занятия 1000 рублей. 3 часа длится занятие.','Оставляй заявку, мы тебе перезвоним, договоримся о времяни, теме уроков.','Имя учителя: Урядов Валерий. Стаж работы: 1 год.']
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="syt.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Internet</title>
</head>

<body background="https://petitspixels.com/blg/wp-content/uploads/2017/11/8-bit-skulls-and-bones-pattern-red-petitspixels.png">
    <div class="row">
        <div class="col">
            <div class='square'>
                <h1>
                    <p align='center'><?echo $arr[0]?></p>
                </h1>
            </div>
            <div class='square3'>
                <h1>
                    <p align='center'><? echo $arr[1]?></p>
                </h1>
            </div>
        </div>
        <div class='col'>
            <div class='square2'>
                <h1>
                    <p align='center'><?echo $arr[2]?></p>
                </h1>
            </div>
            <div class='square4'>
                <h1>
                    <p align='center'><?echo $arr[3]?>

                    </p>
                </h1>
            </div>
        </div>
    </div>

    <a href="http://syt.loc/syt2.php"><button>Далее</button></a>

    <script src="syt.js"></script>
</body>

</html>