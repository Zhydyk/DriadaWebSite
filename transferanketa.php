
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
                    Бланк Трансферу
                </div>
            </div>

            <div class="form">
               <form name="forma" action="transfer.php" method="POST">
                    Ім'я: <br><input name="name" type="text" required><br>
                    Прізвище: <br><input name="surename" type="text" required><br>
                    По-батькові: <br><input name="patronimic" type="text" required><br>
                    Дата народження: <br><input name="birthday" type="date" required><br>
                    ПІБ та контактний телефон батьків: <br><input name="parentname" type="text" required><br>
                    Трансфер на базу з:<br>
                    <input name="transfer" type="radio" value="Києва">Києва<br>
                    <input name="transfer" type="radio" value="Івано-Франківська">Івано-Франківська<br>
                    Трансфер назад до: <br>
                    <input name="info" type="radio" value="Києва">Києва<br>
                    <input name="info" type="radio" value="Івано-Франківська">Івано-Франківська<br>
                    <p>Дитина, яку перевозимо ми, повинна мати з собою <br> 
                        оригінал свідоцтва про народження.</p>
                    <h4>Вартість трансфера:</h4>
                    <p>Київ — Івано-Франківськ — Люча — Івано-Франківськ — Київ: 700 грн<br>Івано-Франківськ – Люча – Івано-Франківськ: 300 грн</p>
                        <input name="submit" type="submit" value="Додати запис"> 


                    
                </form>
        </div>
    </div>
</body>

</html>

