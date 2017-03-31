<body>
<div class="container">
    <header>
        <div class="header-holder">
            <nav class="left" id="header-left">
                <a class="menu"></a>
                <a class="facebook" href="https://www.facebook.com/floatstudiomoscow?fref=ts" id="facebook"></a>
                <a class="instagram" href="https://www.instagram.com/floatstudio_msk/" id="instagram"></a>
                <a class="gift" href="http://present.floatstudio.ru/" id="gift">Подарочные сертификаты</a>
            </nav>
            <div class="logo"><a href="/"><img src="assets/newdis/img/logo_main.svg"/></a></div>
            <div class="right_mobile">
                <div>
                    <a href="tel:+74991105210"><img src="assets/newdis/img/icon_header_phone.svg"/></a>
                </div>
            </div>
            <div class="right">
                <div>
                    <a class="metro" href="[[~12]]">Новокузнецкая</a>
                    <a class="phone" href="tel:+74991105210">+7 (499) 110-52-10</a>
                </div>
                <div>
                    <a class="map" href="[[~12]]#map">Как нас найти</a>
                    <span class="form-record">
                        <a class="check js-h-form" href="javascript:void(0)">Записаться</a>
                        <form class="record-form sendLead" id="record-form" action="/assets/newdis/php/submit.php" method="post" data-id="form_header_call">
                            <div class="sclose"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></div>
                            <input type="hidden" name="type" value="1" />
                            <input type="text" name="lastname" value="" />
                            <input name="name" type="text" placeholder="Как вас зовут" />
                            <input name="phone" type="text" placeholder="Ваш телефон" data-type="phone" class="required" />
                            <button onclick="console.log('form_header_call'); yaCounter27784569.reachGoal('form_header_call'); return true;" type="submit" class="btn-all" form="record-form">Записаться</button>
                        </form>
                    </span>
                    <a class="buy" href="[[~4]]">Купить</a>
                </div>
            </div>

        </div>
        <div class="open-menu cards-holder" style="display:none;">
            <div class="card mega-menu">
                <div class="row">
                    <div class="col-xs-12 col-md-5 first-block">
                        <ul class="main-menu-links items-lg">
                            <li class="menu-items wells"><a click="javascript.void(0)"
                                                            class="active">Wellness</a>
                                <ul id="well_list">
                                    <li><a href="[[~32]]">Релаксация и восстановление</a></li>
                                    <li><a href="[[~36]]">Здоровая беременность</a></li>
                                    <li><a href="[[~34]]">Натуральная красота и омоложение</a>
                                    </li>
                                    <li><a href="[[~37]]">Восстановление спортсменов</a></li>
                                    <li><a href="[[~35]]">Здоровое питание</a></li>
                                    <li><a href="[[~33]]">Лайф- и Wellness-коучинг</a></li>
                                    <div>
                                        <a href="[[~9]]" class="more">Все услуги</a>
                                    </div>
                                </ul>
                            </li>
                            <li class="menu-items med"><a href="[[~37]]">Медицина</a>
                                <img src="assets/newdis/img/icure_logo_color.svg" width="140"
                                     height=""/>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xs-12 col-md-7">
                        <div class="row">
                            <!-- NAV >>> -->
                            <?php
                            include "nav.php"
                             //INCLUDE!!!!!!!!!!!!!!!!!!! ?>
                            <!-- <<<NAV  -->
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-10 disclaimer">
                        <div class="social">
                            <div></div>
                            <div class="social-wrap">
                                <img src="assets/newdis/img/logo_visa.svg" alt="">
                                <img src="assets/newdis/img/logo_mastercard.svg" alt="">
                            </div>
                        </div>
                        <div class="disclaimer_text">
                            © 2016 Студия флоатинга и SPA «Флоат Студия». Все права
                            защищены законом об авторском праве. Никакая часть содержимого
                            сайта не может быть использована, репродуцирована, передана
                            любым электронным, копировальным или другим способом без
                            предварительного письменного разрешения владельца авторских
                            прав.
                        </div>
                    </div>
                </div>

                <div class="soc-bottom soc-bottom-left">
                      <a class="facebook" href="https://www.facebook.com/floatstudiomoscow?fref=ts"></a>
                      <a class="instagram" href="https://www.instagram.com/floatstudio_msk/"></a>
                </div>

                <div class="about-links">

                </div>
            </div>
        </div>
    </header>
