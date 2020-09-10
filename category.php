<?php
$zapis = $_GET['zapis'];
if ($zapis != '') {
    if ($zapis == "false") {
        echo '<script>alert("Вы ввели пустое значение");</script>';
    } else {
        echo '<script>alert("Запись создана");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Категории</title>
</head>
<body>
<section class="container">
    <div class="login">
        <h1>Категории</h1>
        <form method="post" action="categories.php">
            <p><input type="text" name="name" value="" placeholder="Название категории"></p>
            <p class="submit"><input type="submit" name="commit" value="Добавить"></p>
        </form>
        <p><a href="index.html">Главное меню</a></p>
    </div>
</section>
</body>
</html>