<?php
@session_start();
// Массив доступных для выбора языков
$LangArray = array("ua", "en");
// Язык по умолчанию
$DefaultLang = "ua";
// Если язык уже выбран и сохранен в сессии отправляем его скрипту
if (@$_SESSION['NowLang']) {
    // Проверяем если выбранный язык доступен для выбора
    if (!in_array($_SESSION['NowLang'], $LangArray)) {
        // Неправильный выбор, возвращаем язык по умолчанию
        $_SESSION['NowLang'] = $DefaultLang;
    }
} else {
    $_SESSION['NowLang'] = $DefaultLang;
}
// Выбранный язык отправлен скрипту через GET
$language = addslashes($_GET['lang']);
if ($language) {
    // Проверяем если выбранный язык доступен для выбора
    if (!in_array($language, $LangArray)) {
        // Неправильный выбор, возвращаем язык по умолчанию
        $_SESSION['NowLang'] = $DefaultLang;
    } else {
        // Сохраняем язык в сессии
        $_SESSION['NowLang'] = $language;
    }
}
// Открываем текущий язык
$CurentLang = addslashes($_SESSION['NowLang']);
include_once("lang/lang." . $CurentLang . ".php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Бібліотека</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Pattaya" rel="stylesheet">
    <link href="fontawesome-free-5.6.3-web/css/all.css" rel="stylesheet">
    <!--load all styles -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="about-top-container">
        <div class="topnav-container">
            <ul class="topnav">
                <div class="menu-header">
                    <?php echo $Lang['menu']; ?>
                </div>
                <div class="icon-wrapper">
                    <div class="menu__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <li class="invisible">
                    <a href="index.php">
                        <?php echo $Lang['home_page']; ?>bnm,
                    </a>
                </li>
                <li class="invisible">
                    <a href="#news">
                        <?php echo $Lang['news']; ?>
                    </a>
                </li>
                <li class="invisible">
                    <a href="#contacts">
                        <?php echo $Lang['contact_menu']; ?>
                    </a>
                </li>
                <li class="invisible">
                    <a href="#about">
                        <?php echo $Lang['about_us']; ?>
                    </a>
                </li>


                <div class="switchlang">
                    <div class="en"><a href="about.php?lang=en">en</a></div>
                    <div class="uk"><a href="about.php?lang=ua">ua</a></div>
                </div>
            </ul>
        </div>
</body>
<html>