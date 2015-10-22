<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example 12</title>
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../js/jssor.js"></script>
    <script type="text/javascript" src="../js/jssor.slider.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="font-family:Arial, Verdana;background-color:#fff;">
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider2_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; ">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px; overflow: hidden;">
            <div>
                <img u="image" src="../img/photography/002.jpg" />
                <img u="thumb" src="../img/photography/thumb-002.jpg" />
            </div>
            <div>
                <img u="image" src="../img/photography/003.jpg" />
                <img u="thumb" src="../img/photography/thumb-003.jpg" />
            </div>
            <div>
                <img u="image" src="../img/photography/004.jpg" />
                <img u="thumb" src="../img/photography/thumb-004.jpg" />
            </div>
            <div>
                <img u="image" src="../img/photography/005.jpg" />
                <img u="thumb" src="../img/photography/thumb-005.jpg" />
            </div>
            <div>
                <img u="image" src="../img/photography/006.jpg" />
                <img u="thumb" src="../img/photography/thumb-006.jpg" />
            </div>
            <div>
                <img u="image" src="../img/photography/007.jpg" />
                <img u="thumb" src="../img/photography/thumb-007.jpg" />
            </div>
            <div>
                <img u="image" src="../img/photography/008.jpg" />
                <img u="thumb" src="../img/photography/thumb-008.jpg" />
            </div>
            <div>
                <img u="image" src="../img/photography/009.jpg" />
                <img u="thumb" src="../img/photography/thumb-009.jpg" />
            </div>
            <div>
                <img u="image" src="../img/photography/010.jpg" />
                <img u="thumb" src="../img/photography/thumb-010.jpg" />
            </div>
            <div>
                <img u="image" src="../img/photography/011.jpg" />
                <img u="thumb" src="../img/photography/thumb-011.jpg" />
            </div>
        </div>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora02l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora02r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        
        <!-- ThumbnailNavigator Skin Begin -->
        <div u="thumbnavigator" class="jssort03" style="position: absolute; width: 600px; height: 60px; left:0px; bottom: 0px;">
            <div style=" background-color: #000; filter:alpha(opacity=30); opacity:.3; width: 100%; height:100%;"></div>

            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="POSITION: absolute; WIDTH: 62px; HEIGHT: 32px; TOP: 0; LEFT: 0;">
                    <div class=w><div u="thumbnailtemplate" style=" WIDTH: 100%; HEIGHT: 100%; border: none;position:absolute; TOP: 0; LEFT: 0;"></div></div>
                    <div class=c style="POSITION: absolute; BACKGROUND-COLOR: #000; TOP: 0; LEFT: 0">
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- ThumbnailNavigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
    </div>
    <!-- Jssor Slider End -->
</body>
</html>