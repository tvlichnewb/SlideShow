<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example 06</title>
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../js/jssor.js"></script>
    <script type="text/javascript" src="../js/jssor.slider.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:#fff;">
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; width: 600px; height: 500px; background-color: #000; overflow: hidden; ">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 500px;
            overflow: hidden;">
            <div>
                <a u=image href="#"><img src="../img/paint/01.jpg" /></a>
            </div>
            <div>
                <a u=image href="#"><img src="../img/paint/02.jpg" /></a>
            </div>
            <div>
                <a u=image href="#"><img src="../img/paint/03.jpg" /></a>
            </div>
            <div>
                <a u=image href="#"><img src="../img/paint/04.jpg" /></a>
            </div>
            <div>
                <a u=image href="#"><img src="../img/paint/05.jpg" /></a>
            </div>
            <div>
                <a u=image href="#"><img src="../img/paint/06.jpg" /></a>
            </div>
            <div>
                <a u=image href="#"><img src="../img/paint/07.jpg" /></a>
            </div>
            <div>
                <a u=image href="#"><img src="../img/paint/08.jpg" /></a>
            </div>
            <div>
                <a u=image href="#"><img src="../img/paint/09.jpg" /></a>
            </div>
            <div>
                <a u=image href="#"><img src="../img/paint/10.jpg" /></a>
            </div>
            <div>
                <a u=image href="#"><img src="../img/paint/11.jpg" /></a>
            </div>
        </div>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb13" style="position: absolute; bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="POSITION: absolute; WIDTH: 21px; HEIGHT: 21px;"></div>
        </div>
        <!-- Bullet Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
    </div>
    <!-- Jssor Slider End -->
</body>
</html>