<html>

<head>
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    


</head>

<body>
    <div class="wrapper">
        <div class="bg-image-1">
            <nav class="nav">
                <div class="container">
                    <div id="mainListDiv" class="main_list">
                        <ul class="navlinks">
                            <li>
                                <a href="#">Головна</a>
                            </li>
                            <li>
                                <a href="#foras">Про нас</a>
                            </li>
                            <li>
                                <a href="#book1">Бронювання</a>
                            </li>
                            <li>
                                <a href="#parent">Батькам</a>
                            </li>
                            <li>
                                <a href="vidhyku.php">Відгуки</a>
                            </li>
                        </ul>
                    </div>
                    <span class="navTrigger">
                        <i></i>
                        <i></i>
                        <i></i>
                    </span>
                </div>
            </nav>

            <section class="home">
            </section>

            <script>
                $('.navTrigger').click(function () {
                    $(this).toggleClass('active1');
                    console.log("Clicked menu");
                    $("#mainListDiv").toggleClass("show_list");
                    $("#mainListDiv").fadeIn();
                });
                $(window).scroll(function () {
                    if ($(document).scrollTop() > 50) {
                        $('.nav').addClass('affix');
                        console.log("OK");
                    } else {
                        $('.nav').removeClass('affix');
                    }
                });
            </script>
            <!-- <div id="social">
                    <a href="#" ><i class="fa fa-phone-square" style="font-size:48px;color:#17ae4b;padding:15px;"></i></a><br>
                    <i class="fa fa-facebook-square" style="font-size:48px; color:#17ae4b;padding:15px;"></i><br>
                    <i class="fa fa-instagram" style="font-size:48px;color:#17ae4b;padding:15px;"></i>
                </div>
                
                <script>
                    $(document).ready(function(){
                        $(window).width(function(){
                if($(document).width()<1000){$("#social").css("display","none"); }else{$("#social").css("display", "none");};
            })
                    $(window).scroll(function(){
                    if ($(document).scrollTop() > 200){ $("#social").fadeIn(1500); } else { $("#social").css("display", "none"); };
            })
            
        });
                </script> -->
                
               

            <div class="main-wrapper">
                    
                <div class="main-image-logo">
                    <img src="../img/logo.png" alt="">
                </div>
                <div class="main-text1">
                    <div class="main-subtitle">
                        Літній Відпочинок для дітей
                    </div>
                </div>
                <div class="button-main">
                    <a href="#book1">
                        <div class="button-book"  >Забронювати</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-image-2">
            <div class="main-wrapper-2">
                <div class="main-subtitle-1">
                    <em>Шукаєте місце, де б Ваша дитина могла оздоровитися, знайти нових друзів, отримати масу вражень, розширити свій кругозір та
                    просто гарно провести свої літні канікули?</em>
                </div>
                <div class="main-title-2">
                    Тоді Вам саме до нас!
                </div>
                <div class="main-subtitle-2">
                    «Дріада» — це найкращий спосіб показати Вашим дітям чарівну природу карпат, навчити цінувати та любити її. З нами ваша дитина
                    побуває на мальовничих вершинах та водоспадах, відвідає цікаві екскурсії, буде дихати чистим карпатським
                    повітрям.
                </div>
                <div class="main-subtitle-2">
                    Ми навчаємо дітей правилам поведінки в туристичних походах, основам скелелазання, проводимо цікаві майстер-класи, граємо
                    у веселі ігри. Разом із опануванням туристичних навичок діти приймають участь у творчих конкурсах, вчаться
                    працювати в команді, розвивають свою креативність, відкривають у собі нові таланти та здібності.
                </div>
                <div class="foto-people">
                    <img src="../img/fotopeople.png" alt="">
                </div>
                <div class="main-title-3" id="foras">
                    ПРО НАС
                </div>
                <div class="button-main">
                    
                        <div class="button-book">Програма</div>
                    
                </div>
                <div class="main-blocks">
                    <div class="col-4 right-pad">
                        <div class="main-menu-block">
                            
                                <img class="col-6-img" src="../img/Layer 19.png" alt="">
                                <div class="title-4">
                                    МАНДРІВНИКИ
                                </div>
                                <div class="list">
                                    <ul>
                                        <li>Гора "Камінь Весела"</li>
                                        <li>Озеро Лебедин</li>
                                        <li>На полонину</li>
                                        <li>Шешори</li>
                                    </ul>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-4 right-left-pad">
                        <div class="main-menu-block">
                            
                                <img class="col-6-img" src="../img/Layer 18.png" alt="">
                                <div class="title-4">
                                    ЕКСКУРСІЇ
                                </div>
                                <div class="list">
                                    <ul>
                                        <li>Село Шешори</li>
                                        <li>Маєток Св. Миколая</li>
                                        <li>Місто Косів</li>
                                        <li>Музей коренепластики</li>
                                    </ul>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-4 left-pad">
                        <div class="main-menu-block">
                            
                                <img class="col-6-img" src="../img/Layer 17.png" alt="">
                                <div class="title-4">
                                    ЕКСТРИМ
                                </div>
                                <div class="list">
                                    <ul>
                                        <li>Скелелазання</li>
                                        <li>Пейнтбол</li>
                                        <li>Переправа</li>
                                        <li>Спортивне орієнтування</li>
                                    </ul>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div class="main-blocks-1">
                    <div class="col-4 right-pad">
                        <div class="main-menu-block">
                            
                                <img class="col-6-img" src="../img/Layer 16.png" alt="">
                                <div class="title-4">
                                    МАЙСТЕР-КЛАСИ
                                </div>
                                <div class="list">
                                    <ul>
                                        <li>В'язання вузлів</li>
                                        <li>Складання/розкладання наметів</li>
                                        <li>Розпалювання багаття</li>
                                        <li>Транспортування потерпілого в горах ("кокон")</li>
                                        <li>Побудова шалашів в лісі</li>
                                        <li>Плетіння браслетів</li>
                                    </ul>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-4 right-left-pad">
                        <div class="main-menu-block">
                            
                                <img class="col-6-img" src="../img/Layer 15.png" alt="">
                                <div class="title-4">
                                    СПОРТ
                                </div>
                                <div class="list">
                                    <ul>
                                        <li>Волейбол</li>
                                        <li>Пейнтбольний тир</li>
                                        <li>Настільний теніс</li>
                                        <li>Футбол</li>
                                        <li>Бадмінтон</li>
                                        <li>Естафети</li>
                                    </ul>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-4 left-pad">
                        <div class="main-menu-block">
                            
                                <img class="col-6-img" src="../img/Layer 14.png" alt="">
                                <div class="title-4">
                                    ЗАХОДИ
                                </div>
                                <div class="list">
                                    <ul>
                                        <li>Вечори кіно</li>
                                        <li>Тематичні дискотеки</li>
                                        <li>Вечір мафії</li>
                                        <li>Вечір біля багаття</li>
                                        <li>Шоу талантів</li>
                                        <li>Квести</li>
                                    </ul>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div class="foto-location">
                    <img src="../img/location.png" alt="">
                </div>
                <div class="main-title-5" id="parent">
                    МІСЦЕ ПРОВЕДЕННЯ
                </div>
                <div class="main-subtitle-2">
                    Мальовнича садиба біля підніжжя гори «Камінь Велеса». Івано-Франківська обл., Косівський район, с.Люча
                </div>
                <div class="main-title-5">
                    ЯК ДО НАС ДІСТАТИСЯ
                </div>
                <div class="main-subtitle-2">
                    Автобусом з Івано-Франківська або Коломиї. Ми надаємо послугу трансфера поїздом з Києва до Івано-Франківська,
                    а далі автобусом до бази.
                </div>
                <div class="foto-location">
                    <img src="../img/fotohome.png" alt="">
                </div>
                <div class="main-title-5">
                    ПРОЖИВАННЯ, ХАРЧУВАННЯ
                </div>
                <div class="main-subtitle-2">
                        Діти розміщуються в номерах по 2-4 чол. у дерев’яному корпусі.
                        Є номери з окремими санвузлами (душ, туалет, умивальник), 
                        або 1 санвузол на блок (2 номера), цілодобово є гаряча вода. Навколо корпусу є велика територія, на якій розміщені: волейбольне поле, пейнтбольне поле, альтанка, є окрема велика зала для занять та проведення дискотек, поряд протікає річка.
                        Харчування 5-разове, збалансоване, різноманітне.
                </div>
                <!-- <div class="main-title-6">
                    Зразок меню на день
                </div>
                <div class="main-subtitle-6">
                    <ul>
                        <li>Сніданок:</li>
                        <li>Каша молочна гречана</li>
                        <li>Млинці зізгущеним молоком</li>
                        <li>Хліб з маслом</li>
                        <li>Чай</li>
                    </ul>
                 </div> -->


            </div>
        </div>
    </div>
    <div class="wrapper1 background1">
    <div class="main-wrapper2">
        <div  class="button-wrapper col-12">
            <div class="top-button button">
                ПРАВИЛА
            </div>
        </div>
        <div class="text">
            <ul>
                <li>На території забороняється курити та розпивати алкогольні напої.</li>
                <li>Забороняється зберігання та використання сірників, запальничок, та легкозаймистих і вибуховонебезпечних речовин у кімнатах.</li>
                <li>Заборонено виходити за територію самовільно без супроводу інструктора.</li>
                <li>Заборонено зберігання та використання колючих та ріжучих предметів.</li>
                <li>Заборонено наносити моральний збиток і образи іншим дітям та дорослим.</li>
                <li>Заборонено шуміти та порушувати інших мешканців садиби після оголошення тихої години.</li>
                <li>Заборонено наносити матеріальний збиток майну садиби та її машканців.</li>
                <li>За порушення будь-якого з перерахованих пунктів дитину може бути відправлено додому, а батьки будуть змушені відшкодувати вартість завданих дитиною збитків.</li>
            </ul>
        </div>
        <div class="text-em">
            <em>
                Ми сподіваємося, що і батьки й діти розуміють неприпустимість негативної поведінки на відпочинку, адже всі прагнуть добре відпочити й отримати максимум задоволення.
            </em>
        </div>

    </div>
