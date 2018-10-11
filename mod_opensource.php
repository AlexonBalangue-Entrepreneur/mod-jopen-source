<?php
/**
 * @package	Module for Joomla!
 * @subpackage  mod_opensource
 * @version	2.6
 * @author	AlexonBalangue.me
 * @copyright	(C) 2012-2018 Alexon Balangue. All rights reserved.
 * @license	GNU/LGPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die;


use Joomla\CMS\Helper\ModuleHelper;


$waypointsJs_site = $params->get('waypointsjs-site');
$holderJs_site = $params->get('holderjs-site');
$ParallaxJs_site = $params->get('parallaxjs-site');
$bootstrap_site = $params->get('bootstrap-site');
$fontawesome_site = $params->get('fontawesome-site');
$jquery_site = $params->get('jquery-site');
$jqueryui_site = $params->get('jqueryui-site');
$mapbox_site = $params->get('MapBox-site');
$popper_site = $params->get('popper-site');
$mootools_site = $params->get('mootools-site');
$modernizr_site = $params->get('modernizr-site');
$angularjs_site = $params->get('angularjs-site');
$jqueryeasingjs_site = $params->get('jqueryeasingjs-site');
$weathericons_site = $params->get('weather-icons-site');
$typicons_site = $params->get('typicons-site');
$foundationicons_site = $params->get('foundation-icons-site');
$jqueryeasingjs_site = $params->get('jqueryeasingjs-site');
$ie_site = $params->get('ie-site');
$respond_site = $params->get('respond-site');
$animate_site = $params->get('animate-site');
$wowjs_site = $params->get('wowjs-site');
$fancyBox_site = $params->get('fancyBox-site');
$CountUPJs_site = $params->get('countupjs-site');
$smoothJs_site = $params->get('smoothjs-site');

/*****************[if HTML5]******************/
$html4or5_config = $params->get('html4or5');


/*****************[Prerender and prefetch]******************/
$dnsprefetch_yoursite = $params->get('dnsprefetch_yoursite');
$dnsprefetch_custom = $params->get('dnsprefetch_custom');
$dnsprefetch_googleapi = $params->get('dnsprefetch_googleapi');
$dnsprefetch_bootstrapcdn = $params->get('dnsprefetch_bootstrapcdn');
$dnsprefetch_jquery = $params->get('dnsprefetch_jquery');
$dnsprefetch_cdnjscloudflare = $params->get('dnsprefetch_cdnjscloudflare');
$dnsprefetch_aspnetcdn = $params->get('dnsprefetch_aspnetcdn');
$prerender_url = JURI::root().$params->get('prerender-url');


require ModuleHelper::getLayoutPath('mod_opensource', $params->get('layout', 'default'));
