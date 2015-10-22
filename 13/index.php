<!DOCTYPE html>
<html> 
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Example 13</title>
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../js/jssor.js"></script>
    <script type="text/javascript" src="../js/jssor.slider.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body style="margin:0;padding:0; background:#fff; font-family: Arial, Verdana, Sans-Serif;">
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. --> 
    <div id="slider1_container" style="position: relative; width: 980px;
        height: 380px; overflow: hidden;">
 
        <!-- Loading Screen --> 
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;"> 
            </div> 
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
            </div> 
        </div> 
 
        <!-- Slides Container --> 
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 980px; height: 380px;
            overflow: hidden;">
            <div>
                <img u="image" src="../img/home/01.jpg" />
                <div u=caption t="CLIP|LR" du="1500" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:500px; height:30px;"> 
                Touch swipe and responsive javascript image slider
                </div>
                <div u=caption t="L|IB" t2=L d=-900 class="captionBlack"  style="position:absolute; left:360px; top: 130px; width:60px; height:30px;"> 
                comes
                </div> 
                <div u=caption t="RTT|360" d=-200 class="captionBlack"  style="position:absolute; left:360px; top: 180px; width:60px; height:30px;"> 
                with
                </div>
                <div u=caption t="DDGDANCE|RB" t2="RTT|10" d=-1800 du=3800 class="captionOrange" style="position:absolute; left:560px; top: 110px; width:200px; height:120px; text-align: left;">
                    &nbsp; Banner Slider<br />
                    &nbsp; Image Gallery Slider<br />
                    &nbsp; Image Slider<br />
                    &nbsp; Carousel Slider
                </div>
                <div u=caption t="T|IE*IE" d=-1600 du=3800 t2="B" class="captionOrange" style="position:absolute; left:20px; top: 310px; width:330px; height:30px;">
                    slideshow and responsive slider ...
                </div>
                <div u="caption" t="ZMF|10" t2="B" d=-1300 style="position:absolute;left:420px;top:280px;width:90px;height:40px;font-size:36px;color:#fff;line-height:40px;">390+</div>
                <div u="caption" t="CLIP|L" d=-300 style="position:absolute;left:520px;top:280px;width:160px;height:40px;font-size:36px;color:#fff;line-height:40px; text-align: center;">caption</div>
                <a class="captionOrange" u="caption" t="CLIP|L" d=-300 href="http://www.jssor.com/development/tool-caption-transition-viewer.html" style="position:absolute;left:720px;top:280px;width:220px;height:40px;font-size:36px;color:#fff;line-height:40px;">transitions</a>
            </div>
            <div> 
                <img u="image" src="../img/home/02.jpg" />
                <a class="captionOrange" href="http://www.jssor.com/development/tool-slideshow-transition-viewer.html" style="position: absolute; top: 300px; left: 630px; width: 250px; height: 30px;">360+ Slideshow Transitions</a>
                <div u=caption t="CLIP|LR" t2="B" du="2000" class="captionOrange"  style="position:absolute; left:20px; top: 300px; width:500px; height:30px;"> 
                Jssor Slider is one of best performance sliders
                </div>
                <div u="caption" t="FADE" t2="B" d=-450 class=captionBlack style="position: absolute; left:700px;top:120px;width:200px;height:90px;">
                        No-JQuery<br />
                        Independent<br />
                        Javascript Code
                </div>
                <div u="caption" t="T|IB" t2="R" d=-600 class=captionOrange style="position: absolute; top: 90px; left: 720px; width: 160px;
                    height: 90px;  line-height: 90px;">
                    Compress
                </div>
                <div u="caption" t="MCLIP|T" t2="T" d=-450 style="position:absolute;left:505px;top:40px;width:200px;height:30px;font-size:18px;color:#fff;line-height:30px;text-align:center;">Size&nbsp; &nbsp; &nbsp;CPU Usage</div>
                <div u="caption" t="MCLIP|R" d=-300 style="position:absolute;left:325px;top:90px;width:350px;height:30px;font-size:18px;color:#fff;line-height:30px;">Slider with Slideshow&nbsp; &nbsp; &nbsp; 23KB&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ~4%</div>
                <div u="caption" t="MCLIP|R" d=-300 style="position:absolute;left:325px;top:140px;width:350px;height:30px;font-size:18px;color:#fff;line-height:30px;">Slider with Caption&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 18KB&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ~4%</div>
                <div u="caption" t="MCLIP|R" d=-300 style="position:absolute;left:325px;top:190px;width:350px;height:30px;font-size:18px;color:#fff;line-height:30px;">Slider&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;17KB&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ~1%</div>
            </div>
            <div> 
                <img u="image" src="../img/home/03.jpg" />
                <a class="captionOrange" href="http://www.jssor.com/demos/index.html" style="position: absolute; top: 50px; right: 30px; width: 200px;">30+ Templates</a>
                <div u=caption t="T" t2=NO style="position: absolute; left: 20px; top:30px; width:600px; height:90px; color: #fff; line-height: 30px; text-align: center;"> 
                    Jssor Slider is touch swipe image slideshow with 360+ javascript slideshow effects.<br />
                    When touch Jssor Slider,<br />
                    it will freeze and then move to the direction that finger swipes to.
                </div>
                <div u=caption t="L" d=-750 class="captionOrange"  style="position:absolute; left:20px; top: 300px; width:130px; height:30px;"> 
                Jssor slider
                </div>
                <div u=caption t="CLIP|L" t2=B d=-450 class="captionBlack"  style="position:absolute; left:160px; top: 300px; width:30px; height:30px;"> 
                is
                </div>
                <div u=caption t="DDG|TR" t2="TORTUOUS|VB" d=-750 class="captionOrange"  style="position:absolute; left:200px; top: 300px; width:300px; height:30px;"> 
                most scalable photo slideshow
                </div>
                <div u=caption t="RTT|10" d=-450 class="captionBlack"  style="position:absolute; left:430px; top: 240px; width:30px; height:30px;"> 
                for
                </div>
                <div u=caption t="TORTUOUS|VB" d=-750 class="captionOrange"  style="position:absolute; left:590px; top: 220px; width:80px; height:30px;"> 
                photo
                </div>
                <div u=caption t="T" d=-450 class="captionOrange"  style="position:absolute; left:720px; top: 200px; width:80px; height:30px;"> 
                image
                </div>
                <div u=caption t="FLTTR|R" t2="B" d=-600 class="captionOrange"  style="position:absolute; left:560px; top: 300px; width:80px; height:30px;"> 
                picture
                </div>
                <div u=caption t="ATTACK|BR" d=-600 class="captionOrange"  style="position:absolute; left:760px; top: 310px; width:80px; height:30px;"> 
                content
                </div>
                <div u="caption" t="FLTTRWN|LT" d=-900 style="position:absolute;left:460px;top:160px;width:130px;height:30px;font-size:28px;color:#fff;line-height:30px;">html code</div>
                <div u="caption" t="RTTS|R" d=-900 style="position:absolute;left:760px;top:120px;width:130px;height:30px;font-size:28px;color:#fff;line-height:30px;">web page</div>
                <div u="caption" t="R|IB" t2=R d=-900 style="position:absolute;left:860px;top:250px;width:60px;height:30px;font-size:28px;color:#fff;line-height:30px;">text</div>
            </div>
            <div>
                <img u="image" src="../img/home/04.jpg" />
                <div u=caption t="RTTS|T" d=-300 t2="B" class=captionOrange style="position:absolute; left:20px; top: 330px; width:300px; height:30px;"> 
                one of the most reliable sliders
                </div>
                <div u=caption t="T|IB" t2="T" d=-300 class="captionOrange"  style="position:absolute; left:20px; top: 100px; width:130px; height:30px;"> 
                All browsers
                </div>
                <div u=caption t="T|IB" t2=L d=-900 class="captionBlack"  style="position:absolute; left:60px; top: 170px; width:100px; height:30px;"> 
                supported
                </div>
                <div u="caption" t="WV|B" t2="T" d=-600 class=bricon style="position:absolute; top:50px; left: 220px; width:30px; height:30px; background-position: 0px 0px;"></div>
                <div u="caption" t="WV|B" t2="T" d="-1100" class=bricon style="position:absolute; top:100px; left: 220px; width:30px; height:30px; background-position: -30px 0px;"></div>
                <div u="caption" t="WV|B" t2="T" d="-1100" class=bricon style="position:absolute; top:150px; left: 220px; width:30px; height:30px; background-position: -60px 0px;"></div>
                <div u="caption" t="WV|B" t2="T" d="-1100" class=bricon style="position:absolute; top:200px; left: 220px; width:30px; height:30px; background-position: -90px 0px;"></div>
                <div u="caption" t="WV|B" t2="T" d="-1100" class=bricon style="position:absolute; top:250px; left: 220px; width:30px; height:30px; background-position: -120px 0px;"></div>
                <div u="caption" t="LISTH|R" t2="CLIP|TB" d=-600 class=captionOrange style="position: absolute; top: 40px; left: 280px; width: 180px;
                    height: 250px; text-align: left; line-height: 50px;">
                        &nbsp; Chrome&nbsp; &nbsp; &nbsp; 3+<br />
                        &nbsp; Firerfox&nbsp; &nbsp; &nbsp; 2+<br />
                        &nbsp; IE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 6+<br />
                        &nbsp; Safari&nbsp; &nbsp; &nbsp; &nbsp; 3.1+<br />
                        &nbsp; Opera&nbsp; &nbsp; &nbsp; &nbsp;10+
                </div>
                <div u=caption t="TR" t2="T" d=-900 class="captionOrange"  style="position:absolute; left:700px; top: 40px; width:130px; height:30px;"> 
                All devices
                </div>
                <div u=caption t="R" t2=R d=-900 class="captionBlack"  style="position:absolute; left:780px; top: 55px; width:100px; height:30px;"> 
                supported
                </div>
                <div u="caption" t="T|IB" d=-900 style="position:absolute;left:525px;top:90px;width:220px;height:30px;font-size:28px;color:#fff;line-height:30px;">Windows Phone</div>
                <div u="caption" t="T|IB" t2="ZMF|10" d=-900 style="position:absolute;left:560px;top:160px;width:120px;height:30px;font-size:28px;color:#fff;line-height:30px;">Android</div>
                <div u="caption" t="T|IB" t2=R d=-900 style="position:absolute;left:760px;top:140px;width:60px;height:30px;font-size:28px;color:#fff;line-height:30px;">iOS</div>
                <img u="caption" t="T|IB" t2=B d=-900 src="../img/home/moc-iphone.png" style="position:absolute;left:600px;top:230px;width:120px;height:80px;" />
                <img u="caption" t="RTTL|BR" d=-450 src="../img/home/moc-ipad.png" style="position:absolute;left:750px;top:220px;width:77px;height:100px;" />
            </div>

            <div u="any" style="position: absolute; display: block; top: 6px; right: 16px; width: 280px; height: 40px; z-index: 10;">

                <a class="share-icon share-facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=http://jssor.com" title="Share on Facebook"></a>
                <a class="share-icon share-twitter" target="_blank" href="http://twitter.com/share?url=http://jssor.com&text=JavaScript%20jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20html%20TOUCH%20SWIPE%20Responsive" title="Share on Twitter"></a>
                <a class="share-icon share-googleplus" target="_blank" href="https://plus.google.com/share?url=http://jssor.com" title="Share on Google Plus"></a>
                <a class="share-icon share-linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=http://jssor.com" title="Share on LinkedIn"></a>
                <a class="share-icon share-stumbleupon" target="_blank" href="http://www.stumbleupon.com/submit?url=http://jssor.com&title=JavaScript%20jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20html%20TOUCH%20SWIPE%20Responsive" title="Share on StumbleUpon"></a>
                <a class="share-icon share-pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=http://jssor.com&media=http://jssor.com/img/site/jssor.slider.jpg&description=JavaScript%20jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20html%20TOUCH%20SWIPE%20Responsive" title="Share on Pinterst"></a>
                <a class="share-icon share-email" target="_blank" href="mailto:?Subject=Jssor%20Slider&Body=Highly%20recommended%20JavaScript%20jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20html%20TOUCH%20SWIPE%20Responsive%20http://jssor.com" title="Share by Email"></a>
            </div>
            <!-- Example to add fixed static share buttons in slider END -->
            <img u="any" class="qr_code" src="../img/qr/jssor.com.png" style="position: absolute; width: 80px; height: 80px; bottom: 20px; right: 20px; opacity: .5; filter: alpha(opacity=50);" />
            <!-- Example to add fixed static QR code in slider END -->
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
</body> 
</html>