<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Товары</title>
</head>
<body>
<section class="container">
    <div class="login">
        <h1>Товары</h1>
            <form method="post" enctype="multipart/form-data" action="products.php">
                <p><input type="text" name="name" value="" placeholder="Название"></p>
                <p><input type="text" name="text" value="" placeholder="Описание"></p>
                <p><input type="text" name="price" value="" placeholder="Цена"></p>
                <p><input type="file" name="photo" value=""></p>
                <p class="submit"><input type="submit" name="commit" value="Добавить"></p>
            </form>
        <p><a href="index.html">Главное меню</a></p>
    </div>
</section>
</body>
</html>