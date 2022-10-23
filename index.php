<?
$title ='Официальный дилер Киа в Архангельске';
$description ='Официальный дилер Киа в Архангельске: модельный ряд Киа, выгоды и акции';
$keywords ='';

?>

<?

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    ob_start();
}
?>

<? require_once('templates/head.php'); ?>

<body data-spy="scroll" data-target="#page-menu" data-offset="90">
<?include 'templates/GTM-ns.php';?>
<header>
    <? require_once('templates/header.php'); ?>
    <div class="level-3-menu d-none d-md-block">
        <div class="container">
            <div class="nav menu page-menu" id="page-menu">

            </div>
        </div> 
    </div>
</header>
<main>



<section class="section-slider">
    <div class="slider slider-main slider-dark">
        <div class="slide dark-bg slide-1">
            <div class="container z-5">
                <div class="row">
                    <div class="col-sm-8 col-md-6 slide-content">
                        <h1>Официальный дилер Kia в&nbsp;Архангельске<br><span class="mt-3">Выгоды до <?=$MaxSale;?></span></h1>
                        <p class="slide-undertitle">
                            <!--•  КАСКО в подарок<br>-->
                            •  Специальные условия по кредиту и Трейд-ин
                        </p>
                        <button data-toggle="modal" data-target="#moreInfoModal" data-type="Официальный дилер Kia выгода до <?=$MaxSale;?>" class="btn btn-white js--form-type"><span>Узнать подробнее</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide dark-bg slide-2">
            <div class="container z-5">
                <div class="row">
                    <div class="col-sm-8 col-md-6 slide-content">
                        <h1>Программа "Семейный автомобиль"</h1>
                        <p class="slide-undertitle">
                            Выгодные условия на покупку автомобиля для семей с 3-мя и более несовершеннолетними детьми
                        </p>
                        <button data-toggle="modal" data-target="#moreInfoModal" data-type="Программа Семейный автомобиль" class="btn btn-white js--form-type"><span>Узнать подробнее</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container slider-control-container slider-dark">
        <div class="slider-control slider-main-controls"></div>
    </div>
</section>


<style>
.slide-1 {background-image: url(/assets/img/slider/1/1920.jpg);}
.slide-2 {background-image: url(/assets/img/slider/2/1920.jpg);}
.slide-3 {background-image: url(/assets/img/slider/3/1920.jpg);}

@media (max-width: 1441px) {
.slide-1 {background-image: url(/assets/img/slider/1/1440.jpg);}
.slide-2 {background-image: url(/assets/img/slider/2/1440.jpg);}
.slide-3 {background-image: url(/assets/img/slider/3/1440.jpg);}
}

@media (max-width: 1171px) {
.slide-1 {background-image: url(/assets/img/slider/1/1170.jpg);}
.slide-2 {background-image: url(/assets/img/slider/2/1170.jpg);}
.slide-3 {background-image: url(/assets/img/slider/3/1170.jpg);}
}

@media (max-width: 961px) {
.slide-1 {background-image: url(/assets/img/slider/1/960.jpg);}
.slide-2 {background-image: url(/assets/img/slider/2/960.jpg);}
.slide-3 {background-image: url(/assets/img/slider/3/960.jpg);}
}

@media (max-width: 641px) {
/*.slide-1 {background-image: url(/assets/img/slider/1/640.jpg?v=1.01);}
.slide-2 {background-image: url(/assets/img/slider/2/640.jpg?v=1.01);}
.slide-3 {background-image: url(/assets/img/slider/3/640.jpg?v=1.01);}*/
}    
</style>
</main>
<section class="models colored">
    <div class="anchor" id="models"></div>
    <div class="container">
        <h2 class="section-header">Выберите модель Kia и узнайте специальное предложение</h2>
    </div>    
        <!-- MODELS INCLUDE -->
        <?php require_once('templates/models.php'); ?>
        <!-- MODELS INCLUDE -->

        
</section>


<? require_once('templates/credit.php'); ?> 
<section class="tradein-block slice left-slice">
    <div class="anchor" id="tradein"></div>
    <div class="container z-5">
        <div class="row">
            <div class="col-sm-7 col-md-5 col-content left-slice-inner">
                <div class="content-inner">
                    <h2 class="mb-4 mb-xl-5">Обмен вашего автомобиля на новый Kia по Трейд-ин</h2>
                    <ul class="plus">
                        <li>Экспресс-оценка вашего автомобиля</li>
                        <li>Честная оценка</li>
                        <li>Быстрая диагностика и оформление</li>
                        <li>Обмен старого автомобиля на новый за&nbsp;1&nbsp;час</li>
                    </ul>
                    <p class="btn-cta">Получите предварительную экспресс-оценку стоимости за 10 минут, по телефону</p>
                    <button class="btn btn-black btn-anim" data-toggle="modal" data-target="#tradeinBlockModal"><span>Получить экспресс-оценку</span></button>
                </div> 
            </div>
            <div class="d-block d-sm-none tradein-block-img slice-img"></div>            
        </div>
    </div>
</section>
<section class="testdrive-block slice right-slice">
    <div class="anchor" id="testdrive"></div>
    <div class="container z-5">
        <div class="row">
            <div class="col-sm-7 offset-sm-5 col-md-5 offset-md-7 col-content right-slice-inner ">
                <div class="content-inner">
                    <h2 class="mb-4 mb-xl-5">Пройдите тест-драйв Kia</h2>
                    <ul class="plus">
                        <li>Непередаваемые ощущения от вождения нового Kia</li>
                        <li>Подробная консультация менеджера по техническим характеристикам и особенностям комплектации</li>
                        <li>Консультация о выгодных условиях покупки</li>
                    </ul>
                    <button class="btn btn-black btn-anim" data-toggle="modal" data-target="#testdriveBlockModal"><span>Заказать тест-драйв</span></button>
                </div>  
            </div>
            <div class="d-block d-sm-none testdrive-block-img slice-img"></div>             
        </div>
    </div>
</section>


<? require_once('templates/question-op.php'); ?> 
<? require_once('templates/footer.php'); ?> 

</body>


sfgewrsdfrw


еще больше фсякой фигня


313123123