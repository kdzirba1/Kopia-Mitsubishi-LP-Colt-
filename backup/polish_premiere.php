<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">

	<head>

        <!-- Google Tag Manager -->

        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

        })(window,document,'script','dataLayer','GTM-T56MTDR');</script>

        <!-- End Google Tag Manager -->

		<!-- Basics -->

		<meta charset="utf-8">

		<title>Mitsubushi ASX</title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

		<meta name="description" content=""/>

		<meta name="keywords" content=""/>

		<meta name="author" content=""/>

		

		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

		<link rel="apple-touch-icon" href="images/favicon.ico">

		

		<!-- Normalize -->

		<link rel="stylesheet" href="css/normalize.css">

        

        <!-- Select2 -->

		<link rel="stylesheet" href="css/select2.min.css">



		<!-- Main CSS -->

		<link rel="stylesheet" href="css/polish_premiere.css">

		

		<!-- Scripts -->

		<script src="js/jquery-3.6.0.min.js"></script>		

		<script src="js/select2.min.js"></script>

	</head>

	<body>



        <!-- Google Tag Manager (noscript) -->

        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T56MTDR"

        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

        <!-- End Google Tag Manager (noscript) -->



        <?php

            $premiere = strtotime('31 November 2022, 23:59:59');

            $now = strtotime('now');

        ?>



        <div id="main">

            <div class="section bg-section vid-section">

                <iframe width="100%" height="100vh" src="https://www.youtube.com/embed/FmJrLJNaF7Y?start=1161" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>

			<div class="section bg-section s-polish-form" style="background-image:url('img_pp/polish-form.jpg')">

            	<div class="slide s-last-form">

                	<div class="my-container">

                    	<form method="post" id="contactFormPolish" action="<?php echo $_SERVER['PHP_SELF'];?>">

                            <!-- wersja wyposażenia -->

                            <input type="hidden" name="1da69054-a58b-4f6a-a6e8-ed84bed45bf7" value="">



                            <input type="hidden" name="utm_source" value="<?= (isset($_GET['utm_source']) && trim($_GET['utm_source']) != ''? trim($_GET['utm_source']): "") ?>">

                            <input type="hidden" name="utm_medium" value="<?= (isset($_GET['utm_medium']) && trim($_GET['utm_medium']) != ''? trim($_GET['utm_medium']): "")  ?>">

                            <input type="hidden" name="utm_campaign" value="<?= (isset($_GET['utm_campaign']) && trim($_GET['utm_campaign']) != ''? trim($_GET['utm_campaign']): "")  ?>">





                            <div class="contact-form-inner">

                                <div class="form-heading">

                                    <h3 class=" text-uppercase">Chcesz dowiedzieć się więcej o <strong>nowym <span class="colored">ASX</span>?</strong></h3>

                                    <h4 class=" text-uppercase"><strong>Skontaktuj się</strong> ze swoim dealerem.</h4>

                                </div>

                                <div class="form-content form-content-row form-fields-row">

                                    <div class="form-content-col input-col ">

                                        <!-- required -->

                                        <div class="col-6">

                                            <div class="form-field validate-field">

                                                <div class="select-field select-option">

                                                    <p class="input-field-placeholder"><strong>WYBIERZ SWOJEGO DEALERA</strong></p>

                                                    <select class="select-default required" id="select_03" name="select_01">

                                                        <option></option>

                                                        <option value="80">Białystok - Grafix</option>

                                                        <option value="70" data-dealer="japanmotors">Bielsko Biała - Japan Motors Bielsko Biała</option>

                                                        <option value="81" data-dealer="mitsubishi-sobczyk">Częstochowa - Kombat Częstochowa</option>

                                                        <option value="69">Gdańsk - Motor Centrum</option>

                                                        <option value="87">Gdynia - K&K Wojtanowicz</option>

                                                        <option value="48">Gorzów Wlkp. - Gezet Gorzów</option>

                                                        <option value="50">Kalisz - AC Lis</option>

                                                        <option value="68">Katowice - MM Cars</option>

                                                        <option value="56">Kraków - Auto Krak</option>

                                                        <option value="132">Lublin, Motycz - Technotop</option>

                                                        <option value="124" data-dealer="satall">Łódź - Satall, Kolumny 3</option>

                                                        <option value="84" data-dealer="satall">Łódź - Satall, Liściasta 104</option>

                                                        <option value="82" data-dealer="mitsubishi-sobczyk">Opole - Kombat Opole</option>

                                                        <option value="61">Płońsk - Michalski Motors</option>

                                                        <option value="74" data-dealer="polody">Poznań - Auto Salon Polody</option>

                                                        <option value="127" data-dealer="polody">Przeźmierowo - Auto Salon Polody</option>

                                                        <option value="60">Rzeszów - Automarket</option>

                                                        <option value="72" data-dealer="japanmotors">Sosnowiec - Japan Motors Sosnowiec</option>

                                                        <option value="131">Szczecin - Gezet Szczecin</option>

                                                        <option value="51">Toruń - Arpol</option>

                                                        <option value="55">Warszawa - Auto GT</option>

                                                        <option value="73" data-dealer="japanmotors">Warszawa - Japan Motors Warszawa</option>

                                                        <option value="129">Warszawa - Zaborowski</option>

                                                        <option value="137" data-dealer="japanmotors">Wrocław, Długołęka - Japan Motors Wrocław</option>

                                                        <option value="130">Zabrze - MM Cars</option>

                                                        <option value="49">Zielona Góra - Gezet</option>

                                                    </select>



                                                <!-- here -->

                                                </div>

                                            </div>

                                            <!-- required -->

                                            <div class="form-field validate-field">

                                                <div class="input-field input-name">

                                                    <p class="input-field-placeholder">WPISZ IMIĘ I NAZWISKO</p>

                                                    <input class="input-default required" name="client_name" type="text" >

                                                </div>

                                            </div>

                                        </div>

                                        <!-- required -->

                                        <div class="col-6">

                                            <div class="form-field validate-field">

                                                <div class="input-field input-phone">

                                                    <p class="input-field-placeholder">WPISZ NUMER TELEFONU</p>

                                                    <input class="input-default required" name="client_phone" type="number" >

                                                </div>

                                            </div>

                                            <!-- required -->

                                            <div class="form-field">

                                                <div class="input-field input-mail">

                                                    <p class="input-field-placeholder">WPISZ ADRES E-MAIL</p>

                                                    <input class="input-default" name="client_email" type="text" >

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-content-col ">

                                        <h5 class="text-uppercase hide-mobile">Chcę dowiedzieć się więcej o nowym <span class="colored">ASX</span>:</h5>

                                        <!-- required -->

                                        <div class="form-field validate-field">

                                            <div class="checker-field">

                                                <input name="e0e07596c60c5f1cf808b451d41c2a6d" id="c_agreement_01" class="checker-input required" type="checkbox">

                                                <label class="checker-default" for="c_agreement_01">

                                                    <p>Jestem zainteresowany/a tą propozycją. Proszę o przekazanie dalszych informacji z wykorzystaniem podanych powyżej danych kontaktowych.</p>

                                                </label>

                                            </div>

                                        </div>

                                        <!-- required -->

                                        <div class="form-field validate-field">

                                            <div class="checker-field">

                                                <input name="4206590a1b4de358b966687d4c15d56c" id="c_agreement_02" class="checker-input required" type="checkbox">

                                                <label class="checker-default" for="c_agreement_02">

                                                    <p>Potwierdzam zapoznanie się z <a href="https://www.mitsubishi.pl/klauzula-promocje-oferty" target="_blank">klauzulą informacyjną</a> dotyczącą przetwarzania danych osobowych, w tym z prawem do cofnięcia udzielonych zgód.  </p>

                                                </label>

                                            </div>

                                        </div>

                                        <!-- required -->

                                        <h6>Bądź z nami na bieżąco i nie przegap żadnej interesującej oferty! </h6>

                                        <p>Chcę otrzymywać informacje dotyczące produktów i usług Mitsubishi, w tym newslettery, zaproszenia na jazdy testowe, czy wydarzenia organizowane przez Mitsubishi, od wskazanego poniżej podmiotu, poprzez wskazane w tym celu przeze mnie środki komunikacji. </p>

                                        <div class="form-footer">

                                            <div class="form-footer-inner">

                                                <h6>od Astara Poland Sp. z o.o. poprzez:</h6>

                                                <div class="form-fields">

                                                    <div class="checker-field">

                                                        <input name="29638676a291ae31511090185595ee62" id="c_agreement_03" class="checker-input" type="checkbox">

                                                        <label class="checker-default" for="c_agreement_03">

                                                            <p>E-mail</p>

                                                        </label>

                                                    </div>

                                                    <div class="checker-field">

                                                        <input name="d6e44529d1583a516ffd1850b97d892b" id="c_agreement_04" class="checker-input" type="checkbox">

                                                        <label class="checker-default" for="c_agreement_04">

                                                            <p>Rozmowa telefoniczna</p>

                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-footer-inner">

                                                <h6>od wybranego przeze mnie Dealera Mitsubishi: </h6>

                                                <div class="form-fields">

                                                    <div class="checker-field">

                                                        <input name="49be1cd4dd99e4b3ea7b5a6849e1eaef" id="c_agreement_05" class="checker-input" type="checkbox">

                                                        <label class="checker-default" for="c_agreement_05">

                                                            <p>E-mail</p>

                                                        </label>

                                                    </div>

                                                    <div class="checker-field">

                                                        <input name="9a699fed71e64089511759750c2bc749" id="c_agreement_06" class="checker-input" type="checkbox">

                                                        <label class="checker-default" for="c_agreement_06">

                                                            <p>Rozmowa telefoniczna</p>

                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-footer-last ">

                                    <div class="footer-data"></div>

                                    <button type="submit" class="btn-primary btn-arrow">WYŚLIJ</button>

                                </div>

                            </div>

                        </div>

                    </form>

                </div>

                <div class="slide s-form_5">

                    <div class="my-container">

                        <div class="s-content">

                            <h2>DZIĘKUJEMY!</h2>

                            <p><strong>za zainteresowanie Nowym <span class="colored">ASX</span>.</strong></p>

                            <p>Autoryzowany Dealer Mitsubishi skontaktuje się z Tobą w sprawie szczegółów.</p>

                            <div>

                                <a href="#" id="btn-prev" class="btn-white btn-arrow">WRÓĆ</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>