</div>
<div class="wrapper1 background2">
    <div class="main-wrapper2">
        <div class="button-wrapper col-12">
            <a class="middle-button button" id="book1">Ціни та бронювання</a>
        </div>
        <div class="text justify">
            Будь ласка ознайомтесь детальніше з переліком необхідних документів, які потрібно мати з собою та переліком захворювань, з якими ми не можемо прийняти дитину.
        </div>
        <div class="double-button-wrapper col-12">
                <div class="col-6">
                    <a class="double-button button" href="index3.php">Анкета</a>
                </div>
                <div class="col-6">
                    <a class="double-button button" href="coming.php">Заїзди та ціни</a>
                </div>
                <div class="text justify" style="padding-top:120px; text-align: center;">
                    <em>При бронюванні більше ніж за 45 днів до заїзду - знижка 5%!!!</em>
                </div>
        </div>

        <div class="title">
            ТРАНСФЕР
        </div>
        <div class="text justify">
            Трансфер оплачується окремо. Для замовлення трансфера Вам потрібно заповнити бланк. Заявки на тансфер приймаються не пізніше ніж за 20 днів до заїзду. Якщо Ви замовляєте трансфер, у дитини з собою повинен бути оригінал свідоцтва про народження. Під час перевезення діти знаходяться під пильним наглядом інструкторів.
        </div>
        <div class="button-main">
            <a href="transferanketa.php">
                <div class="button-book"> Бланк трансфера</div>
            </a>
        </div>
        <div class="img-small">
            <img src="../img/vec2.png" alt="img">
        </div>
        <div class="title">
            ЗВ'ЯЗОК ТА ВІДВІДУВАННЯ
        </div>
        <div class="text justify">
            На території садиби є зв’язок тільки оператора Vodafone, тому якщо у вашої дитини інший мобільний оператор, ви завжди зможете зателефонувати інструктору та дізнатися про все, що вас зацікавить і поговорити з дитиною.
            Відвідування дітей вільне, окрім  днів, коли діти перебувають на виїзних екскурсіях.
        </div>
        <div class="text justify">
            Щоб провести час з своєю дитиною за межами нашої садиби, вам потрібно буде заповнити заяву встановленого зразка. За межами садиби діти можуть перебувати тільки з батьками (опікунами). Прохання мати при собі документи, що засвідчують особу.
        </div>
        <div class="img-small">
            <img src="../img/vec3.png" alt="img">
        </div>
        <div class="title">
            НЕОБХІДНІ ДОКУМЕНТИ
        </div>
        <div class="text">
            <ul>
                <li>Медична довідка форми 079/О (з обов’язковою відміткою про фізкультурну групу), довідка про епідоточення, карта профщеплень.</li>
