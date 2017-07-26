<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/admin/normalize.min.css">
    <link rel="stylesheet" href="/public/css/admin/animate.css">
    <link rel="stylesheet" href="/public/css/admin/style.css">
    <link rel="stylesheet" href="/public/css/fonts.css">
    <link rel="stylesheet" href="/public/css/admin/owl.carousel.css">
    <link rel="stylesheet" href="/public/css/swiper.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="/public/fonts/font-awesome/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="/public/js/admin/swiper.jquery.min.js"></script>
    <script src="/public/js/admin/owl.carousel.min.js"></script>
    <script src="/public/js/admin/goalProgress.js"></script>  
    <script src="/public/js/admin/nicEdit.js.js"></script>
    <script src="/public/js/admin/scripts.js"></script>
</head>
<body>
    <header>
        <div class="minBlock">
            <div class="topHeaderWrapper">
                <div class="topHeaderWrapper__left">
                    <div class="topHeaderWrapper__left--img"></div>
                    <p>Меню</p>
                </div>
                <div class="topHeaderWrapper__logo">
                    <a href="#">
                        <img src="public/images/admin/logoAdm.png" alt="">
                    </a>
                </div>
                <div class="topHeaderWrapper__right">
                    <a href="#">
                        <div class="notificationBlock">
                            <img src="public/images/admin/notification.png" alt="">
                            <div class="notificationBlock__text">
                                <p>У вас появилась новая заявка</p>
                                <span>чтобы посмотреть нажмите сюда.</span>
                            </div>

                        </div>
                    </a>
                    <!-- Tyt dopolnitelniy class "notificationActive", kotoriy pokazivaet opovesheniya -->
                    <i class="fa fa-bell-o notificationActive" aria-hidden="true"></i>
                    <a href="#">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="minBlock">
            <div class="leftMenuWrap">
                <div class="leftMenuWrap__leftMenu">
                    <a href="#">
                        <div class="leftMenuWrap__leftMenu--item">

                            <div class="leftMenuImg item1"></div> 
                            <div class="showDesc">
                                <p>Добавить</p>
                            </div>
                        </div>   
                    </a>

                    <a href="#">
                        <div class="leftMenuWrap__leftMenu--item">

                            <div class="leftMenuImg item2"></div> 
                            <div class="showDesc">
                                <p>Редактирование</p>
                            </div>
                        </div>   
                    </a>

                    <a href="#">
                        <div class="leftMenuWrap__leftMenu--item">

                            <div class="leftMenuImg item3"></div> 
                            <div class="showDesc">
                                <p>Настройки</p>
                            </div>
                        </div>   
                    </a>

                    <a href="#">
                        <div class="leftMenuWrap__leftMenu--item">

                            <div class="leftMenuImg item4"></div> 
                            <div class="showDesc">
                                <p>Заявки</p>
                            </div>
                        </div>   
                    </a>


                </div>
                <section style="margin-top: 30px;width: 100%">
                    @yield('content')  
                </section>
                
            </div>
        </div>
    </section>


</body>
</html>

