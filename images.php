<?php
// Получение значения параметра id
$id = $_GET['id'];

// Получение информации о выбранной картинке (замените этот код на вашу логику получения данных)
$imageData = array(
  '1' => array(
    'path' => 'img/01.jpg',
    'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse unde ad quis accusantium? Debitis, ex.'
  ),
  '2' => array(
    'path' => 'img/02.jpg',
    'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse unde ad quis accusantium? Debitis, ex.'
  ),
  '3' => array(
    'path' => 'img/03.jpg',
    'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse unde ad quis accusantium? Debitis, ex.'
  ),
  '4' => array(
    'path' => 'img/04.jpg',
    'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse unde ad quis accusantium? Debitis, ex.'
  ),
  '5' => array(
    'path' => 'img/05.jpg',
    'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse unde ad quis accusantium? Debitis, ex.'
  ),
  '6' => array(
    'path' => 'img/06.jpg',
    'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse unde ad quis accusantium? Debitis, ex.'
  ),
  '7' => array(
    'path' => 'img/07.jpg',
    'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse unde ad quis accusantium? Debitis, ex.'
  ),
  '8' => array(
    'path' => 'img/08.jpg',
    'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse unde ad quis accusantium? Debitis, ex.'
  ),
);

// Проверка наличия выбранной картинки
if (isset($imageData[$id])) {
  $imagePath = $imageData[$id]['path'];
  $imageDescription = $imageData[$id]['description'];
} else {
  // Если выбранная картинка не найдена, можно выполнить какое-то действие, например, перенаправление на страницу ошибки
  header('Location: error.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/image.css">
    <link rel="icon" type="image/png" href="img/logo/favicon.png">
    <title>Ilona Koroman Arts</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container">
                <div class="header__menu menu">
                    <div class="header__logo"><a href='index.html'><img src="img/logo/logo.jpg" alt="" class="header__logo-pic"></a></div>
                    <nav class="menu__body">
                        <ul class="menu__list">
                            <li class="menu__item"><a href="index.html" class="menu__link">Back to main page</a></li>
                        </ul>
                    </nav>
                    <button type="button" class="menu__icon icon-menu"><span></span></button>
                </div>
            </div>
        </header>
        <main class="page">
            <div class="page__container">
                <div class="page__image-block">
                    <img src="<?php echo $imagePath; ?>" alt="painting" class="page__image">
                    <p class="page__text"><?php echo $imageDescription; ?></p>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="footer-text">
                All rights reserved @ Ilona Koroman arts
            </div>
        </footer>
    </div>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
</body>

</html>
