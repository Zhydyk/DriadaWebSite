<?php
    
?>
<html>

<head>
    <title>Title</title>
    <link rel="stylesheet" href="css/style4.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    
</head>

<body>
    <div class="wrapper">    
        <div class="main-wrapper">
            <div class="main-text5">
                <div class="main-title">
                    Анкета
                </div>
            </div>

            <div class="form">
               <form name="forma" action="post.php" method="POST">
                    Ім'я: <br><input name="name" type="text" required><br>
                    Прізвище: <br><input name="surename" type="text" required><br>
                    По-батькові: <br><input name="patronimic" type="text" required><br>
                    Дата народження: <br><input name="birthday" type="date" required><br>
                    Домашня адреса: <br><input name="adress" type="text" required><br>
                    ПІБ та контактний телефон батьків: <br><input name="parentname" type="text" required><br>
                    Розмір верхнього одягу(футболка):<br>
                    <input name="size" type="radio" value="XS">XS<br>
                    <input name="size" type="radio" value="S">S<br>
                    <input name="size" type="radio" value="M">M<br>
                    <input name="size" type="radio" value="L">L<br>
                    <input name="size" type="radio" value="XL">XL<br>
                    <input name="size" type="radio" value="XXL">XXL<br>
                    Як ви дізнались про наш табір?: <br>
                    <input name="info" type="radio" value="Від друзів(знайомих)">Від друзів(знайомих):<br>
                    <input name="info" type="radio" value="Інтернет">Інтернет <br>
                    <input name="info" type="radio" value="Рекламний флаєр">Рекламний флаєр <br>
                    Стать: <br>
                    <input name="sex" type="radio" value="Хлопчик">Хлопчик<br> 
                    <input name="sex" type="radio" value="Дівчинка">Дівчинка<br>
                    
                        <a href="#" id="zayizd" onclick="openbox('box'); return false">Обрати заїзд</a>
                            <div id="box" style="display: none;">
                                <div class="wrapper2">
                                <div class="background1">    
                                    <div class="main-wrapper2">
                                      <div class="background-color">
                                        <div class="main-text1">
                                            <div class="main-title2">
                                                Червень
                                            </div>
                                            <div class="button-wrapper col-12">
                                              <a class="top-button button" >
                                                <input type="radio" name="zayizdu" value="02.06-09.06 (7 повних днів)
                                                4000 грн">
                                                02.06-09.06 (7 повних днів)<br>
                                                4000 грн
                                              </a>
                                              <a class="top-button button" >
                                                <input type="radio" name="zayizdu" value="21.06-01.07 (10 повних днів)
                                                5500 грн">
                                                21.06-01.07 (10 повних днів)<br>
                                                5500 грн
                                              </a>
                                            </div>
                                        </div>
                                      </div>
                                        <div class="main-text2">
                                          <div class="main-title2">
                                                Липень
                                            </div>
                                            <a class="top-button button">
                                                <input type="radio" name="zayizdu" value="01.07-11.07 (10 повних днів)
                                                5500 грн">
                                                01.07-11.07 (10 повних днів)<br>
                                                5500 грн
                                            </a>
                                            <a class="top-button button" >
                                                <input type="radio" name="zayizdu" value="11.07-21.07 (10 повних днів)
                                                5500 грн">
                                                11.07-21.07 (10 повних днів)<br>
                                                5500 грн
                                            </a>
                                            <a class="top-button button">
                                                <input type="radio" name="zayizdu" value="21.07-31.07 (10 повних днів)
                                                5500 грн">
                                                21.07-31.07 (10 повних днів)<br>
                                                5500 грн
                                            </a>
                                        </div>
                                        <div class="main-text3">
                                          <div class="main-title2">
                                                Серпень
                                            </div>
                                            <a class="top-button button" >
                                                <input type="radio" name="zayizdu" value="31.07-10.08 (10 повних днів)
                                                5500 грн">
                                                31.07-10.08 (10 повних днів)<br>
                                                5500 грн
                                            </a>
                                            <a class="top-button button" >
                                                <input type="radio" name="zayizdu" value="10.08-20.08 (10 повних днів)
                                                5500 грн">
                                                10.08-20.08 (10 повних днів)<br>
                                                5500 грн
                                            </a>
                                            <a class="top-button button" >
                                                <input type="radio" name="zayizdu" value="20.08-30.08 (10 повних днів)
                                                5500 грн">
                                                20.08-30.08 (10 повних днів)<br>
                                                5500 грн
                                            </a>
                                        </div>
                                      </div>
                                    </div>
                                </div>    
                                <input name="submit" type="submit"  value="Відправити"> 
                            </div>

                            <script type="text/javascript">
                                function openbox(id){
                                    display = document.getElementById(id).style.display;
                                    if(display=='none'){
                                       document.getElementById(id).style.display='block';
                                    }else{
                                       document.getElementById(id).style.display='none';
                                    }
                                }
                            </script>
                    
                </form>
        </div>
    </div>
</body>

</html>

