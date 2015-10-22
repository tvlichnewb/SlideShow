<!DOCTYPE html>
<html> 
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Example 21</title>
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../js/jssor.js"></script>
    <script type="text/javascript" src="../js/jssor.slider.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body style="margin:0;padding:0; background:#fff; font-family: Arial, Verdana, Sans-Serif;"> 
    <div style="position: relative; margin-top: 10px; top: 0px; left: 0px; width:100%; text-align: center; background-image: url(../img/home/back-dice-02.jpg); border-top: 1px solid gray; border-bottom: 1px solid gray; overflow: hidden;">
        <!-- Jssor Slider Begin -->
        <!-- You can move inline styles to css file or css block. --> 
        <div id="sliderc_container" style="position: relative; margin: 0 auto; width: 960px;
            height: 450px; text-align: left; overflow: hidden;">
 
            <!-- Slides Container --> 
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 960px; height: 450px;
                overflow: hidden;">
                <div>
                    <!-- Jssor Slider Begin -->
                    <!-- You can move inline styles to css file or css block. -->
                    <div id="slider1_container" style="position: relative; top: 90px; left: 0px; width: 600px;
                        height: 300px; overflow: hidden; border-radius: 8px;">

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
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px; overflow: hidden;">
                            <div>
                                <a u="image" href="http://www.jssor.com/demos/image-slider.html"><img src="../img/photography/002.jpg" alt="image slider" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                mobile ready, touch swipe
                                </div>
                            </div>
                            <div>
                                <a u="image" href="http://www.jssor.com/demos/image-slider.html"><img src="../img/photography/003.jpg" alt="jqeury image slider" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                finger catchable right to left
                                </div>
                            </div>
                            <div>
                                <a u="image" href="http://www.jssor.com/demos/image-slider.html"><img src="../img/photography/004.jpg" alt="responsive image slider" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                responsive, scale smoothly
                                </div>
                            </div>
                            <div>
                                <a u="image" href="http://www.jssor.com/demos/image-slider.html"><img src="../img/photography/005.jpg" alt="touch swipe image slider" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                random caption transition
                                </div>
                            </div>
                        </div>
        
                        <!-- Bullet Navigator Skin Begin -->
                        <!-- jssor slider bullet navigator skin 01 -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
                        </div>
                        <!-- Bullet Navigator Skin End -->
                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora02l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
                        </span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora02r" style="width: 55px; height: 55px; top: 123px; right: 8px">
                        </span>
                        <!-- Arrow Navigator Skin End -->
        
                        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
                    </div>
                    <!-- Jssor Slider End -->
                    <div u="caption" t="RTT*JUP|BR" t2="SPACESHIP|RB" style="position: absolute; left: 0px;top:30px;width:600px;height:30px;font-size:28px;color:#fff;line-height:30px; text-align: center;">
                    widely used image slider example
                    </div>
                    <div style="position: absolute; top: 110px; left: 640px; width: 320px; height: 250px;">
                        <div u="caption" t="TEAM_1" d="-200" du="50%" class="captionSymbol" style="position: absolute; top: 10px; left: 0px; width: 30px; height: 30px;">+</div>
                        <div u="caption" t="TEAM_1" d="-200" y="100%" class="captionOrange" style="position: absolute; top: 10px; left: 40px; width: 280px; height: 30px;">
                        mobile ready, drag move
                        </div>
                        <div u="caption" t="TEAM_1" d="-200" du="50%" class="captionSymbol" style="position: absolute; top: 60px; left: 0px; width: 30px; height: 30px;" debug-id="team-caption">+</div>
                        <div u="caption" t="TEAM_1" d="-200" y="50%" class="captionOrange" style="position: absolute; top: 60px; left: 40px; width: 280px; height: 30px;">
                        touch swipe, touch freeze
                        </div>
                        <div u="caption" t="TEAM_1" d="-200" du="50%" class="captionSymbol" style="position: absolute; top: 110px; left: 0px; width: 30px; height: 30px;">+</div>
                        <div u="caption" t="TEAM_1" d="-200" y="0" class="captionOrange" style="position: absolute; top: 110px; left: 40px; width: 280px; height: 30px;">
                        responsive, scale smoothly
                        </div>
                        <div u="caption" t="TEAM_1" d="-200" du="50%" class="captionSymbol" style="position: absolute; top: 160px; left: 0px; width: 30px; height: 30px;">+</div>
                        <div u="caption" t="TEAM_1" d="-200" y="-50%" class="captionOrange" style="position: absolute; top: 160px; left: 40px; width: 280px; height: 30px;">
                        random caption transition
                        </div>
                        <div u="caption" t="TEAM_1" d="-200" du="50%" class="captionSymbol" style="position: absolute; top: 210px; left: 0px; width: 30px; height: 30px;">+</div>
                        <div u="caption" t="TEAM_1" d="-200" y="-100%" class="captionOrange" style="position: absolute; top: 210px; left: 40px; width: 280px; height: 30px;">
                        arrow key navigation
                        </div>
                    </div>
                </div>
                <div>
                    <!-- Jssor Slider Begin -->
                    <!-- You can move inline styles to css file or css block. -->
                    <div id="slider2_container" style="position: relative; top: 30px; left: 360px; width: 600px;
                        height: 300px; overflow: hidden; border-radius: 8px; zoom: 1; filter: matrix">

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
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
                            overflow: hidden;">
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-rotator.html"><img src="../img/photography/002.jpg" alt="banner rotator" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                slideshow transition twins
                                </div>
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-rotator.html"><img src="../img/photography/003.jpg" alt="jquery banner rotator" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                random caption transition
                                </div>
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-rotator.html"><img src="../img/photography/004.jpg" alt="responsive banner rotator" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                mobile ready, touch swipe
                                </div>
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-rotator.html"><img src="../img/photography/005.jpg" alt="touch swipe banner rotator" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                responsive, scale smoothly
                                </div>
                            </div>
                        </div>
        
                        <!-- Bullet Navigator Skin Begin -->
                        <!-- jssor slider bullet navigator skin 01 -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
                        </div>
                        <!-- Bullet Navigator Skin End -->
        
                        <!-- Arrow Navigator Skin Begin -->
                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 123px; left: 8px;">
                        </span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 123px; right: 8px">
                        </span>
                        <!-- Arrow Navigator Skin End -->
                        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
                    </div>
                    <!-- Jssor Slider End -->
                    <div u="caption" t="T|IE*IE" t2="B*IB" style="position: absolute; left: 360px;top:360px;width:600px;height:30px;font-size:28px;color:#fff;line-height:30px; text-align: center;">
                    worldwide popular banner rotator example
                    </div>
                    <a class="captionTextBlack" u="caption" t="CLIP|L" d="-200" href="http://www.jssor.com/development/tool-caption-transition-viewer.html"
                        style="position: absolute; top: 30px; left: 0px; width: 320px; height: 30px; font-size: 26px; background-color:transparent;">390+
                        caption transitions</a>

                    <div u="caption" t="ZM" t2="NO" style="position: absolute; top: 80px; left: 0px; width: 320px; height: 80px;">
                        <div u="caption" t2="TEAM_2" class="captionOrange" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 30px;">
                            caption can be
                        </div>            
                        <div u="caption" t2="TEAM_2" class="captionBlack" style="position: absolute; top: 40px; left: 0px; width: 100px; height: 30px;">
                            in team
                        </div>
                        <div u="caption" t2="TEAM_2" class="captionBlack" style="position: absolute; top: 40px; left: 130px; width: 100px; height: 30px;">
                            nested
                        </div>
                    </div>

                    <a class="captionTextBlack" u="caption" t="L|EP" href="http://www.jssor.com/development/tool-slideshow-transition-viewer.html"
                        style="position: absolute; top: 210px; left: 0px; width: 320px; height: 30px; font-size: 26px; background-color:transparent;">360+
                        slideshow transitions</a>

                    <div u="caption" t="B*IB" t2="NO" style="position: absolute; top: 260px; left: 0px; width: 320px; height: 80px;">
                        <div u="caption" t2="TEAM_2" class="captionOrange" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 30px;">
                            slideshow can play
                        </div>
                        <div u="caption" t2="TEAM_2" class="captionBlack" style="position: absolute; top: 40px; left: 0px; width: 100px; height: 30px;">
                            inside
                        </div>
                        <div u="caption" t2="TEAM_2" class="captionBlack" style="position: absolute; top: 40px; left: 130px; width: 100px; height: 30px;">
                            outside
                        </div>
                    </div>
                </div>
                <div>
                    <!-- Jssor Slider Begin -->
                    <!-- You can move inline styles to css file or css block. -->
                    <div id="slider3_container" style="position: relative; top: 90px; left: 360px; width: 600px;
                        height: 300px; overflow: hidden; border-radius: 8px;">

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
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
                            overflow: hidden;">
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-slider.html"><img src="../img/photography/002.jpg" alt="banner slider" /></a>
                                <div u="thumb">Do you notice it is draggable by mouse/finger?</div>
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-slider.html"><img src="../img/photography/003.jpg" alt="jquery banner slider" /></a>
                                <div u="thumb">Did you drag by either horizontal or vertical?</div>
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-slider.html"><img src="../img/photography/004.jpg" alt="responsive banner slider" /></a>
                                <div u="thumb">Do you notice navigator responses when drag?</div>
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-slider.html"><img src="../img/photography/005.jpg" alt="touch swipe banner slider" /></a>
                                <div u="thumb">Do you notice arrow responses when click?</div>
                            </div>
                        </div>

                        <!-- ThumbnailNavigator Skin Begin -->
                        <div u="thumbnavigator" class="slider3-T" style="position: absolute; bottom: 0px; left: 0px; height:45px; width:600px;">
                            <div style="filter: alpha(opacity=40); opacity:0.4; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px; width: 100%; height: 100%;">
                            </div>
                            <!-- Thumbnail Item Skin Begin -->
                            <div u="slides">
                                <div u="prototype" style="POSITION: absolute; WIDTH: 600px; HEIGHT: 45px; TOP: 0; LEFT: 0;">
                                    <div u="thumbnailtemplate" style="font-family: verdana; font-weight: normal; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; TOP: 0; LEFT: 0; color:#fff; line-height: 45px; font-size:20px; padding-left:10px;"></div>
                                </div>
                            </div>
                            <!-- Thumbnail Item Skin End -->
                        </div>
                        <!-- ThumbnailNavigator Skin End -->
        
                        <!-- Bullet Navigator Skin Begin -->
                        <!-- jssor slider bullet navigator skin 01 -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
                        </div>
                        <!-- Bullet Navigator Skin End -->
                        
                        <!-- Arrow Navigator Skin Begin -->
                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 123px; left: 8px;">
                        </span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 123px; right: 8px">
                        </span>
                        <!-- Arrow Navigator Skin End -->
                        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
                    </div>
                    <!-- Jssor Slider End -->
                    <div u="caption" t="L*IB" t2="SPACESHIP|LB" style="position: absolute; left: 360px;top:30px;width:600px;height:30px;font-size:28px;color:#fff;line-height:30px; text-align: center;">
                    supper scalable banner slider example
                    </div>
                    <div class="captionTextBlack" u="caption" t="CLIP|LR" d="-200"
                        style="position: absolute; top: 60px; left: 0px; width: 320px; height: 30px; font-size: 26px; background-color:transparent;">deep ui comstomization</div>

                    <div u="caption" t2="ZM" style="position: absolute; top: 120px; left: 0px; width: 320px; height: 120px;">
                        <div u="caption" class="captionOrange" t="TEAM_2" t2="NO" d=-300 style="position: absolute; top: 0px; left: 0px; width: 200px; height: 30px;">
                            image thumbnail
                        </div>            
                        <div u="caption" class="captionBlack" t="TEAM_2" t2="NO" d=-300 style="position: absolute; top: 40px; left: 0px; width: 200px; height: 30px;">
                            text thumbnail
                        </div>
                        <div u="caption" class="captionBlack" t="TEAM_2" t2="NO" d=-300 style="position: absolute; top: 80px; left: 00px; width: 200px; height: 30px;">
                            mixed thumbnail
                        </div>
                    </div>

                    <div u="caption" t="RTT|360" t2="NO" style="position: absolute; top: 290px; left: 0px; width: 320px; height: 80px;">
                        <div u="caption" class="captionOrange" t2="TEAM_2" style="position: absolute; top: 0px; left: 0px; width: 120px; height: 30px;">
                            bullets
                        </div>            
                        <div u="caption" class="captionOrange" t2="TEAM_2" style="position: absolute; top: 40px; left: 0px; width: 120px; height: 30px;">
                            thumbnails
                        </div>            
                        <div u="caption" class="captionBlack" t2="TEAM_2" style="position: absolute; top: 20px; left: 130px; width: 30px; height: 30px;">
                            in
                        </div>
                        <div u="caption" class="captionBlack" t2="TEAM_2" style="position: absolute; top: 0px; left: 170px; width: 120px; height: 30px;">
                            horizontal
                        </div>            
                        <div u="caption" class="captionBlack" t2="TEAM_2" style="position: absolute; top: 40px; left: 170px; width: 120px; height: 30px;">
                            vertical
                        </div> 
                    </div>
                </div>
            </div> 
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb03" style="position: absolute; bottom: 16px; left: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype" style="POSITION: absolute; WIDTH: 21px; HEIGHT: 21px; text-align:center; line-height:21px; color:White; font-size:12px;"><div u="numbertemplate"></div></div>
            </div>
            <!-- Bullet Navigator Skin End -->
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora20l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora20r" style="width: 55px; height: 55px; top: 123px; right: 8px">
            </span>
            <!-- Arrow Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">Image Slider</a>
        </div> 
        <!-- Jssor Slider End -->
    </div>
</body> 
</html>