<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example 07</title>
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../js/jssor.js"></script>
    <script type="text/javascript" src="../js/jssor.slider.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="padding:0px; margin:0px; font-family:Arial, Verdana;background-color:#fff;">
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
            height: 500px; overflow: hidden;">
            <div>
                <img u="image" src="../img/1920/red.jpg" />
                <div u="caption" t="NO" t3="RTT|2" r3="137.5%" du3="3000" d3="500" style="position: absolute; width: 445px; height: 300px; top: 100px; left: 600px;">
                    <img src="../img/new-site/c-phone.png" style="position: absolute; width: 445px; height: 300px; top: 0px; left: 0px;" />
                    <img u="caption" t="CLIP|LR" du="4000" t2="NO" src="../img/new-site/c-jssor-slider.png" style="position: absolute; width: 102px; height: 78px; top: 70px; left: 130px;" />
                    <img u="caption" t="ZMF|10" t2="NO" src="../img/new-site/c-text.png" style="position: absolute; width: 80px; height: 53px; top: 153px; left: 163px;" />
                    <img u="caption" t="RTT|10" t2="NO" src="../img/new-site/c-fruit.png" style="position: absolute; width: 140px; height: 90px; top: 60px; left: 220px;" />
                    <img u="caption" t="T" du="4000" t2="NO" src="../img/new-site/c-navigator.png" style="position: absolute; width: 200px; height: 155px; top: 57px; left: 121px;" />
                </div>
                <div u="caption" t="RTT|2" r="-75%" du="1600" d="2500" t2="NO" style="position: absolute; width: 470px; height: 220px; top: 120px; left: 650px;">
                    <img src="../img/new-site/c-phone-horizontal.png" style="position: absolute; width: 470px; height: 220px; top: 0px; left: 0px;" />
                    <img u="caption" t3="MCLIP|L" du3="2000" src="../img/new-site/c-slide-1.jpg" style="position: absolute; width: 379px; height: 213px; top: 4px; left: 45px;" />
                    <img u="caption" t="MCLIP|R" du="2000" t2="NO" src="../img/new-site/c-slide-3.jpg" style="position: absolute; width: 379px; height: 213px; top: 4px; left: 45px;" />
                    <img u="caption" t="RTTL|BR" x="500%" y="500%" du="1000" d="-3000" r="-30%" t3="L" x3="70%" du3="1600" src="../img/new-site/c-finger-pointing.png" style="position: absolute; width: 257px; height: 300px; top: 80px; left: 200px;" />
                    <img src="../img/new-site/c-navigator-horizontal.png" style="position: absolute; width: 379px; height: 213px; top: 4px; left: 45px;" />
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">Touch Swipe Slider
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
                        Build your slider with anything, includes image, content, text, html, photo, picture
                </div>
            </div>
            <div>
                <img u="image" src="../img/1920/purple.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">Touch Swipe Slider
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
                        Build your slider with anything, includes image, content, text, html, photo, picture
                </div>
            </div>
            <div>
                <img u="image" src="../img/1920/blue.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">Touch Swipe Slider
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
                        Build your slider with anything, includes image, content, text, html, photo, picture
                </div>
            </div>
        </div>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
        </div>
        <!-- Bullet Navigator Skin End -->
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
    </div>
    <!-- Jssor Slider End -->
</body>
</html>