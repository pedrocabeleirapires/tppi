<?php
/*------------------------------------------------------------------------
# Accu Weather
# ------------------------------------------------------------------------
# author    Bilal Kabeer Butt
# copyright Copyright (c) GegaByte Corporation. All Rights reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.gegabyte.org
-------------------------------------------------------------------------*/
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<style type="text/css">
.aw-get-widget-footer, #link_get_widget{
	display:none;
	visibility:hidden;
}
.Widget_small{
	width:115px;
}
.Widget_medium{
	width:216px;
}
.Widget_large{
	width:479px;
}
.Widget_auto{
	width:100%;
}
</style>
<?php 
if ( $widget_size == 's' ){
	$CssClass = 'Widget_small';
}else if ( $widget_size == 'm' ){
	$CssClass = 'Widget_medium';
}else if ( $widget_size == 'l' ){
	$CssClass = 'Widget_large';
}else{
	$CssClass = 'Widget_auto';
}
?>
<div class="<?php echo $CssClass; ?>">
	<a href="http://www.accuweather.com/en/pk/islamabad/258278/weather-forecast/258278" class="aw-widget-legal"></a>
	<div id="awcc1424734118185" class="aw-widget-current"  data-locationkey="" data-unit="<?php echo $temp_scale; ?>" data-language="en-us" data-useip="true" data-uid="awcc1424734118185"></div>
</div>
<script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>