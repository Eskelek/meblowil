<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Meblo-wil Kontakt</title>
    <link rel="stylesheet" href="animation.css">
    <link rel="stylesheet" href="kontakt.css">
    <link rel="stylesheet" href="grid.css">
    <meta charset="utf-8">
    <meta name="robots" content="index,follow"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="description" content="Meblo-wil w Nowym Borku. Produkujemy meble tapicerowane - sofy, narożniki, fotele, wersalki, amerykanki, pufy, stoły, krzesła, kanapy. Ilości hurtowe - na zamówienie. Zapraszamy do współpracy i do kontaktu.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="canonical" href="http://www.meblowil24/kontakt.pl"/>
</head>
<body>
    <div class="underLook col-12"></div>
    <header class="col-12 hideToLoad">
        <nav class="row nav col-12">
            <div class="bars">
                <p><i class="fas fa-mobile-alt"></i> 600 467 098 - Zadzwoń</p>
                <i class="fas fa-bars"></i>
            </div>
            <ul class="header--list col-12 col-s-12">
                <li class="col-s-12 header--list--contact"><i class="fas fa-at"></i> meblowilsw@gmail.com</li>
                <li class="col-s-12 header--list--contact"><i class="fas fa-mobile-alt"></i> 600 467 098</li>
                <li class="col-s-12 header--list--items mButton toContact"><a href="omeblowilu.html">O FIRMIE</a></li>
                <li class="col-s-12 header--list--items mButton toAboutAs"><a href="index.php">STRONA GŁÓWNA</a></li>
                <li class="col-s-12 header--list--items dropDown">
                    MEBLE <i class="fas fa-sort-down"></i>
                </li>
            </ul>
            <ul class="header--list--offerList col-12">
                <li class=" header--offerlist--item"><a href="narozniki.html">Narożniki</a></li>
                <li class=" header--offerlist--item"><a href="wersalki.html">Wersalki/Kanapy</a></li>
                <li class=" header--offerlist--item"><a href="sofy.html">Sofy/Amerykanki</a></li>
                <li class=" header--offerlist--item"><a href="tapczany.html">Tapczany</a></li>
                <li class=" header--offerlist--item"><a href="fotele.html">Fotele</a></li>
                <li class=" header--offerlist--item"><a href="pufy.html">Pufy</a></li>
                <li class=" header--offerlist--item"><a href="krzesla.html">Krzesła</a></li>
            </ul>
        </nav>
    </header>
    <section class="first col-12">
        <div class="first--shadow col-12">
            <h2>Skontaktuj się z nami!</h2>
            <h4>Zachęcamy do pozostawienia po sobie śladu!</h4>
            <p>Zapraszamy do współpracy zarówno większych jak i mniejszych odbiorców!</p>
            <p>Jeżeli chcesz porozmawiać na temat naszej oferty, prosze wybierz jedną z poniższych form kontaktu.</p>
            <div class="first--shadow--row col-12">
                <div class="col-3 col-s-6 contact--box">
                    <i class="fas fa-mobile-alt col-12"></i>
                    <p class="col-12">600 467 098</p>
                </div>
                <div class="col-3 col-s-6 contact--box envelope--to--form">
                    <i class="far fa-envelope col-12"></i>
                    <p class="col-12">meblowilsw@gmail.com</p>
                </div>
                <div class="col-3 col-s-6 contact--box">
                    <i class="fas fa-phone col-12"></i>
                    <p class="col-12">17-2298909</p>
                </div>
                <div class="col-3 col-s-6 contact--box marker--to--map">
                    <i class="fas fa-map-marker-alt col-12"></i>
                    <p class="col-12">Nowy Borek 553<br>36-030 Błażowa</p>
                </div>
                <div class="col-12 col-s-12 contact--box">
                    <a href="https://www.facebook.com/firmameblowameblowil/"><i class="fab fa-facebook-square col-12"></i></a>
                    <p class="col-12">Facebook</p>
                </div>
            </div>
        </div>
    </section>
    <section class="clearView col-12"></section>
    <section class="contact col-12 hideToLoad row">
        <div class="col-12 contact--box">
            <div class="contact--head col-12">
                <h2>Kontakt</h2>
                <p>Chcesz zapytać o warunki współpracy, ceny hurtowe bądź nurtują cię jakieś inne pytania?</p>
                <p>Pisz śmiało - postaramy się odezwać jak najszybciej z kompletną informacją.</p>
            </div>
            <?php
            function getDataAndSendEmail() {

              $to = "meblowilsw@gmail.com";
              $name = $_POST['name'] . '';
              $email = $_POST['email'] . '';
              $subject = $_POST['subject'] . '';
              $message = $_POST['message'] . '';
              $phone = $_POST['phone'] . '';
                
              $headers = "From: wiadomosc od - $name telefon - $phone <$email>\r\n";
              $headers .= "Content-type: text/html; charset=utf-8" . "\r\n";

              mail($to, $subject, $message, $headers);
            }

            if(isset($_POST['submit']))
            {
               getDataAndSendEmail();
            } 
            ?>
            <form action="kontakt.php" method="post" class="contact--box--form col-12 col-m-12 col-s-12 row">
                <div class="formdata row col-5 col-s-12">
                    <input required type="text" min="2" minlength="2" name="name" placeholder="Imię i Nazwisko" class="col-8 col-m-10 col-s-12">
                    <input required type="text" minlength="2" name="subject" placeholder="Temat wiadomości" class="col-8 col-m-10 col-s-12">
                    <input required type="tel" minlength="9" maxlength="9" min="9" max="9" name="phone" placeholder="Telefon" class="col-8 col-m-10 col-s-12">
                    <input required type="email" name="email" placeholder="Email" class="col-8 col-m-10 col-s-12">
                </div>
                <div class="formMessage col-7 col-s-12">
                    <textarea class="col-12 message" name="message" required placeholder="Napisz do nas"></textarea>
                    <input type="submit" name="submit" class="col-6 col-s-12 submit" value="WYŚLIJ">
                </div>
            </form>
            <div class="contact--box--map col-12 col-m-12 col-s-12 row">
                <iframe class="col-12" title="mapa dojazdu" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4318.61193194916!2d22.103852481049795!3d49.93893028597247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473cf69065336acd%3A0x530304e68f80fe61!2sNowy+Borek+553%2C+36-030+Nowy+Borek!5e0!3m2!1spl!2spl!4v1544452213919" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <footer class="col-12 footer hideToLoad row" id="contact">
        <div class="container">
            <div class="footer--contactAndNav col-9 col-s-12">
                <div class="footer--nav row col-12">
                    <div class="col-6 footer--nav--item">
                        <p><a href="index.php">STRONA GŁÓWNA</a></p>
                    </div>
                    <div class="col-6 footer--nav--item">
                        <p><a href="omeblowilu.html">O FIRMIE</a></p>
                    </div>
                </div>
                <div class="footer--contact col-12 row">
                    <div class="col-3 col-s-6 footer--contact--box">
                        <i class="fas fa-mobile-alt col-12"></i>
                        <p class="col-12">600 467 098</p>
                    </div>
                    <div class="col-3 col-s-6 footer--contact--box">
                        <i class="far fa-envelope col-12"></i>
                        <p class="col-12">meblowilsw@gmail.com</p>
                    </div>
                    <div class="col-3 col-s-6 footer--contact--box">
                        <i class="fas fa-phone col-12"></i>
                        <p class="col-12">17-2298909</p>
                    </div>
                    <div class="col-3 col-s-6 footer--contact--box">
                        <i class="fas fa-map-marker-alt col-12"></i>
                        <p class="col-12">Nowy Borek 553<br>36-030 Błażowa</p>
                    </div>
                </div>
            </div>
            <div class="footer--furnitureNav col-3 col-s-12">
                <div class="col-12 furniture--header">
                    <p>NASZE MEBLE</p>
                </div>
                <ul class="col-12 footer--furnitureNav--nav">
                    <li class="footer--furnitureNav--nav--item col-12 col-s-6"><a href="narozniki.html">Narożniki</a></li>
                    <li class="footer--furnitureNav--nav--item col-12 col-s-6"><a href="wersalki.html">Wersalki / Kanapy</a></li>
                    <li class="footer--furnitureNav--nav--item col-12 col-s-6"><a href="sofy.html">Sofy / Amerykanki</a></li>
                    <li class="footer--furnitureNav--nav--item col-12 col-s-6"><a href="tapczany.html">Tapczany</a></li>
                    <li class="footer--furnitureNav--nav--item col-12 col-s-6"><a href="fotele.html">Fotele</a></li>
                    <li class="footer--furnitureNav--nav--item col-12 col-s-6"><a href="pufy.html">Pufy</a></li>
                    <li class="footer--furnitureNav--nav--item col-12 col-s-6"><a href="krzesla.html">Krzesła</a></li>
                </ul>
            </div>
        </div>
        <div class="footer--rights col-12">
            <p class="col-3 col-s-12">copyright@ Meblo-wil</p>
        </div>
    </footer>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>