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
					HTMLHelper::script($proto_fi.'use.fontawesome.com/releases/v5.3.1/js/all.js', array('version' => 'auto', 'relative' => true), array('defer' => 'defer', 'integrity' => 'sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB', 'crossorigin' => 'anonymous')); 
					HTMLHelper::stylesheet($proto_fi.'use.fontawesome.com/releases/v5.3.1/css/all.css', array('version' => 'auto', 'relative' => true), array('defer' => 'defer', 'integrity' => 'sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU', 'crossorigin' => 'anonymous'));
				break;
			endswitch;
			switch($jquery_site):
				case 1: 
					if($html4or5_config == 0): 
						HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array('version' => 'auto', 'relative' => true));  
						else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>'; endif;
				break;
				case 2: 
					if($html4or5_config == 0): 
						HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js', array('version' => 'auto', 'relative' => true));
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>'; endif;
				break;
			endswitch;
			switch($jqueryui_site):
				case 1: 
					HTMLHelper::stylesheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.theme.min.css', array('version' => 'auto', 'relative' => true));
					if($html4or5_config == 0): 
					HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array('version' => 'auto', 'relative' => true));
					else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>'; endif;	
				break;							
			endswitch;
			switch($mootools_site):
				case 1: 
					if($html4or5_config == 0): 
						HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/mootools/1.6.0/mootools-core.min.js', array('version' => 'auto', 'relative' => true)); 
					else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/mootools/1.6.0/mootools-core.min.js"></script>'; endif;
				break;
			endswitch;
			switch($modernizr_site):
				case 1: 
					if($html4or5_config == 0): 
						HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array('version' => 'auto', 'relative' => true)); 
					else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>'; endif;
				break;
			endswitch;
			switch($jqueryeasingjs_site):
				case 1: 
					if($html4or5_config == 0): 
						HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array('version' => 'auto', 'relative' => true));
					else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>'; endif;
				break;
			endswitch;
			switch($angularjs_site):
				case 1: 
					if($html4or5_config == 0): 
						HTMLHelper::script($proto_fi.'ajax.googleapis.com/ajax/libs/angularjs/1.7.4/angular.min.js', array('version' => 'auto', 'relative' => true));
					else : echo "\n".'<script src="'.$proto_fi.'ajax.googleapis.com/ajax/libs/angularjs/1.7.4/angular.min.js"></script>'; endif;
				break;
			endswitch;
			switch($bootstrap_site):
				case 1: 
					if($html4or5_config == 0): 
						HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js', array('version' => 'auto', 'relative' => true));
					else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>'; endif;
					
					HTMLHelper::stylesheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css', array('version' => 'auto', 'relative' => true));
				break;
				case 2: 
					if($html4or5_config == 0): 
						HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js', array('version' => 'auto', 'relative' => true));
					else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>'; endif;
					
					HTMLHelper::stylesheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css', array('version' => 'auto', 'relative' => true));
				break;
			endswitch;
			switch($weathericons_site):
				case 1: 
					
					HTMLHelper::stylesheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css', array('version' => 'auto', 'relative' => true));
				break;
			endswitch;
			switch($typicons_site):
				case 1: 
					HTMLHelper::stylesheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css', array('version' => 'auto', 'relative' => true));
				break;
			endswitch;
			switch($mapbox_site):
				case 1: 
					HTMLHelper::stylesheet($proto_fi.'api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css', array('version' => 'auto', 'relative' => true));
					if($html4or5_config == 0):  
						HTMLHelper::script($proto_fi.'api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js', array('version' => 'auto', 'relative' => true));
					else : 
						echo "\n".'<script src="'.$proto_fi.'api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js"></script>'; 
					endif;
				break;
			endswitch;
			switch($popper_site):
				case 1: 
					if($html4or5_config == 0): 
						HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/esm/popper.min.js', array('version' => 'auto', 'relative' => true));
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/esm/popper.min.js"></script>'; 
					endif;
				break;
			endswitch;
			switch($holderJs_site):
				case 1: 
					if($html4or5_config == 0): 
						HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js', array('version' => 'auto', 'relative' => true));
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>'; 
					endif;
				break;
			endswitch;
			
			/*****************[Effect]******************/

			switch($animate_site):
				case 1: 
					HTMLHelper::stylesheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css', array('version' => 'auto', 'relative' => true));
				break;
			endswitch;
			switch($wowjs_site):
				case 1: 
					if($html4or5_config == 0): 
						HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array('version' => 'auto', 'relative' => true));
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>'; 
					endif;
				break;
			endswitch;
			switch($fancyBox_site):
				case 1: 
					if($html4or5_config == 0): 
						HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.js', array('version' => 'auto', 'relative' => true));
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.js"></script>'; 
					endif;
						HTMLHelper::stylesheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.css', array('version' => 'auto', 'relative' => true));
				break;
			endswitch;
			switch($CountUPJs_site):
				case 1: 
					if($html4or5_config == 0): 
						HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.3/countUp.min.js', array('version' => 'auto', 'relative' => true));
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.3/countUp.min.js"></script>'; 
					endif;
				break;
			endswitch;	
			switch($waypointsJs_site):
				case 1: 
					if($html4or5_config == 0): 
						HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js', array('version' => 'auto', 'relative' => true));
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>'; 
					endif;
				break;
			endswitch;
			switch($ParallaxJs_site):
				case 1: 
					if($html4or5_config == 0): 
						HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js', array('version' => 'auto', 'relative' => true));
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>'; 
					endif;
				break;
			endswitch;				
			switch($smoothJs_site):
				case 1: 
					if($html4or5_config == 0): 
						HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/smooth-scroll/14.2.1/smooth-scroll.min.js', array('version' => 'auto', 'relative' => true));
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
					HTMLHelper::script($proto_fi.'cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));
					
				break;
			endswitch;	
/* Compatible Joomla 3.9/4.0
	 * @see     HTMLHelper::stylesheet();
	 * @see     HTMLHelper::script()
*/


?>
