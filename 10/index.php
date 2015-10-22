<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example 10</title>
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../js/jssor.js"></script>
    <script type="text/javascript" src="../js/jssor.slider.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="margin: 0px; padding: 0px; font-family:Arial, Verdana;background-color:#fff;">
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 960px;
        height: 480px; background: #191919; overflow: hidden;">

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
        <div u="slides" style="cursor: move; position: absolute; left: 240px; top: 0px; width: 720px; height: 480px; overflow: hidden;">
            <div>
                <img u="image" src="../img/travel/01.jpg" />
                <img u="thumb" src="../img/travel/thumb-01.jpg" />
            </div>
            <div>
                <img u="image" src="../img/travel/02.jpg" />
                <img u="thumb" src="../img/travel/thumb-02.jpg" />
            </div>
            <div>
                <img u="image" src="../img/travel/03.jpg" />
                <img u="thumb" src="../img/travel/thumb-03.jpg" />
            </div>
            <div>
                <img u="image" src="../img/travel/04.jpg" />
                <img u="thumb" src="../img/travel/thumb-04.jpg" />
            </div>
            <div>
                <img u="image" src="../img/travel/05.jpg" />
                <img u="thumb" src="../img/travel/thumb-05.jpg" />
            </div>
            <div>
                <img u="image" src="../img/travel/06.jpg" />
                <img u="thumb" src="../img/travel/thumb-06.jpg" />
            </div>
            <div>
                <img u="image" src="../img/travel/07.jpg" />
                <img u="thumb" src="../img/travel/thumb-07.jpg" />
            </div>
            <div>
                <img u="image" src="../img/travel/08.jpg" />
                <img u="thumb" src="../img/travel/thumb-08.jpg" />
            </div>
            <div>
                <img u="image" src="../img/travel/09.jpg" />
                <img u="thumb" src="../img/travel/thumb-09.jpg" />
            </div>
            <div>
                <img u="image" src="../img/travel/10.jpg" />
                <img u="thumb" src="../img/travel/thumb-10.jpg" />
            </div>
            
            <div>
                <img u="image" src="../img/travel/11.jpg" />
                <img u="thumb" src="../img/travel/thumb-11.jpg" />
            </div>
            <div>
                <img u="image" src="../img/travel/12.jpg" />
                <img u="thumb" src="../img/travel/thumb-12.jpg" />
            </div>
            <div>
                <img u="image" src="../img/travel/13.jpg" />
                <img u="thumb" src="../img/travel/thumb-13.jpg" />
            </div>
            <div>
                <img u="image" src="../img/travel/14.jpg" />
                <img u="thumb" src="../img/travel/thumb-14.jpg" />
            </div>
        </div>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 248px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        
        <!-- Thumbnail Navigator Skin 02 Begin -->
        <div u="thumbnavigator" class="jssort02" style="position: absolute; width: 240px; height: 480px; left:0px; bottom: 0px;">
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="position: absolute; width: 99px; height: 66px; top: 0; left: 0;">
                    <div class=w><div u="thumbnailtemplate" style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></div></div>
                    <div class=c>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Thumbnail Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
    </div>
    <!-- Jssor Slider End -->
</body>
</html>