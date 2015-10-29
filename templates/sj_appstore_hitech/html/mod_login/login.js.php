<?php
defined('_JEXEC') or die;
GLOBAL $yt;
$effects = $yt->getParam('moofx');
$duration = $yt->getParam('moofxduration');
switch($effects){
    case "Fx.Transitions.Circ.easeOut": $effects = "'easeOutCirc'"; break;
    case "Fx.Transitions.Circ.easeIn": $effects = "'easeInCirc'"; break;
    case "Fx.Transitions.Circ.easeInOut": $effects = "'easeInOutCirc'"; break;
    case "Fx.Transitions.linear": $effects = "'linear'"; break;
    case "Fx.Transitions.Quad.easeInOut": $effects = "'easeInOutQuad'"; break;
    case "Fx.Transitions.Quad.easeOut": $effects = "'easeOutQuad'"; break;
    case "Fx.Transitions.Quad.easeIn": $effects = "'easeInQuad'"; break;
    case "Fx.Transitions.Cubic.easeIn": $effects = "'easeInCubic'"; break;
    case "Fx.Transitions.Cubic.easeOut": $effects = "'easeOutCubic'"; break;
    case "Fx.Transitions.Cubic.easeInOut": $effects = "'easeInOutCubic'"; break;
    case "Fx.Transitions.Quart.easeIn": $effects = "'easeInQuart'"; break;
    case "Fx.Transitions.Quart.easeOut": $effects = "'easeOutQuart'"; break;
    case "Fx.Transitions.Quart.easeInOut": $effects = "'easeInOutQuart'"; break;
    case "Fx.Transitions.Quint.easeIn": $effects = "'easeInQuint'"; break;
    case "Fx.Transitions.Quint.easeOut": $effects = "'easeOutQuint'"; break;
    case "Fx.Transitions.Quint.easeInOut": $effects = "'easeInOutQuint'"; break;
    case "Fx.Transitions.Sine.easeIn": $effects = "'easeInSine'"; break;
    case "Fx.Transitions.Sine.easeOut": $effects = "'easeOutSine'"; break;
    case "Fx.Transitions.Sine.easeInOut": $effects = "'easeInOutSine'"; break;
    case "Fx.Transitions.Expo.easeIn": $effects = "'easeInExpo'"; break;
    case "Fx.Transitions.Expo.easeOut": $effects = "'easeOutExpo'"; break;
    case "Fx.Transitions.Expo.easeInOut": $effects = "'easeInOutExpo'"; break;
    case "Fx.Transitions.Bounce.easeIn": $effects = "'easeInBounce'"; break;
    case "Fx.Transitions.Bounce.easeOut": $effects = "'easeOutBounce'"; break;
    case "Fx.Transitions.Bounce.easeInOut": $effects = "'easeInOutBounce'"; break;
    case "Fx.Transitions.Back.easeIn": $effects = "'easeInBack'"; break;
    case "Fx.Transitions.Back.easeOut": $effects = "'easeOutBack'"; break;
    case "Fx.Transitions.Back.easeInOut": $effects = "'easeInOutBack'"; break;
    case "Fx.Transitions.Elastic.easeIn": $effects = "'easeInElastic'"; break;
    case "Fx.Transitions.Elastic.easeOut": $effects = "'easeOutElastic'"; break;
    case "Fx.Transitions.Elastic.easeInOut": $effects = "'easeInOutElastic'"; break;
    
    default:
        $effects = "'easeOutCirc'";
        break;
}
?>
<script type="text/javascript">
//	<![CDATA[
$jsmart(function($){
$(document).ready(function(){
	var $itemlinks = $('#nav_top ul.sj-login-regis > li');
	var $duration = <?php echo $duration; ?>;
	var $effects = <?php echo $effects; ?>;
	$('.show-box').wrap('<div class="wrap_slidedown">');
	$('.show-box').wrap('<div class="wrap_slidedown_in">');

	$itemlinks.mouseenter(function(){
		var $this = $(this);
		$('#nav_top ul.sj-login-regis').find('.wrap_slidedown_in').css('height',0).stop();
		
		var $contendrop = $this.find('.show-box');
		var hcontendrop = $contendrop.height();
		var wcontendrop = $contendrop.width();
		
		$this.find('.wrap_slidedown_in').css('width',wcontendrop+'px').animate({
			height: hcontendrop+"px"
		}, $duration, $effects);
	}).mouseleave(function(){ 
		var $this = $(this);
		var $contendrop = $this.find('.show-box');
		
		$this.find('.wrap_slidedown_in').animate({
			height: 0+"px"
		}, $duration, $effects, function(){});
	});
});
});
//	]]>
</script>
<?php

?>