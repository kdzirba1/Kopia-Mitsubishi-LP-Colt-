<?php include 'header.php';?>

<?php
    $premiere = strtotime('15 September 2022, 19:00:00');
    $now = strtotime('now');
?>

<div id="main">
    <div class="section bg-section" style="background-image:url('images/before_s-1.jpg')" data-section="1">
        <?php if($now > $premiere){ ?>
            <img src="images/main_img.png">
        <?php }else{ ?>
            <img src="images/main_img-after.png">
        <?php } ?>
    </div>
    <div class="section video-section bg-section" style="background-image:url('images/before_s-2.jpg')" data-section="2">
        <div class="video-container" style="display:none;">
            <div style="width:100%;position:relative;padding-top:56.25%;"><iframe id="iv_iframe" src="https://projects.mayster.nl/embed/projects/62f079d4aaf93590d968f2f5?iv_branded=1?iv_autoplay=1&iv_storage=local" style="border:0;width:100%;height:100%;position:absolute;top:0px;bottom:0px;right:0px;left:0px;" allow="autoplay; fullscreen" allowfullscreen></iframe></div>
        </div>
        <div class="video-play">
            <img src="images/play-circle.svg">
        </div>
    </div>
    <div class="section bg-black" data-section="3">
        <div class="my-container">
            <?php if($now > $premiere){ ?>
                <h2 class="global-premiere-heading">GLOBALNA PREMIERA JUŻ ZA:</h2>
                <div class="counter">
                    <div class="counter-single">
                        <div class="counter-single-inner">
                            <div data-id="day">0</div>
                        </div>
                        <p>dni</p>
                    </div>
                    <div class="counter-single">
                        <div class="counter-single-inner">
                            <div data-id="hour">0</div>
                        </div>
                        <p>godzin</p>
                    </div>
                    <div class="counter-single">
                        <div class="counter-single-inner">
                            <div data-id="minute">0</div>
                        </div>
                        <p>minut</p>
                    </div>
                    <div class="counter-single">
                        <div class="counter-single-inner">
                            <div data-id="second">0</div>
                        </div>
                        <p>sekund</p>
                    </div>
                </div>
            <?php }; ?>
            <div class="main-content">
                <h3>Bądź <span class="colored">pierwszą osobą</span>, która odbędzie jazdę próbną!</h3>
                <p>Udziel poniższych zgód, aby być na bieżąco i w pierwszej kolejności dostawać informację o produktach<br>
                i usługach Mitsubishi, w tym zostać poinformowanym o możliwości odbycia<br>
                jazdy próbnej <strong>nowym Mitsubishi ASX.</strong></p>
                <a href="javascript:void(0)" id="scrollForm" class="arrow-down">
                <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_59_26)">
                    <path d="M42.75 34.875L42.75 24.75L27 36L11.25 24.75L11.25 34.875L27 46.125L42.75 34.875Z" fill="#D92F20"/>
                    <path d="M42.75 19.125L42.75 9L27 20.25L11.25 9L11.25 19.125L27 30.375L42.75 19.125Z" fill="#D92F20"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_59_26">
                    <rect width="54" height="54" fill="white" transform="translate(54) rotate(90)"/>
                    </clipPath>
                    </defs>
                </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php';?>