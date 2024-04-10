<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">



<head>

    <?php
    include('scripts/gtm-head.php');
    ?>

    <title>Mitsubishi Colt</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Normalize -->
    <link rel="stylesheet" href="css/normalize.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="css/select2.min.css">

    <!-- Fullpage -->
    <link rel="stylesheet" href="css/fullpage.min.css">

    <!-- Slick -->
    <link rel="stylesheet" href="css/slick.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/design.css">

    <link rel="stylesheet" href="css/colt.css">




    <!-- Scripts -->
    <script src="js/jquery-3.6.0.min.js"></script>


    <script>
        window.dataLayer = window.dataLayer || [];
    </script>





    <style>
        .btn-primary.loading:after {
            content: "";
            display: inline-block;
            width: 10px;
            height: 10px;
            margin-left: 6px;
            border-radius: 50%;
            border: 2px solid #fff;
            border-color: #fff transparent #fff transparent;
            animation: loading 0.8s infinite;
        }

        @keyframes loading {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>


    <script>
        $(document).ready(function() {
            var formSubmitted = false;

            $('#contactForm, #contactFormLast, #contactFormMobile').submit(function(e) {
                if (formSubmitted) {
                    e.preventDefault(); // Przerywa wysyłanie formularza
                } else {
                    formSubmitted = true;
                    $('.btn-primary').prop('disabled', true);
                    $('.btn-primary').addClass('loading');

                    setTimeout(function() {
                        formSubmitted = false;
                        $('.btn-primary').prop('disabled', false);
                        $('.btn-primary').removeClass('loading');
                        $('input[name="4206590a1b4de358b966687d4c15d56c"]').prop('checked', false);
                        $('input[name="d6e44529d1583a516ffd1850b97d892b"]').prop('checked', false);
                    }, 5000);
                }
            });
        });
    </script>



    <script>
        let lastScrollTime = 0;
        const scrollSensitivity = 300; // Regulacja wrażliwości, większa wartość oznacza mniejszą wrażliwość

        document.addEventListener('wheel', function(event) {
            const currentTime = new Date().getTime();
            if (currentTime - lastScrollTime > scrollSensitivity) {
                if (event.deltaY > 0) {
                    fullpage_api.moveSectionDown();
                } else if (event.deltaY < 0) {
                    fullpage_api.moveSectionUp();
                }
                lastScrollTime = currentTime;
            }
        });
    </script>


    <script>
        function dL_info_request_click() {
            dataLayer.push({
                event: 'info_request_click',
                comp_product: {
                    position: 'page',
                    vehicle_type: 'car',
                    brand: 'mitsubishi',
                    product_condition: 'new',
                    model: 'colt',
                    version: null,
                    fuel_type: null,
                    dealer_name: null
                }
            });
        }

        function dL_reservation_request_click() {
            dataLayer.push({
                event: 'reservation_request_click',
                comp_product: {
                    position: 'page',
                    vehicle_type: 'car',
                    brand: 'mitsubishi',
                    product_condition: 'new',
                    model: 'colt',
                    version: null,
                    fuel_type: null
                }
            });
        }


        function getReservationFuelData() {
            var fuelRadioButtons = document.querySelectorAll('input[name="checker_engine"]');
            var selectedFuelRadioButton;

            for (var i = 0; i < fuelRadioButtons.length; i++) {
                if (fuelRadioButtons[i].checked) {
                    selectedFuelRadioButton = fuelRadioButtons[i];
                    break;
                }
            }

            if (selectedFuelRadioButton) {
                var fuel_type_value = selectedFuelRadioButton.value;
                return fuel_type_value;
            } else {
                return null;
            }
        }


        function getReservationVersionData() {
            var versionRadioButtons = document.querySelectorAll('input[name="checker_version"]');
            var selectedVersionRadioButton;

            for (var i = 0; i < versionRadioButtons.length; i++) {
                if (versionRadioButtons[i].checked) {
                    selectedVersionRadioButton = versionRadioButtons[i];
                    break;
                }
            }

            if (selectedVersionRadioButton) {
                var version_value = selectedVersionRadioButton.value;
                return version_value.toLowerCase();
            } else {
                return null;
            }

        }


        function dL_reservation_request_view() {

            dataLayer.push({
                event: 'reservation_request_view',
                comp_product: {
                    vehicle_type: 'car',
                    brand: 'mitsubishi',
                    product_condition: 'new',
                    model: 'colt',
                    version: getReservationVersionData(),
                    fuel_type: getReservationFuelData(),
                    reservation_payment_type: null,
                    name_form: null,
                    name_form_sha: null,
                    phone_form: null,
                    phone_form_sha: null,
                    email_form: null,
                    email_form_sha: null,
                    step: null
                }
            });
        }



        function dl_reservation_request_steps(step) {
            dataLayer.push({
                event: 'reservation_request_steps',
                comp_product: {
                    vehicle_type: 'car',
                    brand: 'mitsubishi',
                    product_condition: 'new',
                    model: 'colt',
                    version: getReservationVersionData(), //to check
                    fuel_type: getReservationFuelData(),
                    reservation_payment_type: null,
                    name_form: null,
                    name_form_sha: null,
                    phone_form: null,
                    phone_form_sha: null,
                    email_form: null,
                    email_form_sha: null,
                    step: step //to check
                }
            });
        }
    </script>





</head>

<body>

    <?php include('scripts/gtm-body.php'); ?>

    <div id="fullpage">



        <!--
        <div class="section active bg-section hero" aria-label="Mitsubishi Colt 2023 premiera">

            <div class="section_container section_container_1">

                <div class="title animation top-reset">
                <h3 class="animation h3-section-1" style="margin-bottom: 10px !important;">Mitsubishi Colt</h3>
                <h4 class="animation h4-section-1" style="margin-bottom: 22px;">Zarezerwuj i zyskaj 7 lat spokoju</h4>
            </div>

                <div class="my-container height-reset position-reset">
                   <div class="animation btn-group">
                        <a href="#" data-scroll="nextSlide" class="btn-white btn-bordered btn-arrow btn-arrow-down">DALEJ</a>
                        <a href="#" onClick="fullpage_api.moveTo(9);" class="btn-primary btn-arrow">DOWIEDZ SIĘ WIĘCEJ</a>
                    </div>
                 </div>

            </div>

        </div>
    -->




        <!-- SECTION HERO mod-->

        <div class="section active bg-section section-hero" aria-label="Mitsubishi Colt 2023 premiera">

            <div class="section_container">

                <div class="">
                    <h1 class="animation title">Mitsubishi Colt już&nbsp;od&nbsp;72&nbsp;990&nbsp;zł</h1>
                    <!--<p class="animation subtitle">Sprawdź korzystne formy finansowania</p>-->
                </div>

                <div class="animation content hide">

                </div>

                <div class="animation btn-group">
                    <a href="#" data-scroll="nextSlide" class="btn btn-transparent btn-arrow btn-arrow-down">DALEJ</a>
                    <a href="#" onClick="fullpage_api.moveTo(9);" class="btn btn-red btn-arrow">DOWIEDZ SIĘ WIĘCEJ</a>
                </div>

            </div>

        </div>

        <!-- SECTION HERO mod-->



        <!-- video section -->

        <?php
        include('sections/video-section.php');
        ?>

        <!-- video section -->





        <!-- BENEFITS ZONE -->

        <div class="section bg-section section-benefits" aria-label="Mitsubishi Eclipse Cross PHEV">


            <div id="modal" onclick="close_modal()">

                <div class="close-button">
                    <img src="images/close-ellipse-svgrepo-com.svg" style="close_ico">
                </div>

                <p class="disclaimer" style="font-size:12px !important; line-height: 20px !important;">
                    <sup>1</sup>
                    Dla kredytu samochodowego oferowanego przez Santander Consumer Bank S.A. z siedzibą we Wrocławiu, ul. Legnicka 48 B dotyczącego modelu Mitsubishi Colt 1.0 INFORM , przy założeniu że cena pojazdu wynosi 72990zł, wkład własny 21897zł, wyliczenia dla przykładu reprezentatywnego na dzień 24.01.2024 r. ustalonego zgodnie z ustawą z dnia 12.5.2011 r. o kredycie konsumenckim są następujące: zmienna stopa oprocentowania kredytu: 8,69%, całkowity koszt kredytu: 19978,88zł, który obejmuje: odsetki: 19978,88zł. Rzeczywista roczna stopa oprocentowania (RRSO) wynosi 9,04% dla całkowitej kwoty kredytu: 51093zł; czas obowiązywania umowy: 96 miesięcy; całkowita kwota do zapłaty przez konsumenta: 71 071,88zł; wysokość pierwszej miesięcznej spłaty: 740,53zł, wysokość miesięcznych równych spłat 2-95: 740,33 zł. Propozycja obowiązuje od 01.02.2024 do 29.02.2024. Niniejsza propozycja nie jest ofertą w rozumieniu art. 66 Kodeksu Cywilnego. Ostateczna decyzja o przyznaniu kredytu z uwzględnieniem oceny zdolności kredytowej Klienta, zostanie podjęta przez Santander Consumer Bank S.A.
                </p>
                <p class="disclaimer" style="font-size: 12px !important; line-height: 20px !important;">
                    <sup>2</sup>
                    Dla kredytu samochodowego 50/50 oferowanego przez Santander Consumer Bank S.A. z siedzibą we Wrocławiu, ul. Legnicka 48 B dotyczącego modelu Mitsubishi Colt 1.0 Invite , przy założeniu że cena pojazdu wynosi 78990zł, wkład własny 39495zł, wyliczenia dla przykładu reprezentatywnego na dzień 24.01.2024 r. ustalonego zgodnie z ustawą z dnia 12.5.2011 r. o kredycie konsumenckim są następujące: stała stopa oprocentowania kredytu: 0%, całkowity koszt kredytu: 0zł. Rzeczywista roczna stopa oprocentowania (RRSO) wynosi 0% dla całkowitej kwoty kredytu: 39495 zł; czas obowiązywania umowy: 12 miesięcy; całkowita kwota do zapłaty przez konsumenta: 39495zł; wysokość raty balonowej: 39495zł płatnej w 12 miesiącu obowiązywania umowy. Propozycja obowiązuje od 01.02.2024 do 29.02.2024. Niniejsza propozycja nie jest ofertą w rozumieniu art. 66 Kodeksu Cywilnego. Ostateczna decyzja o przyznaniu kredytu z uwzględnieniem oceny zdolności kredytowej Klienta, zostanie podjęta przez Santander Consumer Bank S.A.
                </p>
                <p class="disclaimer" style="font-size: 12px !important; line-height: 20px !important;">
                    <sup>3</sup>
                    Przykładowa kalkulacja leasingu 101 % dla przedsiębiorców oferowanego przez Santander Consumer Multirent Spółka z o.o. z siedzibą we Wrocławiu: cena zakupu pojazdu 64 219,51zł netto, opłata wstępna 20%, czas obowiązywania umowy 35 miesięcy, produkt zawiera karte paliwową . Niniejsza propozycja nie jest ofertą w rozumieniu przepisów. Kodeksu Cywilnego i ma charakter wyłącznie informacyjny. Szczegóły u Doradcy.
                </p>

            </div>


            <div class="bg_benefit_1"></div>
            <div class="bg_benefit_2"></div>


            <div class="section_container">

                <div class="hide">

                </div>

                <div class="animation content">
                    <div></div>
                    <div class="centered">
                        <h2 class="animation title">Strefa korzyści</h2>
                        <p class="animation subtitle">Wybierz rozwiązanie<br> najlepsze dla Ciebie<br></p>
                        <div class="benefits">
                            <div class="benefit">
                                <p class="benefit_1">
                                <ul>
                                    <li><a href="#" onclick="open_modal();">Kredyt "Niska rata" od 740 zł brutto <sup style="text-decoration: underline;">1</sup></a></li>
                                    <li><a href="#" onclick="open_modal();">Kredyt 50/50 RRSO 0% <sup style="text-decoration: underline;">2</sup></a></li>
                                    <li><a href="#" onclick="open_modal();">Atrakcyjny leasing 101% <sup style="text-decoration: underline;">3</sup></a></li>

                                </ul>
                            </div>
                            <!--
                            <div class="benefit"><p class="benefit_2">

                            </div>
                            -->
                        </div>
                    </div>
                    <p class="animation text"></p>
                </div>

                <div class="animation btn-group">
                    <a href="#" data-scroll="nextSlide" class="btn btn-transparent btn-arrow btn-arrow-down">DALEJ</a>
                    <a href="#" onClick="fullpage_api.moveTo(9);" class="btn btn-red btn-arrow">DOWIEDZ SIĘ WIĘCEJ</a>
                </div>

            </div>

        </div>


        <script>
            function open_modal() {
                $('#modal').addClass('active');
            }

            function close_modal() {
                $('#modal').removeClass('active');
            }
        </script>



        <!-- BENEFITS ZONE -->













        <div class="section bg-section s-preform_5">

            <div class="section_container">

                <div class="title animation top-reset">
                    <h3 class="animation clt_h3 font-54" style="">Najbardziej zaawansowane auto</h3>
                    <h4 class="animation clt_h4">w segmencie B z 5-letnią gwarancją</h4>
                </div>

                <div class="my-container height-reset position-reset">
                    <p class="animation">
                        Nowe Mitsubishi Colt zostało zaprojektowane z myślą o przyszłości, by stać się technologicznym przełomem wyznaczającym nowe standardy w tej klasie aut. Może posiadać do 17 zaawansowanych systemów i rozwiązań wspomagających kierowcę w codziennym użytkowaniu, w tym między innymi: adaptacyjny tempomat z funkcją STOP&GO (ACC), system kamer 360 stopni (AVM), monitorowanie odstępu do pojazdu poprzedzającego (Distance Warning), system autonomicznego parkowania (PA), ładowarkę indukcyjną do smartfonów czy też bezprzewodowy Apple CarPlay i Android Auto.
                    </p>
                    <div class="animation btn-group">
                        <a href="#" data-scroll="nextSlide" class="btn-white btn-bordered btn-arrow btn-arrow-down">DALEJ</a>
                        <a href="#" onClick="fullpage_api.moveTo(9);" class="btn-primary btn-arrow">DOWIEDZ SIĘ WIĘCEJ</a>
                    </div>
                </div>

            </div>

        </div>








        <div class="section bg-section s-preform_2">

            <div class="section_container">

                <div class="title animation top-reset">
                    <h3 class="animation clt_h3">Najmocniejsza hybryda</h3>
                    <h4 class="animation clt_h4">w segmencie B z 5-letnią gwarancją</h4>
                </div>

                <div class="my-container height-reset position-reset">
                    <p class="animation" style="font-size: 16px; margin-bottom: 20px;">
                        Mitsubishi Colt podążając za najnowszymi trendami i oczekiwaniami klientów otrzymało teraz także samoładujący się napęd F hybrid. Ta zaawansowana hybryda najnowszej generacji wyróżnia się najwyższą mocą pośród konkurencji – aż 143KM. Mitsubishi jako jedyna marka w tej klasie aut oferuje na niego 5-letnią gwarancję (oraz 8 lat na akumulator trakcyjny o największej pojemności w tym segmencie).
                    </p>
                    <div class="animation btn-group">
                        <a href="#" data-scroll="nextSlide" class="btn-white btn-bordered btn-arrow btn-arrow-down">DALEJ</a>
                        <a href="#" onClick="fullpage_api.moveTo(9);" class="btn-primary btn-arrow">DOWIEDZ SIĘ WIĘCEJ</a>
                    </div>
                </div>

            </div>

        </div>






        <div class="section bg-section s-preform_4">
            <div style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.2);">

                <div class="video-container" style="position: fixed; width: 100%; height: 100vh;">
                    <video style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" loop="" autoplay="" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                        <source src="images/colt/All-New COLT_Static_1.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="section_container">

                    <div class="title animation top-reset">
                        <h3 class="animation clt_h3 font-54">System<br> autonomicznego parkowania</h3>
                    </div>

                    <div class="my-container height-reset position-reset max-width-reset">
                        <p class="animation">
                            Zapomnij o stresie i bolączkach parkowania dzięki Park Assist. Ten innowacyjny system pozwala wyszukać dostępne miejsce parkingowe – prostopadłe, równoległe, ale również i skośne. Park Assist nie tylko sam zaparkuje auto, ale pozwoli także bezpiecznie i automatycznie wyjechać z miejsca postojowego, samodzielnie obracając kierownicą.
                        </p>
                        <div class="animation btn-group">
                            <a href="#" data-scroll="nextSlide" class="btn-white btn-bordered btn-arrow btn-arrow-down">DALEJ</a>
                            <a href="#" onClick="fullpage_api.moveTo(9);" class="btn-primary btn-arrow">DOWIEDZ SIĘ WIĘCEJ</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>










        <div class="section bg-section s-preform_3">

            <div class="section_container">

                <div class="title animation top-reset">
                    <h3 class="animation clt_h3 shadow">Dynamizm i funkcjonalność</h3>
                    <h4 class="animation clt_h4 shadow">zawarte w każdym detalu</h4>
                </div>

                <div class="my-container height-reset position-reset">
                    <p class="animation">
                        Nowe Mitsubishi Colt emanuje stylem, elegancją i nowoczesnością w każdym calu. Futurystyczny design linii nadwozia, kół oraz detali wnętrza podkreśla technologiczną wyjątkowość, nie ujmując funkcjonalności auta. Nowy Colt śmiało może pełnić rolę auta rodzinnego, oferując jeden z największych w klasie 391-litrowy bagażnik, liczne schowki o łącznej pojemności ponad 26 litrów oraz ponadprzeciętnie przestronną kabinę. Bez kompromisów.
                    </p>
                    <div class="animation btn-group">
                        <a href="#" data-scroll="nextSlide" class="btn-white btn-bordered btn-arrow btn-arrow-down">DALEJ</a>
                        <a href="#" onClick="fullpage_api.moveTo(9);" class="btn-primary btn-arrow">DOWIEDZ SIĘ WIĘCEJ</a>
                    </div>
                </div>

            </div>

        </div>








        <div class="section bg-section s-preform_6">
            <div style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6);">

                <div class="section_container">

                    <div class="title animation top-reset">
                        <h3 class="animation clt_h3">Zobowiązanie serwisowe Mitsubishi</h3>
                    </div>

                    <div class="my-container height-reset position-reset">
                        <p class="animation" style="font-size: 16px;">
                            Ponieważ jesteśmy dumni z niezawodności naszych samochodów, jako pierwszy japoński koncern samochodowy wprowadziliśmy 5-letnią gwarancję fabryczną z limitem 100 000 km.
                        <ul class="animation list">
                            <li>5 lat lub 100 000 km gwarancji fabrycznej na wybrane oryginalne akcesoria (w zależności, co nastąpi wcześniej)</li>
                            <li>5 lat assistance (Mitsubishi Assistance Package-MAP)</li>
                            <li>Nieodpłatna usługa kontroli samochodu*</li>
                        </ul>
                        </p>

                        <p class="animation disclaimer" style="margin-bottom: 20px;">
                            Gwarancja zostanie udzielona przy sprzedaży samochodu. Warunki gwarancji oraz Mitsubishi Assistance Package zostaną określone w dokumencie gwarancyjnym.
                            <br>
                            *Usługa nieodpłatnej kontroli pojazdu jest usługą czasową, dostępną u wybranych dealerów Mitsubishi i nie może być łączona z usługą przeglądu pojazdu. Warunki nieodpłatnej usługi kontroli samochodu dostępne są <a href="https://www.mitsubishi.pl/serwis/zobowiazanie-serwisowe-mitsubishi" target="_blank">tutaj</a>.
                        </p>

                        <div class="animation btn-group">
                            <!--<a href="#" data-scroll="nextSlide" class="btn-white btn-bordered btn-arrow btn-arrow-down">DALEJ</a>-->
                            <a href="#" onClick="fullpage_api.moveTo(9);" class="btn-primary btn-arrow">DOWIEDZ SIĘ WIĘCEJ</a>
                        </div>

                    </div>



                </div>

            </div>
        </div>






        <div class="section">
            <div class="slide s-last-form bg-section">
                <div class="my-container">
                    <form method="post" id="contactFormLast" action="" onsubmit="return false;">
                        <!-- wersja wyposażenia -->
                        <input type="hidden" name="1da69054-a58b-4f6a-a6e8-ed84bed45bf7" value="">

                        <input type="hidden" name="utm_source" value="<?= (isset($_GET['utm_source']) && trim($_GET['utm_source']) != '' ? trim($_GET['utm_source']) : "") ?>">
                        <input type="hidden" name="utm_medium" value="<?= (isset($_GET['utm_medium']) && trim($_GET['utm_medium']) != '' ? trim($_GET['utm_medium']) : "")  ?>">
                        <input type="hidden" name="utm_campaign" value="<?= (isset($_GET['utm_campaign']) && trim($_GET['utm_campaign']) != '' ? trim($_GET['utm_campaign']) : "")  ?>">


                        <div class="contact-form-inner">
                            <div class="form-heading">
                                <h3 class="animation text-uppercase">Chcesz dowiedzieć się więcej o <strong>nowym <span class="colored">Colcie</span>?</strong></h3>
                                <h4 class="animation text-uppercase hide-mobile"><strong>Skontaktuj się</strong> ze swoim dealerem.</h4>
                            </div>
                            <div class="form-content form-content-row form-fields-row">
                                <div class="form-content-col input-col animation">
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
                                                    <option value="138">Kielce - CMC MOTORS</option>
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
                                                <input class="input-default required" name="client_name" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- required -->
                                    <div class="col-6">
                                        <div class="form-field validate-field">
                                            <div class="input-field input-phone">
                                                <p class="input-field-placeholder">WPISZ NUMER TELEFONU</p>
                                                <input class="input-default required" name="client_phone" type="number">
                                            </div>
                                        </div>
                                        <!-- required -->
                                        <div class="form-field">
                                            <div class="input-field input-mail">
                                                <p class="input-field-placeholder">WPISZ ADRES E-MAIL</p>
                                                <input class="input-default" name="client_email" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-content-col animation">
                                    <h5 class="text-uppercase hide-mobile">Chcę dowiedzieć się więcej o nowym <span class="colored">Mitsubishi Colt?</span>:</h5>
                                    <!-- required -->
                                    <div class="form-field validate-field">
                                        <div class="checker-field">
                                            <input name="4206590a1b4de358b966687d4c15d56c" id="c_agreement_01" class="checker-input required" type="checkbox">
                                            <label class="checker-default" for="c_agreement_01">
                                                <p>Jestem zainteresowany/a tą propozycją. Proszę o przekazanie dalszych informacji z wykorzystaniem podanych powyżej danych kontaktowych.</p>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- required -->
                                    <div class="form-field validate-field">
                                        <div class="checker-field">
                                            <input name="437cfd96091e193cc075374e5ca1f816" id="c_agreement_02" class="checker-input required" type="checkbox">
                                            <label class="checker-default" for="c_agreement_02">
                                                <p>Potwierdzam zapoznanie się z <a href="https://www.mitsubishi.pl/klauzula-promocje-oferty" target="_blank">klauzulą informacyjną</a> dotyczącą przetwarzania danych osobowych, w tym z prawem do cofnięcia udzielonych zgód. </p>
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
                            <div class="form-footer-last animation">
                                <div class="footer-data"></div>
                                <button type="submit" class="btn-primary btn-arrow">WYŚLIJ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="slide bg-section s-form_5">
                <div class="my-container">
                    <div class="s-content">
                        <h2 class="animation color_black">DZIĘKUJEMY!</h2>
                        <p class="animation color_black"><strong>za zainteresowanie Nowym Mitsubishi Colt.</strong></p>
                        <p class="animation color_black">Autoryzowany Dealer Mitsubishi skontaktuje się z Tobą w sprawie szczegółów.</p>
                        <div class="animation">
                            <a href="#" onclick="fullpage_api.moveTo(1);" class="btn-white btn-arrow">WRÓĆ</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>








    </div>






    <!-- versions modal -->
    <?php
    include('sections/versions.php');
    ?>
    <!-- versions modal -->









    <script>
        // YT PLAYERS
        let player;
        let playersArray = [];
        let tag = document.createElement('script');
        tag.src = "https://www.youtube.com/player_api";
        let firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        function onYouTubePlayerAPIReady() {
            player = new YT.Player('yt_player', {
                width: '100%',
                height: '100%',
                videoId: '3xkw0eKa21U',
                events: {
                    'onReady': onPlayerReadyStart,
                    'onStateChange': onPlayerStateChange
                }
            });
            playersArray.push({
                'playerID': 'player',
                'playerObj': {
                    'player': player
                }
            });

            player_2 = new YT.Player('yt_player_2', {
                height: '100%',
                width: '100%',
                videoId: '-ePewetu2dQ',
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
            playersArray.push({
                'playerID': 'player_2',
                'playerObj': {
                    'player': player_2
                }
            });
        }

        function onPlayerReadyStart(event) {
            event.target.playVideo();
            player.mute();
        }

        function onPlayerReady(event) {
            let $video = $(event.target.i.parentNode);
            let $button = $video.find('.video-button');

            $('.video-default[data-player="player_2"]').addClass('is-init');
            $(document).on('click', '.video-default[data-player="player_2"] .video-button', function() {
                $('.video-default[data-player="player_2"] .video-thumbnail').fadeOut(300);
                player_2.playVideo();
            });
        }

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.ENDED || event.data == YT.PlayerState.PAUSED) {
                player.seekTo(0);
                player.playVideo();
            }
        }

        function stopVideo() {
            player.stopVideo();
        }
        // YT PLAYERS

        function sendForm($form) {

            let name = $('#' + $form + ' input[name="client_name"]').val();
            let phone = $('#' + $form + ' input[name="client_phone"]').val();
            let email = $('#' + $form + ' input[name="client_email"]').val();
            let dealer = $('#' + $form + ' select[name="select_01"]').val();
            let form = $form;

            let engine = $('#' + $form + ' li[data-engine]').attr('data-engine');
            let version = $('#' + $form + ' input[name="1da69054-a58b-4f6a-a6e8-ed84bed45bf7"]').val();
            let color = $('#' + $form + ' li[data-color]').attr('data-color');
            let color_variable = $('#' + $form + ' li[color-variable]').attr('color-variable');

            // jazda testowa
            let rules = $('#' + $form + ' input[name="4206590a1b4de358b966687d4c15d56c"]').prop('checked');
            let info = $('#' + $form + ' input[name="437cfd96091e193cc075374e5ca1f816"]').prop('checked');
            let mmc_phone = $('#' + $form + ' input[name="d6e44529d1583a516ffd1850b97d892b"]').prop('checked');
            let mmc_mail = $('#' + $form + ' input[name="29638676a291ae31511090185595ee62"]').prop('checked');
            let dealer_phone = $('#' + $form + ' input[name="9a699fed71e64089511759750c2bc749"]').prop('checked');
            let dealer_mail = $('#' + $form + ' input[name="49be1cd4dd99e4b3ea7b5a6849e1eaef"]').prop('checked');

            let utm_source = $('#' + $form + ' input[name="utm_source"]').val();
            let utm_medium = $('#' + $form + ' input[name="utm_medium"]').val();
            let utm_campaign = $('#' + $form + ' input[name="utm_campaign"]').val();

            let data = new Object();
            data.form = form;
            data.name = name;
            data.email = email;
            data.phone = phone;
            data.dealer = dealer;
            data.referrer = window.location.href;
            data.engine = engine;
            //data.version = version;
            data.version = getReservationVersionData();
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
                success: function(response) {
                    //console.log(response);
                    //console.log('success');

                    clearForm();


                    if (response.form_type === "formularz") {

                        dataLayer.push({
                            event: 'info_request_view',
                            comp_product: {
                                vehicle_type: response.vehicle_type,
                                brand: response.brand,
                                product_condition: response.product_condition,
                                model: response.model,
                                version: response.version,
                                fuel_type: response.fuel_type,
                                dealer_name: response.dealer_name,
                                name_form: response.name_form,
                                name_form_sha: response.name_form_sha,
                                phone_form: response.phone_form,
                                phone_form_sha: response.phone_form_sha,
                                email_form: response.email_form,
                                email_form_sha: response.email_form_sha,
                                step: '1/1'
                            }
                        });


                        dataLayer.push({
                            event: 'info_request_completed',
                            comp_product: {
                                vehicle_type: response.vehicle_type,
                                brand: response.brand,
                                product_condition: response.product_condition,
                                model: response.model,
                                version: response.version,
                                fuel_type: response.fuel_type,
                                dealer_name: response.dealer_name,
                                name_form: response.name_form,
                                name_form_sha: response.name_form_sha,
                                phone_form: response.phone_form,
                                phone_form_sha: response.phone_form_sha,
                                email_form: response.email_form,
                                email_form_sha: response.email_form_sha,
                                step: '1/1'
                            }
                        });

                    } else if (response.form_type === "rezerwacja") {

                        dataLayer.push({
                            event: 'reservation_request_completed',
                            comp_product: {
                                vehicle_type: response.vehicle_type,
                                brand: response.brand,
                                product_condition: response.product_condition,
                                model: response.model,
                                //version: response.version,
                                version: getReservationVersionData(),
                                //fuel_type: response.fuel_type,
                                fuel_type: getReservationFuelData(),
                                reservation_payment_type: null,
                                name_form: response.name_form,
                                name_form_sha: response.name_form_sha,
                                phone_form: response.phone_form,
                                phone_form_sha: response.phone_form_sha,
                                email_form: response.email_form,
                                email_form_sha: response.email_form_sha,
                                status: 'ok',
                                step: '2/2'
                            }
                        });
                    } else {

                    }





                    /*var dataLayerData = {
                            event: 'info_request_view',
                            comp_product: {
                                vehicle_type: response.vehicle_type,
                                brand: response.brand,
                                product_condition: response.product_condition,
                                model: response.model,
                                version: response.version,
                                fuel_type: response.fuel_type,
                                dealer_name: response.dealer_name,
                                name_form: response.name_form,
                                name_form_sha: response.name_form_sha,
                                phone_form: response.phone_form,
                                phone_form_sha: response.phone_form_sha,
                                email_form: response.email_form,
                                email_form_sha: response.email_form_sha,
                                step: response.step
                            }
                            };*/


                    //    window.parent.postMessage({ dataLayerData: JSON.stringify(dataLayerData) }, 'http://develop.mitsubishi.s.test.ideo.pl');




                    fullpage_api.moveSlideRight();




                },
                error: function(response) {
                    console.error(response);

                    dataLayer.push({
                        event: 'info_request_view',
                        comp_product: {
                            vehicle_type: response.vehicle_type,
                            brand: response.brand,
                            product_condition: response.product_condition,
                            model: response.model,
                            version: response.version,
                            fuel_type: response.fuel_type,
                            dealer_name: response.dealer_name,
                            name_form: response.name_form,
                            name_form_sha: response.name_form_sha,
                            phone_form: response.phone_form,
                            phone_form_sha: response.phone_form_sha,
                            email_form: response.email_form,
                            email_form_sha: response.email_form_sha,
                            step: response.step
                        }
                    });





                }
            });
        }










        function clearForm() {
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
        $(document).on('submit', '#contactForm,#contactFormMobile,#contactFormLast', function(e) {
            e.preventDefault();
            let $form = $(this).attr('id');
            let formDiv = $('#' + $form + '');
            $error = 0;
            $('.field-validator').fadeOut(200);
            $(formDiv).find('.validate-field').each(function() {
                let input = $(this).find('input');
                let select = $(this).find('select');
                $(this).removeClass('error-field');
                if (input.attr('type') == 'checkbox') {
                    if ($(this).find('input').prop('checked') == false) {
                        $error = 1;
                        $('.field-validator').fadeIn(200);
                        $(this).addClass('error-field');
                    }
                }
                if (input.attr('type') != 'checkbox') {
                    if (input.val() < 3) {
                        $error = 1;
                        $('.field-validator').fadeIn(200);
                        $(this).addClass('error-field');
                    }
                }
                if (select.val() == '') {
                    $error = 1;
                    $('.field-validator').fadeIn(200);
                    $(this).addClass('error-field');
                }
            })

            if ($error == 0) {
                sendForm($form);
            }
        })
    </script>
    <!-- after premiere -->



</body>


<!-- footer -->
<!-- Javascripts -->
<script src="js/bootstrap.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/fullpage.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/modernizr-custom.js"></script>

<!-- footer -->