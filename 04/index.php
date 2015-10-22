<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example 04</title>
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../js/jssor.js"></script>
    <script type="text/javascript" src="../js/jssor.slider.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="font-family:Arial, Verdana;background-color:#fff;">
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden;">
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
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 809px; height: 150px; overflow: hidden;">
            <div><img u="image" src="../img/ancient-lady/005.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/006.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/011.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/013.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/014.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/019.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/020.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/021.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/022.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/024.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/025.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/027.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/029.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/030.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/031.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/032.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/034.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/038.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/039.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/043.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/044.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/047.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/050.jpg" /></div>
        </div>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb03" style="position: absolute; bottom: 4px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;"><div u="numbertemplate"></div></div>
        </div>
        <!-- Bullet Navigator Skin End -->
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora03l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora03r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
    </div>
    <!-- Jssor Slider End -->
</body>
</html>