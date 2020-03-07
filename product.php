<?require_once 'hedder.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Internet</title>
</head>
<body>
<?
$host = '127.0.0.1';
$login = 'root';
$password = '';
$database = 'databaser';
$mysqli = mysqli_connect($host, $login, $password, $database);
$query = 'SELECT * FROM `products`';
$result = mysqli_query($mysqli, $query);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<div class='row'>
    <?
    foreach ($products as $key => $product) : ?>
        <div class='col'>
            <div class='card'>
                <img src="<?= $product['img'] ?>" class='card-ing-top' height="292px" width="292px">
                <div class='card-body'>
                    <h2 class='card-title'><?= $product['name'] ?></h2>
                    <p class='card-text'><?= $product['description'] ?></p>
                    <p class='card-text'><?= $product['price'].'$' ?></p>
                    <a href="/product.php?id=<?$product['id']?>">Перейти</a>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>
</body>