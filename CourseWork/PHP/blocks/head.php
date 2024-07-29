<!doctype html>
<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../CSS/Main.css">
    <link rel="stylesheet" href="<?php echo $StyleThispage ?>">
    <title><?php echo $title ?></title>
  </head>
  <body>
    <script src="..//JS/Index.js"></script>
    <!--Шапка сайта-->
    <header>
        <!--Блок с иконкой-->
        <div class="IconSite" onclick="HrefOnIndex()">
            <img src="..//IMG/Icon/LogoSite.png"/>
        </div>
        <!--название сайта-->
        <div class="NameSite" onclick="HrefOnIndex()">
                DUNGEONS & DRAGONS
        </div>
        <!--навигация-->
        <div class="NavigationSite">
            <ul>
                <li>
                    <button onclick="HrefOnListOfPlaybleRaces()">Список игровых рас</button>
                </li>
                <li>
                    <button onclick="HrefOnRulesOfTheGame()">Правила игры</button>
                </li>
                <li>
                    <button onclick="HrefOnCharacterSheet()">Лист персонажа</button>
                </li>
            </ul>
        </div>
    </header>