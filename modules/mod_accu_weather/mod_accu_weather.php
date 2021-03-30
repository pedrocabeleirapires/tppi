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

$temp_scale = $params->get('temp_scale');
$widget_size = $params->get('widget_size');

//Returns the path of the layout file
require JModuleHelper::getLayoutPath('mod_accu_weather', $params->get('layout', 'default'));