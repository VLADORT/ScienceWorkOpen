<?php
@session_start();
// Массив доступных для выбора языков
$LangArray = array("ua", "en");
// Язык по умолчанию
$DefaultLang = "ua";
// Если язык уже выбран и сохранен в сессии отправляем его скрипту
if(@$_SESSION['NowLang']) {
	// Проверяем если выбранный язык доступен для выбора
	if(!in_array($_SESSION['NowLang'], $LangArray)) {
		// Неправильный выбор, возвращаем язык по умолчанию
		$_SESSION['NowLang'] = $DefaultLang;
	}
}
 else {
 	$_SESSION['NowLang'] = $DefaultLang;
 }
// Выбранный язык отправлен скрипту через GET
$language = addslashes($_GET['lang']);
if($language) {
	// Проверяем если выбранный язык доступен для выбора
	if(!in_array($language, $LangArray)) {
		// Неправильный выбор, возвращаем язык по умолчанию
		$_SESSION['NowLang'] = $DefaultLang;
	}
	 else {
	 	// Сохраняем язык в сессии
	 	$_SESSION['NowLang'] = $language;
	 }
}
// Открываем текущий язык
$CurentLang = addslashes($_SESSION['NowLang']);
include_once ("lang/lang.".$CurentLang.".php");
?>
    <!DOCTYPE html>
    <html lang="uk">

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
        <div class="container-logo">
            <div class="rotate-left"></div>
            <div class="header-top">
                <?php echo $Lang['header_top']; ?>
            </div>
            <div class="underline-header"></div>
            <div class="top-button-container">
                <div class="top-button button-first" onclick="location.href = 'addingPage.php'">
                    <?php echo $Lang['addingPage']; ?>
                </div>
                <div class="top-button button-second">
                    <?php echo $Lang['go_to_library']; ?>
                </div>
            </div>
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
                        <a href="#home">
                            <?php echo $Lang['home_page']; ?>
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
                        <a href="about.php">
                            <?php echo $Lang['about_us']; ?>
                        </a>
                    </li>


                    <div class="switchlang">
                        <div class="en"><a href="index.php?lang=en">en</a></div>
                        <div class="uk"><a href="index.php?lang=ua">ua</a></div>
                    </div>
                </ul>
            </div>

            <div class="rotate-right"></div>
            <div class="rotate-left"></div>

        </div>
        <div class="middle-content">
            <div class="mid-header">
                <span>
                <?php echo $Lang['mid-header']; ?></span>
                <div class="line"></div>
            </div>
            <div class="article-container">
                <div class="article">
                    <i class="fas fa-graduation-cap" style="color: rgb(21, 174, 245);border:5px solid rgb(21, 174, 245);border-radius: 50%;
"></i>
                    <span style="color: rgb(21, 174, 245)"><?php echo $Lang['education']; ?></span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, ullam adipisci blanditiis vitae laboriosam quo praesentium itaque quaerat, temporibus aut vero, consequuntur culpa laborum molestiae similique distinctio aperiam quod
                        eaque?
                    </p>
                </div>
                <div class="article">
                    <i class="fas fa-project-diagram" style="color: rgb(40, 245, 21);border:5px solid rgb(40, 245, 21);border-radius: 50%;
"></i>
                    <span style="color: rgb(40, 245, 21)"><?php echo $Lang['science']; ?></span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, ullam adipisci blanditiis vitae laboriosam quo praesentium itaque quaerat, temporibus aut vero, consequuntur culpa laborum molestiae similique distinctio aperiam quod
                        eaque?
                    </p>
                </div>
                <div class="article">
                    <i class="fas fa-palette" style="color: rgb(245, 103, 21);border:5px solid rgb(245, 103, 21);border-radius: 50%;"></i>
                    <span style="color: rgb(245, 103, 21)"><?php echo $Lang['art']; ?></span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, ullam adipisci blanditiis vitae laboriosam quo praesentium itaque quaerat, temporibus aut vero, consequuntur culpa laborum molestiae similique distinctio aperiam quod
                        eaque?
                    </p>
                </div>
                <div class="article">
                    <i class="fas fa-gopuram" style="color: rgb(255, 217, 1);border:5px solid rgb(255, 217, 1);border-radius: 50%;
"></i>
                    <span style="color: rgb(255, 217, 1)"><?php echo $Lang['culture']; ?></span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, ullam adipisci blanditiis vitae laboriosam quo praesentium itaque quaerat, temporibus aut vero, consequuntur culpa laborum molestiae similique distinctio aperiam quod
                        eaque?
                    </p>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="bottom-header">
                <span><?php echo $Lang['analysis']; ?></span>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis reiciendis laudantium delectus ipsa repellat laboriosam iusto id consectetur nulla minima.</p>
            </div>
            <div class="bottom-content">
                <div id="scatterchart_material"></div>
                <div class="algorythms">
                    <span><?php echo $Lang['algorythms']; ?></span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nesciunt harum rem? Necessitatibus natus error beatae minus, rem nemo quidem? Asperiores optio facilis debitis ullam eveniet quod voluptas nihil quos.</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-top-content">
                <span>
    EXPERIENCE NEW TECHNOLOGY
</span>
            </div>
            <div class="footer-bot-content">
                <div class="footer-nav">
                    <a href="#">                            <?php echo $Lang['contact_menu']; ?>
</a>
                    <a href="addingPage.php">                    <?php echo $Lang['addingPage']; ?>
</a>
                    <a href="#">                            <?php echo $Lang['about_us']; ?>
</a>
                    <a href="http://www.univ.kiev.ua/">univ.hiev</a>
                </div>


                <div class="fit-container" onclick="window.location.href = 'http://fit.univ.kiev.ua/'">
                    <span>
    Taras Shevchenko National University of Ukraine<br>
    Faculty of Information Technology
                    </span>
                    <div class="footer-item">
                        <div class="fit"></div>

                    </div>
                </div>
            </div>
            <div class="author">Developed by NIT Department</div>
        </div>
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="js/main.js"></script>
    </body>

    </html>