<!--
            <div class="section bg-black" data-section="3">

                <div class="my-container">

                    <div class="main-content">

                        <h3>Zarezerwuj swoje <span class="colored">Nowe ASX</span> z wyjątkowym pakietem korzyści </h3>

                        <p>Już teraz <strong>zarezerwuj swoje nowe ASX</strong> z wyjątkowym pakietem korzyści i zyskaj dodatkowe <strong>2-lata ochrony pogwarancyjnej</strong>.</p>

                        <div class="btn-wrapper">

                            <a href="https://www.mitsubishi.pl/asx-2023-premiera" target="_blank" class="btn-primary btn-arrow">CHCĘ ZAREZERWOWAĆ</a>

                        </div>

                    </div>

                </div>

            </div>
-->





            <div class="section bg-section section-advantages" style="background-image:url('img_pp/polish-advantages.jpg')">

                <div class="my-container">

                    <div class="advantages-heading">

                        <h3>KORZYŚCI Z WYBORU MARKI MITSUBISHI</h3>

                    </div>

                    <div class="advantages-row">

                        <div class="advantages-col">

                            <div class="advantages-icon">

                                <img src="img_pp/a-icon-1.svg">

                            </div>

                            <div class="advantages-title">

                                <h4>5 lat gwarancji</h4>

                            </div>

                        </div>

                        <div class="advantages-col">

                            <div class="advantages-icon">

                                <img src="img_pp/a-icon-2.svg">

                            </div>

                            <div class="advantages-title">

                                <h4>+2 lata ochrony<br>pogwarancyjnej</h4>

                            </div>

                        </div>

                    </div>

                    <div class="advantages-row">

                        <div class="advantages-col">

                            <div class="advantages-icon">

                                <img src="img_pp/a-icon-3.svg">

                            </div>

                            <div class="advantages-title">

                                <h4>24/7 Pomoc<br>Mitsubishi</h4>

                            </div>

                        </div>

                        <div class="advantages-col">

                            <div class="advantages-icon">

                                <img src="img_pp/a-icon-4.svg">

                            </div>

                            <div class="advantages-title">

                                <h4>Zobowiązanie<br>Serwisowe<br>Mitsubishi</h4>

                            </div>

                        </div>

                        <div class="advantages-col">

                            <div class="advantages-icon">

                                <img src="img_pp/a-icon-5.svg">

                            </div>

                            <div class="advantages-title">

                                <h4>Japońska<br>technologia<br>i precyzja</h4>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



		<!-- Javascripts -->



        <script>



            // Select2 init

            $(function () {

                $('.select-default').select2({

                    minimumResultsForSearch: -1,

                });

            })



            let flag = false;

            function loadDealer() {

                if (flag == false) {

                    let url = window.document.referrer;

                    let ref = url.match(/:\/\/(.[^/]+)/)[1];



                    let sliced = ref.split(".");

                    let city = '';



                    if (sliced[0] == 'www') {

                        if (sliced[1] == 'mitsubishi') {

                            city = sliced[2]

                        } else {

                            city = sliced[1];

                        }

                    } else if (sliced[0] == 'mitsubishi') {

                        city = sliced[1];

                    } else {

                        city = sliced[0];

                    }





                    if (city == 'mitsubishi-grafix') {

                        $('select[name="select_01"]').val('80');

                        $('#select_03 option:not([value="80"])').remove();

                        $('body').addClass('select-disabled');

                        $('#select_03').val('80');

                    } else if (city == 'mitsubishi-japanmotors') {

                        $('select[name="select_01"]').val('');

                        $('#select_03 option:not([data-dealer="japanmotors"])').remove();

                        $('body').addClass('select-multiple');

                        $('#select_03').val('');

                    } else if (city == 'mitsubishi-sobczyk') {

                        $('select[name="select_01"]').val('');

                        $('#select_03 option:not([data-dealer="mitsubishi-sobczyk"])').remove();

                        $('body').addClass('select-multiple');

                        $('#select_03').val('');

                    } else if (city == 'motorcentrum') {

                        $('select[name="select_01"]').val('69');

                        $('#select_03 option:not([value="69"])').remove();

                        $('body').addClass('select-disabled');

                        $('#select_03').val('69');

                    } else if (city == 'wojtanowicz') {

                        $('select[name="select_01"]').val('87');

                        $('#select_03 option:not([value="87"])').remove();

                        $('body').addClass('select-disabled');

                        $('#select_03').val('87');

                    } else if (city == 'mitsubishi-katowice') {

                        $('select[name="select_01"]').val('68');

                        $('#select_03 option:not([value="68"])').remove();

                        $('body').addClass('select-disabled');

                        $('#select_03').val('68');

                    } else if (city == 'mitsubishi-lublin') {

                        $('select[name="select_01"]').val('132');

                        $('#select_03 option:not([value="132"])').remove();

                        $('body').addClass('select-disabled');

                        $('#select_03').val('132');

                    } else if (city == 'mitsubishi-polody') {

                        $('select[name="select_01"]').val('');

                        $('#select_03 option:not([data-dealer="polody"])').remove();

                        $('body').addClass('select-multiple');

                        $('#select_03').val('');

                    } else if (city == 'mitsubishi-zabrze') {

                        $('select[name="select_01"]').val('130'); 

                        $('#select_03 option:not([value="130"])').remove();

                        $('body').addClass('select-disabled');

                        $('#select_03').val('130');

                    } else if (city == 'mitsubishigorzow') {

                        $('select[name="select_01"]').val('48'); 

                        $('#select_03 option:not([value="48"])').remove();

                        $('body').addClass('select-disabled');

                        $('#select_03').val('48');

                    } else if (city == 'kalisz') {

                        $('select[name="select_01"]').val('50'); 

                        $('#select_03 option:not([value="50"])').remove();

                        $('body').addClass('select-disabled');

                        $('#select_03').val('50');

                    } else if (city == 'autokrak') {

                        $('select[name="select_01"]').val('56'); 

                        $('#select_03 option:not([value="56"])').remove();

                        $('body').addClass('select-disabled');

                        $('#select_03').val('56');

                    } else if (city == 'satall') {

                        $('select[name="select_01"]').val(''); 

                        $('#select_03 option:not([data-dealer="satall"])').remove();

                        $('body').addClass('select-multiple');

                        $('#select_03').val('');

                    } else if (city == 'michalskimotors') {

                        $('select[name="select_01"]').val('61'); 

                        $('#select_03 option:not([value="61"])').remove();

                        $('body').addClass('select-disabled');

                        $('#select_03').val('61');

                    } else if (city == 'rzeszow') {

                        $('select[name="select_01"]').val('60'); 

                        $('#select_03 option:not([value="60"])').remove();

                        $('body').addClass('select-disabled');

                        $('#select_03').val('60');

                    } else if (city == 'mitsubishiszczecin') {

                        $('select[name="select_01"]').val('131'); 

                        $('#select_03 option:not([value="131"])').remove();

                        $('body').addClass('select-disabled');

                        $('#select_03').val('131');

                    } else if (city == 'torun') {

                        $('select[name="select_01"]').val('51'); 

                        $('#select_03 option:not([value="51"])').remove();

                        $('body').addClass('select-disabled');

                        $('#select_03').val('51');

                    } else if (city == 'autogt') {

                        $('select[name="select_01"]').val('55'); 

                        $('#select_03 option:not([value="55"])').remove();

                        $('body').addClass('select-disabled');

                        $('#select_03').val('55');

                    } else if (city == 'zaborowski') {

                        $('select[name="select_01"]').val('129'); 

                        $('#select_03 option:not([value="129"])').remove();

                        $('body').addClass('select-disabled');

                        $('#select_03').val('129');

                    } else if (city == 'mitsubishizg') {

                        $('select[name="select_01"]').val('49'); 

                        $('#select_03 option:not([value="49"])').remove();

                        $('body').addClass('select-disabled');

                        $('#select_03').val('49');

                    } else {

                        $('select[name="select_01"]').val('');

                    }



                    setTimeout(() => {

                        $('#select_03').trigger('change');

                    }, 2500);



                }

                flag = true;

            };





            $(function(){

                loadDealer();

            })





            // countdown

            $(function(){

                let countDownDate = new Date("Dec 01, 2022 9:20:00").getTime();



                let x = setInterval(function () {



                    let now = new Date().getTime();



                    let distance = countDownDate - now;



                    // Time calculations for days, hours, minutes and seconds

                    let days = Math.floor(distance / (1000 * 60 * 60 * 24));

                    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

                    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

                    let seconds = Math.floor((distance % (1000 * 60)) / 1000);





                    $('.counter').find('[data-id="day"]').html(days);

                    $('.counter').find('[data-id="hour"]').html(hours);

                    $('.counter').find('[data-id="minute"]').html(minutes);

                    $('.counter').find('[data-id="second"]').html(seconds);



                    if (distance < 0) {

                        clearInterval(x);

                        $('.counter').find('[data-id]').html('0');

                    }

                }, 1000);

            });

            // countdown



            // form

            function sendForm($form) {



                let name = $('#'+$form+' input[name="client_name"]').val();

                let phone = $('#'+$form+' input[name="client_phone"]').val();

                let email = $('#'+$form+' input[name="client_email"]').val();

                let dealer = $('#'+$form+' select[name="select_01"]').val();

                let form = $form;



                let engine = $('#'+$form+' li[data-engine]').attr('data-engine');

                let version = $('#'+$form+' input[name="1da69054-a58b-4f6a-a6e8-ed84bed45bf7"]').val();

                let color = $('#'+$form+' li[data-color]').attr('data-color');

                let color_variable = $('#'+$form+' li[color-variable]').attr('color-variable');



                // jazda testowa

                let rules = $('#'+$form+' input[name="e0e07596c60c5f1cf808b451d41c2a6d"]').prop('checked');

                let info = $('#'+$form+' input[name="4206590a1b4de358b966687d4c15d56c"]').prop('checked');

                let mmc_phone = $('#'+$form+' input[name="d6e44529d1583a516ffd1850b97d892b"]').prop('checked');

                let mmc_mail = $('#'+$form+' input[name="29638676a291ae31511090185595ee62"]').prop('checked');

                let dealer_phone = $('#'+$form+' input[name="9a699fed71e64089511759750c2bc749"]').prop('checked');

                let dealer_mail = $('#'+$form+' input[name="49be1cd4dd99e4b3ea7b5a6849e1eaef"]').prop('checked');



                let utm_source = $('#'+$form+' input[name="utm_source"]').val();

                let utm_medium = $('#'+$form+' input[name="utm_medium"]').val();

                let utm_campaign = $('#'+$form+' input[name="utm_campaign"]').val();



                let data = new Object();

                data.form = form;

                data.name = name;

                data.email = email;

                data.phone = phone;

                data.dealer = dealer;

                data.referrer = window.location.href;

                data.engine = engine;

                data.version = version;

                data.color = color;

                data.color_variable = color_variable;

                data.rules = rules;

                data.info = info;

                data.mmc_phone = mmc_phone;

                data.mmc_mail = mmc_mail;

                data.dealer_phone = dealer_phone;

                data.dealer_mail = dealer_mail;

                // utm

                data.utm_source = utm_source;

                data.utm_medium = utm_medium;

                data.utm_campaign = utm_campaign;



                    jQuery.ajax({

                        type: "post",

                        dataType: "json",

                        url: 'form.php',

                        data: data,

                        success: function (response) {

                            console.log(response);

                            console.log('success');

                            clearForm();

                            $('.s-last-form').fadeOut(250);

                            $('.s-polish-form').addClass('disable-bg');

                            $('.s-form_5').fadeIn(250);

                            $('.s-form_5').css('display','flex');

                        },

                        error: function (response) {

                            console.error(response);

                        }

                    });

                }



                function clearForm(){

                    $('input[name="client_name"]').val('');

                    $('input[name="client_phone"]').val('');

                    $('input[name="client_email"]').val('');

                    $('select[name="select_01"]').val('');



                    // jazda testowa

                    $('input[name="4206590a1b4de358b966687d4c15d56c"]').prop('checked', false);

                    $('input[name="d6e44529d1583a516ffd1850b97d892b"]').prop('checked', false);

                    $('input[name="29638676a291ae31511090185595ee62"]').prop('checked', false);

                    $('input[name="e0e07596c60c5f1cf808b451d41c2a6d"]').prop('checked', false);

                    $('input[name="9a699fed71e64089511759750c2bc749"]').prop('checked', false);

                    $('input[name="49be1cd4dd99e4b3ea7b5a6849e1eaef"]').prop('checked', false);

                }



                // Wywołanie funkcji

                $(document).on('submit', '#contactFormPolish', function(e){

                    e.preventDefault();

                    let $form = $(this).attr('id');

                    let formDiv = $('#'+$form+'');

                    $error = 0;

                    $('.field-validator').fadeOut(200);

                    $(formDiv).find('.validate-field').each(function(){

                        let input = $(this).find('input');

                        let select = $(this).find('select');

                        $(this).removeClass('error-field');

                        if(input.attr('type') == 'checkbox'){

                            if($(this).find('input').prop('checked') == false){

                                $error = 1;

                                $('.field-validator').fadeIn(200);

                                $(this).addClass('error-field');

                            }

                        }

                        if(input.attr('type') != 'checkbox'){

                            if(input.val() < 3){

                                $error = 1;

                                $('.field-validator').fadeIn(200);

                                $(this).addClass('error-field');

                            }

                        }

                        if(select.val() == ''){

                            $error = 1;

                            $('.field-validator').fadeIn(200);

                            $(this).addClass('error-field');

                        }

                    })



                    if($error == 0){

                        sendForm($form);

                    }

                })



                $('#btn-prev').on('click', function(e){

                    e.preventDefault();

                    $('.s-form_5').fadeOut(250);

                    $('.s-polish-form').removeClass('disable-bg');

                    $('.s-last-form').fadeIn(250);

                })



        </script>

	</body>

</html>



