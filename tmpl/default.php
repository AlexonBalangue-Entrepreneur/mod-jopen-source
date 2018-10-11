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

use Joomla\CMS\Factory;
use Joomla\CMS\Uri\Uri;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Application;
use Joomla\CMS\Document;


	$docs = Factory::getDocument();
	if(!empty($dnsprefetch_custom)){
		$own_cdn = $dnsprefetch_custom; 
	} else {
		$own_cdn = Uri::root(true).'/media/mod_opensource'; 		
	}	
	
		$proto_fi = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
		$proto_fi .= '://';
	
			switch($fontawesome_site):
				case 1: 
					$docs->addCustomTag( '<link rel="stylesheet" href="'.$proto_fi.'use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
					<script defer src="'.$proto_fi.'use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>' ); 
				break;
			endswitch;
			switch($icofont_site):
				case 1: 
					$docs->addStyleSheetVersion($own_cdn.'/icofont/icofont.css' ); 
				break;
				case 2: 
					$docs->addStyleSheetVersion($own_cdn.'/icofont/icofont.min.css' ); 
				break;
			endswitch;
			switch($jquery_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js' );  
						else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>'; endif;
				break;
				case 2: 
					if($html4or5_config == 0): 
					$docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js' );  
					else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>'; endif;
				break;
			endswitch;
			switch($jqueryui_site):
				case 1: 
					$docs->addStyleSheet( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.theme.min.css' ); 
					if($html4or5_config == 0): 
					$docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js' );  
					else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>'; endif;	
				break;							
			endswitch;
			switch($mootools_site):
				case 1: 
					if($html4or5_config == 0): 
					$docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/mootools/1.6.0/mootools-core.min.js' );  
					else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/mootools/1.6.0/mootools-core.min.js"></script>'; endif;
				break;
			endswitch;
			switch($modernizr_site):
				case 1: 
					if($html4or5_config == 0): 
					$docs->addScript($proto_fi.'cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js' );  
					else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>'; endif;
				break;
			endswitch;
			switch($rotatorjs_site):
				case 1: 
					if($html4or5_config == 0): 
					$docs->addScriptVersion($own_cdn.'/rotatorjs/rotator.js' );  
					else : echo "\n".'<script src="'.$own_cdn.'/rotatorjs/rotator.js"></script>'; endif;
				break;
				case 2: 
					if($html4or5_config == 0): 
					$docs->addScriptVersion($own_cdn.'/rotatorjs/rotator.min.js' );  
					else : echo "\n".'<script src="'.$own_cdn.'/rotatorjs/rotator.min.js"></script>'; endif;
				break;
			endswitch;
			switch($whhg_site):
				case 1: 
					$docs->addStyleSheetVersion($own_cdn.'/whhg/whhg.css', 'text/css', 'all' ); 
				break;
				case 2: 
					$docs->addStyleSheetVersion($own_cdn.'/whhg/whhg.min.css', 'text/css', 'all' ); 
				break;
				case 3: 
					$docs->addStyleSheet( $proto_fi.'www.webhostinghub.com/glyphs/css/whhg.css', 'text/css', 'all' ); 
				break;
			endswitch;
			switch($jqueryeasingjs_site):
				case 1: 
					if($html4or5_config == 0): 
					$docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js' );  
					else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>'; endif;
				break;
			endswitch;
			switch($angularjs_site):
				case 1: 
					if($html4or5_config == 0): 
					$docs->addScript( $proto_fi.'ajax.googleapis.com/ajax/libs/angularjs/1.7.4/angular.min.js' );  
					else : echo "\n".'<script src="'.$proto_fi.'ajax.googleapis.com/ajax/libs/angularjs/1.7.4/angular.min.js"></script>'; endif;
				break;
			endswitch;
			switch($bootstrap_site):
				case 1: 
					if($html4or5_config == 0): 
					$docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js' );  
					else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>'; endif;
					$docs->addStyleSheet( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css' ); 
				break;
				case 2: 
					if($html4or5_config == 0): 
					$docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js' );  
					else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>'; endif;
					$docs->addStyleSheet( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css' ); 
				break;
			endswitch;
			switch($cookiesEU_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($own_cdn.'/cookies/jquery.cookie.js' );  
						$docs->addScriptVersion($own_cdn.'/cookies/cookies-pro.js' );  
						$docs->addStyleSheetVersion($own_cdn.'/cookies/cookie-pro.css' );  
					else : 
						echo "\n".'<script src="'.$own_cdn.'/cookies/jquery.cookie.js"></script>'; 
						echo "\n".'<script src="'.$own_cdn.'/cookies/cookies-pro.js"></script>'; 
						$docs->addStyleSheetVersion($own_cdn.'/cookies/cookie-pro.css');  
					endif;
				break;
				case 2: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($own_cdn.'/cookies/jquery.cookie.min.js' );  
						$docs->addScriptVersion($own_cdn.'/cookies/cookies-pro.min.js' );  
						$docs->addStyleSheetVersion($own_cdn.'/cookies/cookie-pro.min.css' );  
					else : 
						echo "\n".'<script src="'.$own_cdn.'/cookies/jquery.cookie.min.js"></script>'; 
						echo "\n".'<script src="'.$own_cdn.'/cookies/cookies-pro.min.js"></script>'; 
						$docs->addStyleSheetVersion($own_cdn.'/cookies/cookie-pro.min.css' );  
					endif;
				break;
				case 3: 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdn.jsdelivr.net/jquery.cookie/1.4.1/jquery.cookie.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdn.jsdelivr.net/jquery.cookie/1.4.1/jquery.cookie.min.js"></script>'; endif;
				break;
				case 4: 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>'; endif;
				break;
				case 5: 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js' ); $docs->addScriptVersion($own_cdn.'/cookies/cookies-pro.min.js' );	$docs->addStyleSheetVersion($own_cdn.'/cookies/cookie-pro.min.css' );    else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>'; echo "\n".'<script src="'.$own_cdn.'/cookies/cookies-pro.min.js"></script>'; $docs->addStyleSheetVersion($own_cdn.'/cookies/cookie-pro.min.css' );   endif;
				break;
				case 6: 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js' ); $docs->addScriptVersion($own_cdn.'/cookies/cookies-pro.min.js' ); else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>'; echo "\n".'<script src="'.$own_cdn.'/cookies/cookies-pro.min.js"></script>'; endif;
				break;
				case 7: 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdn.jsdelivr.net/jquery.cookie/1.4.1/jquery.cookie.min.js' ); $docs->addScriptVersion($own_cdn.'/cookies/cookies-pro.min.js' );	$docs->addStyleSheetVersion($own_cdn.'/cookies/cookie-pro.min.css' );    else : echo "\n".'<script src="'.$proto_fi.'cdn.jsdelivr.net/jquery.cookie/1.4.1/jquery.cookie.min.js"></script>'; echo "\n".'<script src="'.$own_cdn.'/cookies/cookies-pro.min.js"></script>'; $docs->addStyleSheetVersion($own_cdn.'/cookies/cookie-pro.min.css' );   endif;
				break;
				case 8: 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdn.jsdelivr.net/jquery.cookie/1.4.1/jquery.cookie.min.js' ); $docs->addScriptVersion($own_cdn.'/cookies/cookies-pro.min.js' ); else : echo "\n".'<script src="'.$proto_fi.'cdn.jsdelivr.net/jquery.cookie/1.4.1/jquery.cookie.min.js"></script>'; echo "\n".'<script src="'.$own_cdn.'/cookies/cookies-pro.min.js"></script>'; endif;
				break;
				case 9: 
					if($html4or5_config == 0): $docs->addScriptVersion( $own_cdn.'/cookies/jquery.cookie.min.js' ); else : echo "\n".'<script src="'.$own_cdn.'/cookies/jquery.cookie.min.js"></script>'; endif;
				break;
			endswitch;
			switch($metroUI_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScript($proto_fi.'cdnjs.cloudflare.com/ajax/libs/metro/4.2.24/js/metro.min.js' );  
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/metro/4.2.24/js/metro.min.js"></script>'; 
					endif;
					
						$docs->addStyleSheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/metro/4.2.24/css/metro-all.min.css'); 
				break;
			endswitch; 
			switch($weathericons_site):
				case 1: 
					$docs->addStyleSheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css' ); 
				break;
			endswitch;
			switch($typicons_site):
				case 1: 
					$docs->addStyleSheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css' ); 
				break;
			endswitch;
			switch($useiconic_site):
				case 1: 
					$docs->addStyleSheetVersion($own_cdn.'/useiconic/iconic-bootstrap.css' ); 
				break;
				case 2: 
					$docs->addStyleSheetVersion($own_cdn.'/useiconic/iconic-bootstrap.min.css' ); 
				break;
			endswitch;
			switch($AddToHomescreen_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($own_cdn.'/homescreen/src/addtohomescreen.js' );  
						$docs->addStyleSheetVersion($own_cdn.'/homescreen/style/addtohomescreen.css'); 
					else : 
						echo "\n".'<script src="'.$own_cdn.'/homescreen/src/addtohomescreen.js"></script>'; 
						$docs->addStyleSheetVersion($own_cdn.'/homescreen/style/addtohomescreen.css'); 
					endif;
				break;
				case 2: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($own_cdn.'/homescreen/src/addtohomescreen.min.js' );  
						$docs->addStyleSheetVersion($own_cdn.'/homescreen/style/addtohomescreen.min.css'); 
					else : 
						echo "\n".'<script src="'.$own_cdn.'/homescreen/src/addtohomescreen.min.js"></script>'; 
						$docs->addStyleSheetVersion($own_cdn.'/homescreen/style/addtohomescreen.min.css'); 
					endif;
				break;
			endswitch;
			switch($mapbox_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScript($proto_fi.'api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js' );  
						$docs->addStyleSheet($proto_fi.'api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css'); 
					else : 
						echo "\n".'<script src="'.$proto_fi.'api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js"></script>'; 
						$docs->addStyleSheet($proto_fi.'api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css'); 
					endif;
				break;
			endswitch;
			switch($popper_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScript($proto_fi.'cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/popper.min.js' );  
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/popper.min.js"></script>'; 
					endif;
				break;
			endswitch;
			switch($holderJs_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScript($proto_fi.'cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js' );  
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>'; 
					endif;
				break;
			endswitch;
			
			/*****************[Effect]******************/

			switch($animate_site):
				case 1: 
						$docs->addStyleSheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'); 
				break;
			endswitch;
			switch($wowjs_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScript($proto_fi.'cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js' );  
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>'; 
					endif;
				break;
			endswitch;
			switch($fancyBox_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScript($proto_fi.'cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.1/jquery.fancybox.min.js' );
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.1/jquery.fancybox.min.js"></script>'; 
					endif;
						$docs->addStyleSheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.1/jquery.fancybox.min.css', 'text/css', 'screen'); 
				break;
			endswitch;
			switch($CountUPJs_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.3/countUp.min.js' );
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.3/countUp.min.js"></script>'; 
					endif;
				break;
			endswitch;	
			switch($waypointsJs_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js' );
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>'; 
					endif;
				break;
			endswitch;
			switch($ParallaxJs_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js' );
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>'; 
					endif;
				break;
			endswitch;				
			switch($smoothJs_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScript($proto_fi.'cdnjs.cloudflare.com/ajax/libs/smooth-scroll/14.2.1/smooth-scroll.min.js' ); 
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/smooth-scroll/14.2.1/smooth-scroll.min.js"></script>'; 
					endif;
				break;
			endswitch;			
			/*****************[Prerender and prefetch]******************/

			if($dnsprefetch_yoursite == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.JUri::base().'">'); endif;
			if($dnsprefetch_googleapi == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.$proto_fi.'ajax.googleapis.com/">'); endif;
			if($dnsprefetch_bootstrapcdn == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.$proto_fi.'netdna.bootstrapcdn.com/">'); endif;
			if($dnsprefetch_jquery == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.$proto_fi.'code.jquery.com/">'); endif;
			if($dnsprefetch_cdnjscloudflare == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.$proto_fi.'cdnjs.cloudflare.com/">'); endif;
			if($dnsprefetch_aspnetcdn == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.$proto_fi.'ajax.aspnetcdn.com/">'); endif;
			if(!empty($dnsprefetch_custom)): 
				$docs->addCustomTag('<link rel="dns-prefetch" href="http:'.$dnsprefetch_custom.'" />');
			endif;
			if(!empty($prerender_url)): $docs->addCustomTag('<link rel="prerender" href="'.$prerender_url.'">'); endif;
			if(!empty($prefetch_url)): $docs->addCustomTag('<link rel="prefetch" href="'.$prefetch_url.'">'); endif;
			
			/*****************[IE SUPPORT]******************/

			switch($ie_site):
				case 1: 
					$docs->addCustomTag('<!--[if lt IE 9]><script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->');
					//JHtml::_('script', $proto_fi.'cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));
					//HTMLHelper::script('file', 'option', 'attribs');
				break;
			endswitch;	
/*
	 * @see     HTMLHelper::stylesheet()
	 * @see     HTMLHelper::script()
*/
//https://api.joomla.org/cms-3/classes/Joomla.CMS.HTML.HTMLHelper.html#method_script			
	// * @see     HTMLHelper::stylesheet()
	/*array('version' => 'auto', 'conditional' => 'lt IE 9')
	 * @param   array   $attribs  Array of attributes. 
	 Example: array('id' => 'scriptid', 'async' => 'async', 'data-test' => 1)*/
	// * @see     HTMLHelper::script()				
						//HTMLHelper::_('stylesheet', );
						//array|string|null

?>
