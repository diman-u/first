<footer class="flex-container" id="footer">
    <!--div class="row">
        <div class="col-xs-12 col-md-12 row-container">

            <div class="flex-container">-->
    <div class="block-1 blocks">
        <div class="disclaimer_text">
            © 2016 Студия флоатинга и SPA «Флоат Студия».
        </div>
    </div>
    <div class="block-2 blocks">
        <h4><a href="#">О центре</a></h4>
        <a href="#">Галерея</a>
        <a href="#">Специалисты</a>
        <a href="#">Виртуальный тур</a>
        <a href="#">Мы в СМИ</a>
        <a href="#">Клиенты о нас</a>
        <a href="#">Блог</a>
    </div>
    <div class="block-3 blocks">
        <h4><a href="#">Флоатинг</a></h4>
        <a href="#">Что это?</a>
        <a href="#">Инструкция</a>
        <a href="#">Технология и безопасность</a>
        <a href="#">Эффект</a>
    </div>
    <div class="block-4 blocks">
        <h4><a href="#">Цены</a></h4>
        <a href="#">Контакты</a>
        <a href="#">Купить on-line</a>
        <a href="#">Подарочные сертификаты</a>
        <a href="#">Все услуги</a>
    </div>
    <!--       </div>
  <!--   </div>
</div>-->
</footer>

<div class="soc-bottom" id="sochide">
    <a class="facebook" href="#"></a>
    <a class="instagram" href="#"></a>
</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="assets/newdis/js/bootstrap.js"></script>
<script src="assets/newdis/js/custom.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter27784569 = new Ya.Metrika({
                    id: 27784569,
                    webvisor: true,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true
                });
            } catch (e) {
            }
        });
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<script>
    $(function () {
        $('.lightbox_print').on('click', function () {
            var $img = $('#lightbox .lb-image img');
            setTimeout(function () {
                $('.lb-number').append('<a class="print_button" href="#">Распечатать</a>');
            }, 1000);


        });
    });
</script>
<noscript>
    <div><img src="//mc.yandex.ru/watch/27784569" style="position:absolute; left:-9999px;"
              alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<script
    type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=Ewzn0hJ8k2mT5YLVNzZqwouw6A9vIpZrFzS8U6BPYrW6hmoNHkQW*W0SLcydV*jU7Poqr2ZjztzrsFGwDw58R/8SCNbZB3GJMP9VwWMrG5HWZuziJtmSP0T/VjtVnAIjpxYIYdyJ/r9/Jyv5nfGmKzksPKw/cxJvgvUuDAWMKrE-&pixel_id=1000031372';</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-88844845-1', 'auto');
    ga('send', 'pageview');

</script>
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "2844111", type: "pageView", start: (new Date()).getTime()});
    (function (d, w, id) {
        if (d.getElementById(id)) return;
        var ts = d.createElement("script");
        ts.type = "text/javascript";
        ts.async = true;
        ts.id = id;
        ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
        var f = function () {
            var s = d.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(ts, s);
        };
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "topmailru-code");
</script>
<noscript>
    <div style="position:absolute;left:-10000px;">
        <img src="//top-fwz1.mail.ru/counter?id=2844111;js=na" style="border:0;"
             height="1" width="1" alt="Рейтинг@Mail.ru"/>
    </div>
</noscript>
<!-- //Rating@Mail.ru counter -->

<!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq)return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq)f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '362030897471577');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=362030897471577&ev=PageView&noscript=1"
    />
    fbq('track', 'Lead');
    fbq('track', 'CompleteRegistration');
</noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<div class="hidden">
    <div id="success">
        <h2>
            Ваша заявка принята!
            <br>
            Мы скоро с Вами свяжемся.
        </h2>
    </div>
    <div id="loading">
        <div id="load"></div>
    </div>
</div>