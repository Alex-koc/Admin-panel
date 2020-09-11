<?php
require_once 'mysql.php';

$id = $_GET['id'];

$sql = "SELECT * FROM `category` WHERE id=$id";
$result = $pdo->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Категории</title>
</head>
<body>
<section class="container">
    <div class="login">
        <h1>Таблица категорий</h1>
        <table class = "table table-borderless">
            <thead class="text-center">
            <tr>
                <th></th>
                <th>Название</th>
                <th>Авторы</th>
                <th>Жанры</th>
                <th>Описание</th>
                <th>Артикул</th>
            </tr>
            <?php

            $result = $stmt1->fetch();
            while ($row1 = $stmt1->fetch()){

            }

        while ($row = $result->fetch())
        {

            echo "<tr>";
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td><a href="d.php">Удалить</a></td>';
            echo "</tr>";

        }

?>
        </table>
        <br>
        <form action="category.php">
            <button>Добавить категорию</button>
        </form>
        <form action="index.html">
            <br>
            <button>Главное меню</button>
        </form>
    </div>
</section>
</body>
</html>