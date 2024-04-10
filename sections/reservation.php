        <!-- reservation sections -->
        <?php
            //include('sections/reservation.php');
        ?>


<!--    
    <div class="section bg-section s-preform_6">
        <div class="my-container">
            <div class="container-left-top">
                <h4 class="animation">JUŻ TERAZ ZAREZERWUJ</h4>
                <h3 class="animation">NOWE MITSUBISHI <span class="colored">COLT</span></h3>
            </div>
            <div class="container-right-bottom">
                <p class="animation">Aby zyskać dodatkowy<br><strong>pakiet korzyści</strong></p>
                <div class="animation">
                    <a href="#" class="btn-white btn-arrow" data-scroll="nextSlide">DOWIEDZ SIĘ WIĘCEJ</a>
                </div>
            </div>
        </div>
    </div>
-->



<div class="section s-form" style="background-image:url('images/colt/section-5.jpg'); background-size:cover; background-position-x: 50%; background-position-y: 50%;">
        
        <!--<div class="slides-arrow-prev" data-scroll="leftSlide">
            <img src="images/prev-arrow.svg">
        </div>
        -->
        


       <div class="slide bg-section s-form_1">

            <!--
            <div class="video-container" style="position: fixed; width: 100%; height: 100vh; z-index: -2;">
                    <video id="my-video" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" loop="" autoplay="" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                        <source src="images/colt/23MY_Mitsubishi_Colt_Teaser_Snippet.mp4" type="video/mp4">
                    </video>
            </div>
            -->

    
            <div style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8);">


                <div class="section_container">

                    <div class="title animation top-reset"></div>

                        <div class="my-container">
                            
                        
                            <div class="form-heading">
                                <h4 class="animation">ZAREZERWUJ</h4>
                                <h3 class="animation">NOWE MITSUBISHI <span class="colored">COLT</span></h3>
                            </div>
                            

                            <div class="form-content">
                                <h5 class="animation">TWOJE KORZYŚCI:</h5>
                                <ul class="animation">
                                    <li>7 lat spokoju z Mitsubishi w standardzie:</li>
                                    <ul>
                                        <li>5 lat gwarancji + Mitsubishi Assistance Package + nieodpłatna usługa kontroli samochodu*</li>
                                        <li>2 lata ochrony pogwarancyjnej w wersji Premium**.</li>
                                    </ul>
                                    <!--<li>udział w <strong>zamkniętym pokazie</strong> modelu w najbliższym salonie Mitsubishi.</li>-->
                                </ul>
                            </div>


                            <div class="form-footer">
                                <div class="footer-data animation">
                                    <a href="https://www.mitsubishi.pl/storage/file/core_files/2023/10/3/fdb404a5e8680182e07545c474598012/Regulamin_programu_rezerwacji_nowego_Mitsubishi_Colt_102023.pdf" target="_blank" class="footer-inner">
                                        <img src="https://static.mitsubishi.pl/lp/lp-mitsubishi-models/images/icons/ico-white-info.svg">&nbsp;
                                        <h6>REGULAMIN<span class="hide-mobile"> REZERWACJI</span></h6>
                                        
                                    </a>
                                    <a href="https://static.mitsubishi.pl/cenniki/mitsubishi_colt_my24_py23.pdf" target="_blank" class="footer-inner">
                                        <img src="https://static.mitsubishi.pl/lp/lp-mitsubishi-models/images/icons/ico-white-pdf.svg">&nbsp;
                                        <h6>CENNIK</h6>
                                    </a>

                                    

                                </div>
                                <div class="animation anim-btn">
                                    <a href="#" data-scroll="rightSlide" onclick="dL_reservation_request_click();" class="btn-primary btn-arrow">ROZPOCZNIJ</a>
                                </div>
                            </div>


                            <div class="form-links animation">
                                    <p>Wypełnienie formularza nie jest równoznaczne z przystąpieniem do Programu rezerwacji. Do zakończenia procesu rezerwacji niezbędne jest podpisanie formularza rezerwacji u wybranego Dealera.</p>
                                    <a href="https://www.mitsubishi.pl/serwis/zobowiazanie-serwisowe-mitsubishi">*https://www.mitsubishi.pl/serwis/zobowiazanie-serwisowe-mitsubishi</a>
                                    <p>**2 lata ochrony pogwarancyjnej to nazwa handlowa ubezpieczenia kosztów napraw pojazdu oferowanego przez Helvetia Global Solutions Ltd. Warunki ubezpieczenia dostępne: <a href="https://www.mitsubishi.pl/storage/file/core_files/2022/9/27/58e52f0a4ab5c14e73f81b4cf5ea3bc8/WH005-1_OWU_UKN_Pakiet%202-letniej_ochrony_pogwarancyjnej.pdf">tutaj</a></p>
                            </div>

                            <div class="animation btn-group">
                            <a href="#" data-scroll="nextSlide" onclick="dL_info_request_click();" class="btn-white btn-bordered btn-arrow btn-arrow-down" style="margnin-top:20px;">DOWIEDZ SIĘ WIĘCEJ</a>
                            </div>


                        </div>

                        
                </div>


            </div>


        </div>







        <div class="slide bg-section s-form_2" style="background-color: rgba(0, 0, 0, 0.8);">
            <div class="my-container">
                <div class="form-heading" data-step="1/4">
                    <h4 class="animation">ZAREZERWUJ</h4>
                    <h3 class="animation">NOWE MITSUBISHI <span class="colored">COLT</span></h3>
                </div>
                <div class="form-content">
                    <h5 data-step="1/5" class="animation">WYBIERZ SILNIK:</h5>
                    <div class="checkers-row animation">
                        <div class="checker-field">
                            <input name="checker_engine" id="engine_01" class="checker-input" type="radio" value="gasoline">
                            <label class="checker-default" for="engine_01">
                                <p><strong>1.0T Benzyna</strong><br>(91 KM) MT</p>
                            </label>
                        </div>
                        <div class="checker-field">
                            <input name="checker_engine" id="engine_02" class="checker-input" type="radio" value="hybrid">
                            <label class="checker-default" for="engine_02">
                                <p><strong>1.6 Hybryda</strong><br>(143 KM) AT</p>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-footer">
                    <div class="footer-data animation">
                        <a href="https://www.mitsubishi.pl/storage/file/core_files/2023/6/12/a91e98d7153a4228896b496541edf85d/colt_my24_dane_techniczne_program_rezerwacji_12062023.pdf" class="footer-inner" target="_blank">
                            <h6>DANE TECHNICZNE</h6>
                            <img src="images/info-white.svg">
                        </a>
                    </div>
                    <div class="animation anim-btn">
                        <a href="#" data-scroll="leftSlide" class="form-return hide-desktop"><img src="images/return.svg">COFNIJ</a>
                        <a href="#" data-scroll="leftSlide" class="hide-mobile" style="padding-right:20px;">COFNIJ</a>
                        <a href="#" onclick="dL_reservation_request_view();" data-btn="engine" data-id="" disabled class="btn-primary btn-arrow">DALEJ</a>
                    </div>
                </div>
            </div>
        </div>




        <div class="slide bg-section s-form_2 s-version" style="background-color: rgba(0, 0, 0, 0.8);">
            <div class="my-container">
                <div class="form-heading" data-step="2/4">
                    <h4 class="animation">ZAREZERWUJ</h4>
                    <h3 class="animation">NOWE MITSUBISHI <span class="colored">COLT</span></h3>
                </div>
                <!-- engine_01 -->
                <div class="form-content" data-engine="engine_01" style="display:none;">
                    <h5 data-step="2/5" class="animation">WYBIERZ WERSJĘ:</h5>
                    <div class="checkers-row animation">
                        <div class="checker-field">
                            <input name="checker_version" id="version_01" data-color="basic" class="checker-input" type="radio" value="INVITE + Style + Cold">
                            <label class="checker-default" for="version_01">
                                <p><strong>INVITE</strong><br>+ Style + Cold</p>
                            </label>
                        </div>
                        <div class="checker-field">
                            <input name="checker_version" id="version_02" data-color="basic" class="checker-input" type="radio" value="INTENSE + Style + Cold + Navi">
                            <label class="checker-default" for="version_02">
                                <p><strong>INTENSE</strong><br>+ Style + Cold + Navi</p>
                            </label>
                        </div>
                        <div class="checker-field disabled">
                            <input name="checker_version" disabled id="version_03" data-color="basic" class="checker-input" type="radio" value="FIRST EDITION">
                            <label class="checker-default" for="version_03">
                                <p><strong>FIRST EDITION</strong></p>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- engine_01 -->
                <!-- engine_02 -->
                <div class="form-content" data-engine="engine_02" style="display:none;">
                    <h5 data-step="2/5" class="animation">WYBIERZ WERSJĘ:</h5>
                    <div class="checkers-row animation">
                        <div class="checker-field disabled">
                            <input name="checker_version" disabled id="version_04" data-color="basic" class="checker-input" type="radio" value="INVITE + Style + Cold">
                            <label class="checker-default" for="version_04">
                                <p><strong>INVITE</strong><br>+ Style + Cold</p>
                            </label>
                        </div>
                        <div class="checker-field disabled">
                            <input name="checker_version" disabled id="version_05" data-color="basic" class="checker-input" type="radio" value="INTENSE + Style + Cold + Navi">
                            <label class="checker-default" for="version_05">
                                <p><strong>INTENSE</strong><br>+ Style + Cold + Navi</p>
                            </label>
                        </div>
                        <div class="checker-field">
                            <input name="checker_version" id="version_06" data-color="basic" class="checker-input" type="radio" value="FIRST EDITION">
                            <label class="checker-default" for="version_06">
                                <p><strong>FIRST EDITION</strong></p>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- engine_02 -->
                <div class="form-footer">
                    <div class="footer-data animation">
                        <a href="#" class="footer-inner" data-toggle="modal" data-target="#form_details">
                            <h6>SZCZEGÓŁY <span class="hide-mobile">WERSJI WYPOSAŻENIA</span></h6>
                            <img src="images/info-white.svg">
                        </a>
                    </div>
                    <div class="animation anim-btn">
                        <a href="#" data-scroll="leftSlide" class="form-return hide-desktop"><img src="images/return.svg">COFNIJ</a>
                        <a href="#" data-scroll="leftSlide" class="hide-mobile" style="padding-right:20px;">COFNIJ</a>
                        <a href="#" onclick="dl_reservation_request_steps('1/2');" data-btn="version" data-id="" disabled class="btn-primary btn-arrow">DALEJ</a>
                    </div>
                </div>
            </div>
        </div>









        <!-- color -->
        <div class="slide bg-section s-form_3" style="background-color: rgba(0, 0, 0, 0.8);">
            <div class="my-container">
                <div class="form-heading" data-step="3/4">
                    <h4 class="animation">ZAREZERWUJ</h4>
                    <h3 class="animation">NOWE MITSUBISHI <span class="colored">COLT</span></h3>
                </div>
                <!-- colors default -->
                <div class="form-content" data-color="basic" style="display:none;">
                    <h5 data-step="3/5" class="animation">WYBIERZ KOLOR:</h5>
                    <div class="checkers-row animation">
                        <div class="checker-field">
                            <input name="checker_color" id="color_01" class="checker-input" type="radio">
                            <label class="checker-default" for="color_01">
                                <p><strong>Onyx Black (GNE)</strong><br>(metalizowany)</p>
                                <span class="checker-color" style="background:#000000;"></span>
                            </label>
                        </div>
                        <div class="checker-field">
                            <input name="checker_color" id="color_02" class="checker-input" type="radio">
                            <label class="checker-default" for="color_02">
                                <p><strong>Sunrise Red (NNP)</strong><br>(metalizowany)</p>
                                <span class="checker-color" style="background:#A10000;"></span>
                            </label>
                        </div>
                        <div class="checker-field">
                            <input name="checker_color" id="color_03" class="checker-input" type="radio">
                            <label class="checker-default" for="color_03">
                                <p><strong>Royal Blue (RQH)</strong><br>(metalizowany)</p>
                                <span class="checker-color" style="background:#003362;"></span>
                            </label>
                        </div>
                        <div class="checker-field">
                            <input name="checker_color" id="color_04" class="checker-input" type="radio">
                            <label class="checker-default" for="color_04">
                                <p><strong>Volcanic Grey (KQG)</strong><br>(metalizowany)</p>
                                <span class="checker-color" style="background:#454545;"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- colors default -->
                <!-- colors premium -->
                <!--<div class="form-content form-content-row" data-color="premium" style="display:none;">
                    <div class="form-content-inner">
                        <h5 data-step="3/5" class="animation">
                            <span class="hide-mobile">WARIANT JEDNOKOLOROWY:</span> 
                            <span class="hide-desktop">WYBIERZ KOLOR:</span> 
                            <a href="#" data-toggle="tooltip" data-placement="top" id="singlecolor" title="Jednolity kolor nadwozia." data-html="true">
                                <img src="images/info-white.svg">
                            </a>
                        </h5>
                        <div class="checkers-row animation">
                            <div class="checker-field">
                                <input name="checker_color_variable" id="color_variable_01" class="checker-input" type="radio">
                                <label class="checker-default" for="color_variable_01">
                                    <p><strong>Charcoal Blue</strong><br>(solid)</p>
                                    <span class="checker-color_variable" style="background:#102436;"></span>
                                </label>
                            </div>
                            <div class="checker-field">
                                <input name="checker_color_variable" id="color_variable_02" class="checker-input" type="radio">
                                <label class="checker-default" for="color_variable_02">
                                    <p><strong>Onyx Black</strong><br>(metalizowany)</p>
                                    <span class="checker-color_variable" style="background:#000;"></span>
                                </label>
                            </div>
                            <div class="checker-field">
                                <input name="checker_color_variable" id="color_variable_03" class="checker-input" type="radio">
                                <label class="checker-default" for="color_variable_03">
                                    <p><strong>Royal Blue</strong><br>(metalizowany)</p>
                                    <span class="checker-color_variable" style="background:#003362;"></span>
                                </label>
                            </div>
                            <div class="checker-field">
                                <input name="checker_color_variable" id="color_variable_04" class="checker-input" type="radio">
                                <label class="checker-default" for="color_variable_04">
                                    <p><strong>Steel Grey</strong><br>(metalizowany)</p>
                                    <span class="checker-color_variable" style="background:#454545;"></span>
                                </label>
                            </div>
                            <div class="checker-field">
                                <input name="checker_color_variable" id="color_variable_05" class="checker-input" type="radio">
                                <label class="checker-default" for="color_variable_05">
                                    <p><strong>Crystal White</strong><br>(metalizowany)</p>
                                    <span class="checker-color_variable" style="background:#EBEBEB;"></span>
                                </label>
                            </div>
                            <div class="checker-field">
                                <input name="checker_color_variable" id="color_variable_06" class="checker-input" type="radio">
                                <label class="checker-default" for="color_variable_06">
                                    <p><strong>Sunrise Red</strong><br>(metalizowany)</p>
                                    <span class="checker-color_variable" style="background:#A10000;"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-content-inner">
                        <h5 class="animation">WARIANT DWUKOLOROWY:
                            <a href="#" data-toggle="tooltip" data-placement="top" id="multicolor" title="<strong>Dach</strong> w kolorze czarnym <strong>Onyx Black</strong> (metallic)+ wybrany kolor nadwozia." data-html="true">
                                <img src="images/info-white.svg">
                            </a>
                        </h5>
                        <div class="checkers-row animation">
                            <div class="checker-field">
                                <input name="checker_color_variable" id="color_variable_double_07" class="checker-input" type="radio">
                                <label class="checker-default" for="color_variable_double_07">
                                    <p><strong>Charcoal Blue</strong><br>(solid)</p>
                                    <span class="checker-color_variable" style="background: linear-gradient(-90deg,#000 50%,#102436 50%);background: -webkit-linear-gradient(-90deg,#000 50%,#102436 50%);"></span>
                                </label>
                            </div>
                            <div class="checker-field">
                                <input name="checker_color_variable" id="color_variable_double_08" class="checker-input" type="radio">
                                <label class="checker-default" for="color_variable_double_08">
                                    <p><strong>Royal Blue</strong><br>(metalizowany)</p>
                                    <span class="checker-color_variable" style="background: linear-gradient(-90deg,#000 50%,#003362 50%);background: -webkit-linear-gradient(-90deg,#000 50%,#003362 50%);"></span>
                                </label>
                            </div>
                            <div class="checker-field">
                                <input name="checker_color_variable" id="color_variable_double_09" class="checker-input" type="radio">
                                <label class="checker-default" for="color_variable_double_09">
                                    <p><strong>Steel Grey</strong><br>(metalizowany)</p>
                                    <span class="checker-color_variable" style="background: linear-gradient(-90deg,#000 50%,#454545 50%);background: -webkit-linear-gradient(-90deg,#000 50%,#454545 50%);"></span>
                                </label>
                            </div>
                            <div class="checker-field">
                                <input name="checker_color_variable" id="color_variable_double_10" class="checker-input" type="radio">
                                <label class="checker-default" for="color_variable_double_10">
                                    <p><strong>Crystal White</strong><br>(metalizowany)</p>
                                    <span class="checker-color_variable" style="background: linear-gradient(-90deg,#000 50%,#EBEBEB 50%);background: -webkit-linear-gradient(-90deg,#000 50%,#EBEBEB 50%);"></span>
                                </label>
                            </div>
                            <div class="checker-field">
                                <input name="checker_color_variable" id="color_variable_double_11" class="checker-input" type="radio">
                                <label class="checker-default" for="color_variable_double_11">
                                    <p><strong>Sunrise Red</strong><br>(metalizowany)</p>
                                    <span class="checker-color_variable" style="background: linear-gradient(-90deg,#000 50%,#A10000 50%);background: -webkit-linear-gradient(-90deg,#000 50%,#A10000 50%);"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <!-- colors premium -->
                <div class="form-footer">
                    <div class="footer-data">
                    </div>
                    <div class="animation anim-btn">
                        <a href="#" data-scroll="leftSlide" class="form-return hide-desktop"><img src="images/return.svg">COFNIJ</a>
                        <a href="#" data-scroll="leftSlide" class="hide-mobile" style="padding-right:20px;">COFNIJ</a>
                        <a href="#" onclick="dl_reservation_request_steps('2/2');" data-btn="color" data-id="" disabled class="btn-primary btn-arrow">DALEJ</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- color -->
        
        
        
        
        
        
        
        
        
        
        
        
        <!-- podsumowanie desktop -->
        <div class="slide bg-section s-form_4 hide-mobile" style="background-color: rgba(0, 0, 0, 0.8);">
            <form method="post" id="contactForm" action="" onsubmit="return false;">

            <!-- wersja wyposażenia -->
            <input type="hidden" name="1da69054-a58b-4f6a-a6e8-ed84bed45bf7" value="">
            <input type="hidden" name="utm_source" value="<?= (isset($_GET['utm_source']) && trim($_GET['utm_source']) != ''? trim($_GET['utm_source']): "") ?>">
            <input type="hidden" name="utm_medium" value="<?= (isset($_GET['utm_medium']) && trim($_GET['utm_medium']) != ''? trim($_GET['utm_medium']): "")  ?>">
            <input type="hidden" name="utm_campaign" value="<?= (isset($_GET['utm_campaign']) && trim($_GET['utm_campaign']) != ''? trim($_GET['utm_campaign']): "")  ?>">






                            <div class="my-container">
                                <div class="form-heading">
                                    <h4 class="animation">ZAREZERWUJ</h4>
                                    <h3 class="animation">NOWE MITSUBISHI <span class="colored">COLT</span></h3>
                                </div>
                                <div class="form-content form-content-row form-fields-row">
                                    <div class="form-content-col animation">
                                        <h5>PODSUMOWANIE:</h5>
                                        <ul id="formSummary">
                                            <li data-engine=""></li>
                                            <li data-version=""></li>
                                            <li data-color="" color-variable=""></li>
                                        </ul>
                                        <a href="#" data-scroll="leftSlide" class="form-return"><img src="images/return.svg">WRÓĆ</a>
                                    </div>
                                    <div class="form-content-col input-col animation">
                                        <h5>WYPEŁNIJ FORMULARZ:</h5>
                                        <!-- required -->
                                        <div class="form-field validate-field">
                                            <div class="select-field select-option">
                                                <p class="input-field-placeholder"><strong>WYBIERZ SWOJEGO DEALERA</strong></p>
                                                <select class="select-default required" id="select_01" name="select_01">
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
                                        <!-- required -->
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
                                        <div class="form-field field-validator" style="display:none;">
                                            <div class="checker-field">
                                                <p>Pola wymagane nie zostały zaznaczone/wypełnione.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-content-col animation">
                                        <h5>ZAZNACZ ZGODY:</h5>
                                        <!-- required -->
                                        <div class="form-field validate-field">
                                            <div class="checker-field">
                                                <input name="4206590a1b4de358b966687d4c15d56c" id="agreement_01" class="checker-input required" type="checkbox">
                                                <label class="checker-default" for="agreement_01">
                                                    <p>Jestem zainteresowany/a rezerwacją. Proszę o przekazanie dalszych informacji z wykorzystaniem podanych powyżej danych kontaktowych.</p>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- required -->
                                        <div class="form-field validate-field">
                                            <div class="checker-field">
                                                <input name="437cfd96091e193cc075374e5ca1f816" id="agreement_02" class="checker-input required" type="checkbox">
                                                <label class="checker-default" for="agreement_02">
                                                    <p>Potwierdzam zapoznanie się z klauzulą informacyjną dotyczącą przetwarzania danych osobowych, w tym z prawem do cofnięcia udzielonych zgód oraz <a href="https://www.mitsubishi.pl/storage/file/core_files/2023/10/3/fdb404a5e8680182e07545c474598012/Regulamin_programu_rezerwacji_nowego_Mitsubishi_Colt_102023.pdf" target="_blank">Regulaminem Rezerwacji.</a></p>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- required -->
                                        <h6>Bądź z nami na bieżąco i nie przegap żadnej interesującej oferty! </h6>
                                        <p>Chcę otrzymywać informacje dotyczące produktów i usług Mitsubishi, w tym newslettery, zaproszenia na jazdy testowe, czy wydarzenia organizowane przez Mitsubishi, od wskazanego poniżej podmiotu, poprzez wskazane w tym celu przeze mnie środki komunikacji. </p>
                                        <h6>od Astara Poland Sp. z o.o. poprzez:</h6>
                                        <div class="form-fields">
                                            <div class="checker-field">
                                                <input name="29638676a291ae31511090185595ee62" id="agreement_03" class="checker-input" type="checkbox">
                                                <label class="checker-default" for="agreement_03">
                                                    <p>E-mail</p>
                                                </label>
                                            </div>
                                            <div class="checker-field">
                                                <input name="d6e44529d1583a516ffd1850b97d892b" id="agreement_04" class="checker-input" type="checkbox">
                                                <label class="checker-default" for="agreement_04">
                                                    <p>Rozmowa telefoniczna</p>
                                                </label>
                                            </div>
                                        </div>
                                        <h6>od wybranego przeze mnie Dealera Mitsubishi: </h6>
                                        <div class="form-fields">
                                            <div class="checker-field">
                                                <input name="49be1cd4dd99e4b3ea7b5a6849e1eaef" id="agreement_05" class="checker-input" type="checkbox">
                                                <label class="checker-default" for="agreement_05">
                                                    <p>E-mail</p>
                                                </label>
                                            </div>
                                            <div class="checker-field">
                                                <input name="9a699fed71e64089511759750c2bc749" id="agreement_06" class="checker-input" type="checkbox">
                                                <label class="checker-default" for="agreement_06">
                                                    <p>Rozmowa telefoniczna</p>
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn-primary btn-arrow" style="margin-top: 20px;">ZAREZERWUJ</button>
                                    </div>
                                </div>
                                <div class="form-footer animation">
                                    <div class="footer-data"></div>
                                </div>
                            </div>








                            
            </form>
        </div>
        <!-- podsumowanie desktop -->









        <!-- podsumowanie mobile -->
        <div class="slide bg-section s-form_1 s-form_6 hide-desktop" style="background-color: rgba(0, 0, 0, 0.8);">
            <div class="my-container">
                <div class="form-heading">
                    <h4 class="animation">ZAREZERWUJ</h4>
                    <h3 class="animation">NOWE MITSUBISHI <span class="colored">COLT</span></h3>
                </div>
                <div class="form-content animation">
                    <h5 data-step="4/5">PODSUMOWANIE:</h5>
                    <div class="formListOuter">
                        <ul id="formSummary">
                            <li data-engine=""></li>
                            <li data-version=""></li>
                            <li data-color="" color-variable=""></li>
                        </ul>
                    </div>
                </div>
                <div class="form-footer animation">
                    <a href="#" data-scroll="leftSlide" class="form-return"><img src="images/return.svg">WRÓĆ</a>
                    <a href="#" data-scroll="rightSlide" class="btn-primary btn-arrow">DALEJ</a>
                </div>
            </div>
        </div>
        <div class="slide bg-section s-form_1 s-form_7 hide-desktop">
            <form method="post" id="contactFormMobile" action="" onsubmit="return false;">

                <!-- wersja wyposażenia -->
                <input type="hidden" name="1da69054-a58b-4f6a-a6e8-ed84bed45bf7" value="">

                <input type="hidden" name="utm_source" value="<?= (isset($_GET['utm_source']) && trim($_GET['utm_source']) != ''? trim($_GET['utm_source']): "") ?>">
                <input type="hidden" name="utm_medium" value="<?= (isset($_GET['utm_medium']) && trim($_GET['utm_medium']) != ''? trim($_GET['utm_medium']): "")  ?>">
                <input type="hidden" name="utm_campaign" value="<?= (isset($_GET['utm_campaign']) && trim($_GET['utm_campaign']) != ''? trim($_GET['utm_campaign']): "")  ?>">

                <div class="my-container">
                    <div class="form-content-col input-col animation">
                        <h5><span class="colored">WYPEŁNIJ</span> FORMULARZ:</h5>
                        <!-- required -->
                        <div class="form-field validate-field">
                            <div class="select-field select-option">
                                <p class="input-field-placeholder"><strong>WYBIERZ SWOJEGO DEALERA</strong></p>
                                <select class="select-default required" id="select_02" name="select_01">
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
                                    <option value="55">Warszawa - Auto GT</option>
                                    <option value="73" data-dealer="japanmotors">Warszawa - Japan Motors Warszawa</option>
                                    <option value="129">Warszawa - Zaborowski</option>
                                    <option value="137" data-dealer="japanmotors">Wrocław, Długołęka - Japan Motors Wrocław</option>
                                    <option value="130">Zabrze - MM Cars</option>
                                    <option value="49">Zielona Góra - Gezet</option>
                                </select>
                            </div>
                        </div>
                        <!-- required -->
                        <div class="form-field validate-field">
                            <div class="input-field input-name">
                                <p class="input-field-placeholder">WPISZ IMIĘ I NAZWISKO</p>
                                <input class="input-default required" name="client_name" type="text" >
                            </div>
                        </div>
                        <!-- required -->
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
                    <div class="form-content-col animation">
                        <!-- required -->
                        <div class="form-field validate-field">
                            <div class="checker-field">
                                <input name="4206590a1b4de358b966687d4c15d56c" id="agreement_mobile_01" class="checker-input required" type="checkbox">
                                <label class="checker-default" for="agreement_mobile_01">
                                    <p>Jestem zainteresowany/a rezerwacją. Proszę o przekazanie dalszych informacji z wykorzystaniem podanych powyżej danych kontaktowych.</p>
                                </label>
                            </div>
                        </div>
                        <!-- required -->
                        <div class="form-field validate-field">
                            <div class="checker-field">
                                <input name="437cfd96091e193cc075374e5ca1f816" id="agreement_mobile_02" class="checker-input required" type="checkbox">
                                <label class="checker-default" for="agreement_mobile_02">
                                    <p>Potwierdzam zapoznanie się z klauzulą informacyjną dotyczącą przetwarzania danych osobowych, w tym z prawem do cofnięcia udzielonych zgód oraz <a href="https://www.mitsubishi.pl/storage/file/core_files/2022/9/28/dcf4ebb27743a3235a1f86fcce76daf8/Regulamin_programu_rezerwacji_nowego_Mitsubishi_COLT.pdf" target="_blank">Regulaminem Rezerwacji.</a>  </p>
                                </label>
                            </div>
                        </div>
                        <h6>Bądź z nami na bieżąco i nie przegap żadnej interesującej oferty! </h6>
                        <p>Chcę otrzymywać informacje dotyczące produktów i usług Mitsubishi, w tym newslettery, zaproszenia na jazdy testowe, czy wydarzenia organizowane przez Mitsubishi, od wskazanego poniżej podmiotu, poprzez wskazane w tym celu przeze mnie środki komunikacji. </p>
                        <h6>od Astara Poland Sp. z o.o. poprzez:</h6>
                        <div class="form-fields">
                            <div class="checker-field">
                                <input name="29638676a291ae31511090185595ee62" id="agreement_mobile_03" class="checker-input" type="checkbox">
                                <label class="checker-default" for="agreement_mobile_03">
                                    <p>E-mail</p>
                                </label>
                            </div>
                            <div class="checker-field">
                                <input name="d6e44529d1583a516ffd1850b97d892b" id="agreement_mobile_04" class="checker-input" type="checkbox">
                                <label class="checker-default" for="agreement_mobile_04">
                                    <p>Rozmowa telefoniczna</p>
                                </label>
                            </div>
                        </div>
                        <h6>od wybranego przeze mnie Dealera Mitsubishi: </h6>
                        <div class="form-fields">
                            <div class="checker-field">
                                <input name="49be1cd4dd99e4b3ea7b5a6849e1eaef" id="agreement_mobile_05" class="checker-input" type="checkbox">
                                <label class="checker-default" for="agreement_mobile_05">
                                    <p>E-mail</p>
                                </label>
                            </div>
                            <div class="checker-field">
                                <input name="9a699fed71e64089511759750c2bc749" id="agreement_mobile_06" class="checker-input" type="checkbox">
                                <label class="checker-default" for="agreement_mobile_06">
                                    <p>Rozmowa telefoniczna</p>
                                </label>
                            </div>
                        </div>
                        <div class="form-field field-validator" style="display:none;">
                            <div class="checker-field">
                                <p>Pola wymagane nie zostały zaznaczone/wypełnione.</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-footer animation">
                        <button type="submit" class="btn-primary btn-arrow" style="margin-top: 15px;">ZAREZERWUJ</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- podsumowanie mobile -->
        <div class="slide bg-section s-form_5">
            <div class="my-container">
                <div class="s-content">
                    <h2 class="animation color_black">GRATULACJE!</h2>
                    <p class="animation color_black"><strong>Ruszył proces zamówienia Twojego nowego Mitsubishi Colt.</strong></p>
                        <p class="animation color_black">Wybrany Dealer Mitsubishi skontaktuje się z Tobą w sprawie szczegółów.</p>
                    <div class="animation">
                        <!--<a href="#" data-scroll="nextSlide" class="btn-white btn-arrow">ZOBACZ WIĘCEJ</a>-->
                        <a href="#" onclick="fullpage_api.moveTo(1);" class="btn-white btn-arrow">WRÓĆ</a>
                    </div>
                </div>
            </div>
        </div>
        <!--
            <div class="vid-section" id="yt-wrap">
                <div id="yt_player"></div>
            </div>
        -->
    </div>

        <!-- reservation section -->
