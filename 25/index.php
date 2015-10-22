<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example 25</title>
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../js/jssor.js"></script>
    <script type="text/javascript" src="../js/jssor.slider.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:#fff;">
    
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; width: 720px;
        height: 480px; overflow: hidden;">

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
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 720px; height: 480px;
            overflow: hidden;">
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
        
        <!-- Thumbnail Navigator Skin Begin -->
        <div u="thumbnavigator" class="jssort07" style="position: absolute; width: 720px; height: 100px; left: 0px; bottom: 0px; overflow: hidden; ">
            <div style=" background-color: #000; filter:alpha(opacity=30); opacity:.3; width: 100%; height:100%;"></div>
            <!-- Thumbnail Item Skin Begin -->
            
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="POSITION: absolute; WIDTH: 99px; HEIGHT: 66px; TOP: 0; LEFT: 0;">
                    <div u="thumbnailtemplate" class="i" style="position:absolute;"></div>
                    <div class="o">
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
            <!-- Arrow Navigator Skin Begin -->
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="width: 37px; height: 37px; top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="width: 37px; height: 37px; top: 123px; right: 8px">
            </span>
            <!-- Arrow Navigator Skin End -->
        </div>
        <!-- ThumbnailNavigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
        <!-- Trigger -->
    </div>
    <!-- Jssor Slider End -->
</body>
</html>