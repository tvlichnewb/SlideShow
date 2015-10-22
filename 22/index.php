<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example 22</title>
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../js/jssor.js"></script>
    <script type="text/javascript" src="../js/jssor.slider.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:#fff;">
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 327px; background: #fff; overflow: hidden; ">
        
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left:0px; top: 27px; width: 600px; height: 300px;
            overflow: hidden;">
            <div>
                <img src="../img/landscape/01.jpg" />
                <div u="thumb">Banner Rotator</div>
            </div>
            <div>
                <img src="../img/landscape/02.jpg" />
                <div u="thumb">Image Gallery</div>
            </div>
            <div>
                <img src="../img/landscape/03.jpg" />
                <div u="thumb">Image Slider</div>
            </div>
            <div>
                <img src="../img/landscape/04.jpg" />
                <div u="thumb">Tab Slider</div>
            </div>
            <div>
                <img src="../img/landscape/05.jpg" />
                <div u="thumb">Carousel</div>
            </div>
        </div>
        
        <!-- ThumbnailNavigator Skin Begin -->
        <div u="thumbnavigator" class="jssort14" style="position: absolute; width: 504px; height: 27px; left:0px; top: 0px;background:#fff;">
            
            <div u="slides" style="cursor: move; top:0px; left:0px;">
                <div u="prototype" class="p" style="POSITION: absolute; WIDTH: 100px; HEIGHT: 27px; TOP: 0; LEFT: 0; padding:0px; background:#fff;">
                    <div class=w><div u="thumbnailtemplate" class="c" style=" WIDTH: 100%; HEIGHT: 23px; position:absolute; TOP: 0; LEFT: 0; line-height:23px; text-align:center;"></div></div>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
            <a style="display: none" href="http://www.jssor.com">Image Slider</a>
        </div>
        <!-- ThumbnailNavigator Skin Begin -->
    </div>
    <!-- Jssor Slider End -->
</body>
</html>