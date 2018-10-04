<?php
/**
 * @package	Module for Joomla!
 * @subpackage  mod_opensource
 * @version	2.6 beta
 * @author	AlexonBalangue.me
 * @copyright	(C) 2012-2018 Alexon Balangue. All rights reserved.
 * @license	GNU/LGPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die;


use Joomla\CMS\Application;
use Joomla\CMS\Document;
use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Uri\Uri;


$waypointsJs_site = $params->get('waypointsjs-site');
$holderJs_site = $params->get('holderjs-site');
$ParallaxJs_site = $params->get('parallaxjs-site');
$bootstrap_site = $params->get('bootstrap-site');
$icofont_site = $params->get('icofont-site');
$fontawesome_site = $params->get('fontawesome-site');
$jquery_site = $params->get('jquery-site');
$jqueryui_site = $params->get('jqueryui-site');

$mapbox_site = $params->get('MapBox-site');

$popper_site = $params->get('popper-site');
$mootools_site = $params->get('mootools-site');

$modernizr_site = $params->get('modernizr-site');


$rotatorjs_site = $params->get('rotatorjs-site');
$whhg_site = $params->get('whhg-site');
$angularjs_site = $params->get('angularjs-site');
$jqueryeasingjs_site = $params->get('jqueryeasingjs-site');
$metroUI_site = $params->get('metroUI-site');
$weathericons_site = $params->get('weather-icons-site');
$typicons_site = $params->get('typicons-site');
$foundationicons_site = $params->get('foundation-icons-site');
$useiconic_site = $params->get('useiconic-site');
$jqueryeasingjs_site = $params->get('jqueryeasingjs-site');
$cookiesEU_site = $params->get('cookiesEU-site');
$AddToHomescreen_site = $params->get('AddToHomescreen-site');
$ie_site = $params->get('ie-site');
$respond_site = $params->get('respond-site');

$animate_site = $params->get('animate-site');
$wowjs_site = $params->get('wowjs-site');
$fancyBox_site = $params->get('fancyBox-site');
$CountUPJs_site = $params->get('countupjs-site');
$smoothJs_site = $params->get('smoothjs-site');

/*****************[if HTML5]******************/
$html4or5_config = $params->get('html4or5');
$protos = $params->get('protos');

/*****************[Prerender and prefetch]******************/
$dnsprefetch_yoursite = $params->get('dnsprefetch_yoursite');
$dnsprefetch_custom = $params->get('dnsprefetch_custom');
$dnsprefetch_googleapi = $params->get('dnsprefetch_googleapi');
$dnsprefetch_bootstrapcdn = $params->get('dnsprefetch_bootstrapcdn');
$dnsprefetch_jquery = $params->get('dnsprefetch_jquery');
$dnsprefetch_cdnjscloudflare = $params->get('dnsprefetch_cdnjscloudflare');
$dnsprefetch_aspnetcdn = $params->get('dnsprefetch_aspnetcdn');
$prerender_url = JURI::root().$params->get('prerender-url');
/*****************[if AMP-HTML]******************/
$amp_youtube = $params->get('amp-youtube');
$amp_access = $params->get('amp-access');
$amp_vine = $params->get('amp-vine');
$amp_accordion = $params->get('amp-accordion');
$amp_twitter = $params->get('amp-twitter');
$amp_pinterest = $params->get('amp-pinterest');
$amp_instagram = $params->get('amp-instagram');
$amp_soundcloud = $params->get('amp-soundcloud');
$amp_usernotification = $params->get('amp-usernotification');
$amp_iframe = $params->get('amp-iframe');
$amp_facebook = $params->get('amp-facebook');
$amp_vimeo = $params->get('amp-vimeo');
$amp_lightbox = $params->get('amp-lightbox');
$amp_mustache = $params->get('amp-mustache');
$amp_dailymotion = $params->get('amp-dailymotion');
$amp_font = $params->get('amp-font');
$amp_fittext = $params->get('amp-fittext');
$amp_list = $params->get('amp-list');
$amp_installserviceworker = $params->get('amp-installserviceworker');
$amp_carousel = $params->get('amp-carousel');
$amp_imagelightbox = $params->get('amp-imagelightbox');
$amp_audio = $params->get('amp-audio');
$amp_anim = $params->get('amp-anim');
$amp_ad = $params->get('amp-ad');
$amp_embed = $params->get('amp-embed');
$amp_img = $params->get('amp-img');
$amp_pixel = $params->get('amp-pixel');
$amp_video = $params->get('amp-video');
$amp_start = $params->get('amp-start');
$amp_brightcove = $params->get('amp-brightcove');
$amp_analytics = $params->get('amp-analytics');


require ModuleHelper::getLayoutPath('mod_opensource', $params->get('layout', 'default'));
