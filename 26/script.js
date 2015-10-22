jQuery(document).ready(function ($) {
var options = {
    $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
        $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
        $AutoCenter: 1,                                  //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
        $SpacingX: 25                                   //[Optional] Horizontal space between each item in pixel, default value is 0
    }
};

var jssor_slider1 = new $JssorSlider$("slider1_container", options);

//responsive code begin
//you can remove responsive code if you don't want the slider scales while window resizes
function ScaleSlider() {
    var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
    if (parentWidth) {
        var sliderWidth = parentWidth;

        //keep the slider width no more than 800
        sliderWidth = Math.min(sliderWidth, 800);

        jssor_slider1.$ScaleWidth(sliderWidth);
    }
    else
        window.setTimeout(ScaleSlider, 30);
}
ScaleSlider();

$(window).bind("load", ScaleSlider);
$(window).bind("resize", ScaleSlider);
$(window).bind("orientationchange", ScaleSlider);
//responsive code end
});