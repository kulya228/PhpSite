<!DOCTYPE html>
<html>
     <head>
	     <meta charset="utf-8">
	     <title>Cайт-регистрация</title>
	     <link rel="stylesheet" type="text/css" href="css/style.css">
         <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
         <link rel="shortcut icon" type="image/x-icon" href="img/favicon-16x16.png">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather|PT+Sans+Caption:400,700&display=swap">
         <!-- Инструкция для IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Отображать страницу в масштабе 100% -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Нормализация стилей
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">-->
    </head>
    <body>
        <div class="container">
            <?php
                require_once("header.php");
                require_once("menu.php");
            ?>
            <article>
             	<p><a href="index.php">Главная</a> \ Контакты</p>
                <div class="first">
                        <label>Мои профили в социальных сетях:</label>
                        <div class="social-icons">
                            <a href="https://vk.com/gotothedream39" target="_blank"><i class="fab fa-vk"></i></a>   
                            <a href="https://www.instagram.com/kulikov_1207" target="_blank"> 
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.facebook.com/profile.php?id=100007891635928" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                        <label>Тех. поддержка:</label>
                        <div>
                            <a href="https://vk.com/gotothedream39" class="button1" target="_blank">связаться Вконтакте</a>
                        </div>
                    <!--<div class="map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0b7f375492d61e87d72687daae382991cdddd54ed8b1a3c1898a31533ca4f1fc&amp;width=382&amp;height=240&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>-->
                </div>
            </article>
            <?php
                require_once("footer.php");
            ?>
        </div>
    </body>
</html> 