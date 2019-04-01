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
        <div class="addPage-container">
            <div class="topnav-container">
                <ul class="topnav">
                    <div class="menu-header">
                        <?php echo $Lang['menu'];?>
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
                        <a href="#about">
                            <?php echo $Lang['about_us']; ?>
                        </a>
                    </li>


                    <div class="switchlang">
                        <div class="en"><a href="addingPage.php?lang=en">en</a></div>
                        <div class="uk"><a href="addingPage.php?lang=ua">ua</a></div>
                    </div>
                </ul>
            </div>
            <div class="add-header">
                <?php echo $Lang['addPage_header'];?>
            </div>
            <div class="addPage-content">
                <div class="form-container">
                    <form action="#" id="passport" method="POST" enctype="multipart/form-data">
                        <legend>
                            <?php echo $Lang['legendGeneralInformation'];?>
                        </legend>

                        <p><label for="restoration_passport_number"><?php echo $Lang['registrationPassportNumber'];?></label><input autofocus type="number" placeholder="321451243" id="restoration_passport_number"></p>
                        <p><label for="inventory_number"><?php echo $Lang['inventoryNumber'];?></label><input type="number" id="inventory_number" placeholder="321451243"></p>
                        <p><label for="inventory_number"><?php echo $Lang['recievingActNumber'];?></label><input type="number" id="inventory_number" placeholder="321451243"></p>
                        <p><label for="inventory_number"><?php echo $Lang['from'];?> </label><input type="date" id="inventory_number" placeholder="321451243"></p>
                        <p><label for="inventory_number"><?php echo $Lang['nameOfRestorationInstitution'];?> </label><input type="text" id="inventory_number" placeholder=""></p>
                        <p><label for="inventory_number"><?php echo $Lang['departmentName'];?> </label><input type="text" id="inventory_number" placeholder=""></p>

                        <legend>
                            <?php echo $Lang['legendTypologicalBelonging'];?>
                        </legend>
                        <p><label for="definition_kind_of_object"><?php echo $Lang['definition'];?></label><input type="text" id="inventory_number" placeholder=""></p>
                        <p><label for="type_of_object"><?php echo $Lang['type'];?></label>
                            <select name="Вид пам’ятки" id="">
                            <option disabled selected><?php echo $Lang['disabledSelector'];?></option>
                            <option value="t2"><?php echo $Lang['t2'];?></option>
                            <option value="t3"><?php echo $Lang['t3'];?></option>
                            <option value="t4"><?php echo $Lang['t4'];?></option>
                            <option value="t5"><?php echo $Lang['t5'];?></option>
                            <option value="t6"><?php echo $Lang['t6'];?></option>
                        </select>
                        </p>

                        <legend>
                            <?php echo $Lang['legendUploadHeader'];?>
                        </legend>

                        <div class="fl_upld">
                            <label><input id="fl_inp" type="file" name="file"><?php echo $Lang['uploadButton'];?></label>
                            <div id="fl_nm">
                                <?php echo $Lang['defaultFileName'];?>
                            </div>
                        </div>


                        <button type="submit" id="submit"><?php echo $Lang['submitButton'];?></button>


                    </form>
                </div>

            </div>
        </div>

        <script src="js/jquery.js"></script>
        <script src="js/main.js"></script>

    </body>

    </html>