<li>Копія свідоцтва про народження або паспорта (для трансферу оригінал).</li>
                <li>Заповнена анкета</li>
            </ul>
        </div>
        <div class="img-small">
            <img src="../img/vec4.png" alt="img">
        </div>
        <div class="title">
            ЩО ВЗЯТИ З СОБОЮ?
        </div>
        <div class="text">
            <ul>
                <li>Сезонний одяг та взуття, втому числі теплі речі (ввечері буває прохолодно).</li>
                <li>Взуття (туристичні вологостійкі черевики, кросівки, босоніжки, гумові   тапочки).</li>
                <li>Одяг для святкових заходів.</li>
                <li>Головний убір від сонця.</li>
                <li>Купальник/плавки</li>
                <li>Шкарпетки (і легкі, і теплі) та нижню білизну в достатній кількості.</li>
                <li>Дощовик </li>
                <li>Ліхтарик</li>
                <li>Засоби особистої гігієни</li>
                <li>Вітрозахисна куртка</li>
                <li>Туристична сідушка</li>
                <li>Кишенькові гроші (в кінці зміни їдемо в Івано-Франківськ та відвідуємо кафе, кінотеатр, сувенірний магазин).</li>
            </ul>
        </div>

    </div>
</div>
<div class="wrapper1 background3">
    <div class="main-wrapper">
        <div class="title">
            ПЕРЕЛІК ЗАХВОРЮВАНЬ, З ЯКИМИ МИ НЕ МОЖЕМО ПРИЙНЯТИ ДИТИНУ
        </div>
        <div class="text">
            <ul>
                <li>усі захворювання в гострому періоді;</li>
                <li>усі форми туберкульозу різних органів і систем;</li>
                <li>ревматизм в активному та міжприступному періоді, до зняття з диспансерного обліку;</li>
                <li>набуті чи врождені вади серця та судин;</li>
                <li>гіпертонічна хвороба;</li>
                <li>захворювання крові та кровотворних органів;</li>
                <li>епілепсія чи інші судомні напади та їх еквіваленти;</li>
                <li>гострі психічні захворювання та реактивні стани;</li>
                <li>бронхіальна астма;</li>
                <li>виразкова хвороба шлунку та 12-палої кишки;</li>
                <li>нефрит, пієлонефрит, сечокам̕яна хвороба, вроджені аномалії нирок;</li>
                <li>цукровий діабет, тиреотоксикоз;</li>
                <li>всі заразні, паразитарні захворювання шкіри (короста, грибкові захворювання, педикульоз і т. д.);</li>
                <li>вроджені вади розвитку легень;</li>
                <li>бронхоектатична  хвороба;</li>
                <li>онкологічні захворювання будь-яких органів та систем;</li>
                <li>проблеми опорно-рухового апарату, ДЦП;</li>
                <li>діти які потребують специфічної (спеціальної) дієти (генетичні порушення обміну речовин),  не приймаються  в зв’язку з неможливістю її забезпечення.</li>
                <li>при виявленні прихованого діагнозу дитини, що може призвести до виникнення загрозливих для життя станів, батьки зобов’язані негайно забрати дитину додому, без відшкодування будь-яких витрат чи збитків;</li>
                <li>перед відправкою на відпочинок дітям необхідно пройти огляд стоматолога та провести санацію ротової порожнини;</li>
                <li>якщо дитина потребує систематичного прийому ліків, це здійснюється під наглядом інструктора, за умови пред’явлення батьками офіційного призначення від лікуючого лікаря.</li>
            </ul>
        </div>
        <div class="end-line-border">

        </div>
        <div class="text-em">
            <em>
                У випадку виявлення у день заїзду дитини хворої або такої,
                що за медичними показниками не може перебувати на відпочинку,
                керівництво зберігає за собою право відмовити у прийнятті
                її без відшкодування будь-яких витрат чи збитків.
            </em>
        </div>
    </div>
    <div class="footer">
        <div class="social">
            <a href="viber://chat?number=+380990386661" ><i class="fa fa-phone-square" style="font-size:48px;color:#17ae4b;padding:30px;"></i></a>
            <a href="https://www.facebook.com/litodriada"><i class="fa fa-facebook-square" style="font-size:48px; color:#17ae4b;padding:30px;"></i></a>
            <a href="#"><i class="fa fa-instagram" style="font-size:48px;color:#17ae4b;padding:30px;"></i></a>
            <a href="mailto:litodriada@gmail.com"><i class="material-icons" style="font-size:45px;color:#17ae4b;padding:30px;">mail</i></a>
        </div>
        <div class="title-footer">
            ЗВ'ЯЗОК З НАМИ<br>
            +380990386661
        </div>
    </div>
</div>
</body>

</html>