<?php
/**
 * @package	Module for Joomla!
 * @subpackage  mod_opensource
 * @version	2.4
 * @author	AlexonBalangue.me
 * @copyright	(C) 2012-2016 Alexon Balangue. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die;

?>

<?php

	$docs = JFactory::getDocument();
	if(!empty($dnsprefetch_custom)){
		$own_cdn = $dnsprefetch_custom; 
	} else {
		$own_cdn = JURI::root(true).'/media/mod_opensource'; 		
	}	
	switch($protos){
		case 1: $proto_fi = '//'; break;	
		case 2: $proto_fi = 'http://'; break;	
		case 3: $proto_fi = 'https://'; break;	
	}
			switch($fontawesome_site):
				case 1: 
					$docs->addCustomTag( '<script defer src="'.$own_cdn.'/fa/js/fontawesome-all.min.js"></script>
					<script defer src="'.$own_cdn.'/fa/js/fa-v4-shims.min.js"></script>' ); 
					$docs->addStyleSheet( $own_cdn.'/fa/css/fontawesome-all.min.css' ); 
				break;
				case 2: 
					$docs->addStyleSheet('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' ); 
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
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'code.jquery.com/jquery-1.12.4.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'code.jquery.com/jquery-1.12.4.min.js"></script>'; endif;
				break;
				case 2: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'code.jquery.com/jquery-2.2.4.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'code.jquery.com/jquery-2.2.4.min.js"></script>'; endif;
				break;
				case 3: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'code.jquery.com/jquery-3.3.1.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'code.jquery.com/jquery-3.3.1.min.js"></script>'; endif;
				break;
				case 4: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.j' );  else : echo "\n".'<script src="'.$proto_fi.'ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.j"></script>'; endif;
				break;
				case 5: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>'; endif;
				break;
				case 6: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>'; endif;
				break;
				case 7: 
					
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>'; endif;
				break;
				case 8: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>'; endif;
				break;
				case 9: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>'; endif;
				break;
				case 10: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>'; endif;
				break;
				case 11: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'cdn.jsdelivr.net/jquery/2.2.4/jquery.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdn.jsdelivr.net/jquery/2.2.4/jquery.min.js"></script>'; endif;
				break;
				case 12: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'cdn.jsdelivr.net/jquery/3.3.1/jquery.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdn.jsdelivr.net/jquery/3.3.1/jquery.min.js"></script>'; endif;
				break;
			endswitch;
			switch($jqueryui_site):
				case 1: 
					$docs->addStyleSheet( $proto_fi.'ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/'.$jqueryui_themes.'/jquery-ui.css' ); 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>'; endif;	
				break;
				case 2: 
					$docs->addStyleSheet( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/'.$jqueryui_themes.'/jquery-ui.css' ); 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>'; endif;	
				break;								
			endswitch;
			switch($jquerymobile_site):
				case 1: 
					$docs->addStyleSheet( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.css' ); 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js"></script>'; endif;
				break;
				case 2: 
					$docs->addStyleSheet( $proto_fi.'cdn.jsdelivr.net/jquery.mobile/1.4.5/jquery.mobile.min.css' ); 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdn.jsdelivr.net/jquery.mobile/1.4.5/jquery.mobile.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdn.jsdelivr.net/jquery.mobile/1.4.5/jquery.mobile.min.js"></script>'; endif;
				break;
			endswitch;
			switch($qunit_site):
				case 1: 
					$docs->addStyleSheet( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/qunit/2.4.1/qunit.min.css' ); 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/qunit/2.4.1/qunit.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/qunit/2.4.1/qunit.min.js"></script>'; endif;
				break;
			endswitch;
			switch($sizzle_site):
				case 1: 
					if($html4or5_config == 0): $docs->addScript($proto_fi.'cdnjs.cloudflare.com/ajax/libs/sizzle/2.3.3/sizzle.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/sizzle/2.3.3/sizzle.min.js"></script>'; endif;
				break;
				case 2: 
					if($html4or5_config == 0): $docs->addScript($proto_fi.'cdn.jsdelivr.net/sizzle/2.3.3/sizzle.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdn.jsdelivr.net/sizzle/2.3.3/sizzle.min.js"></script>'; endif;
				break;
			endswitch;
			switch($mootools_site):
				case 1: 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'ajax.googleapis.com/ajax/libs/mootools/1.6.0/mootools.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'ajax.googleapis.com/ajax/libs/mootools/1.6.0/mootools.min.js"></script>'; endif;
				break;
				case 2: 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/mootools/1.6.0/mootools-core.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/mootools/1.6.0/mootools-core.min.js"></script>'; endif;
				break;
			endswitch;
			switch($dojo_site):
				case 1: 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'ajax.googleapis.com/ajax/libs/dojo/1.12.2/dojo/dojo.js' );  else : echo "\n".'<script src="'.$proto_fi.'ajax.googleapis.com/ajax/libs/dojo/1.12.2/dojo/dojo.js"></script>'; endif;
				break;
			endswitch;
			switch($modernizr_site):
				case 1: 
					if($html4or5_config == 0): $docs->addScript($proto_fi.'cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>'; endif;
				break;
			endswitch;
			switch($less_site):
				case 1: 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/less.js/2.7.3/less.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/less.js/2.7.3/less.min.js"></script>'; endif;
				case 2: 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdn.jsdelivr.net/less/2.7.3/less.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdn.jsdelivr.net/less/2.7.3/less.min.js"></script>'; endif;
				break;
			endswitch;
			switch($skel_site):
				case 1: 
					if($html4or5_config == 0): $docs->addScript($proto_fi.'cdnjs.cloudflare.com/ajax/libs/skel/3.0.1/skel.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/skel/3.0.1/skel.min.js"></script>'; endif;
				break;
				case 2: 
					$docs->addStyleSheet( $proto_fi.'cdn.jsdelivr.net/skeljs/0.4.6/skel-noscript.css' ); 
					if($html4or5_config == 0): $docs->addScript($proto_fi.'cdn.jsdelivr.net/g/skeljs@0.4.6(skel.min.js+skel-panels.min.js)' ); else : echo "\n".'<script src="'.$proto_fi.'cdn.jsdelivr.net/g/skeljs@0.4.6(skel.min.js+skel-panels.min.js)"></script>'; endif;
				break;
			endswitch;
			switch($ivory_site):
				case 1: 
					$docs->addStyleSheetVersion($own_cdn.'/ivory/ivory.css' ); 
				break;
				case 2: 
					$docs->addStyleSheetVersion($own_cdn.'/ivory/ivory.min.css' ); 
				break;
			endswitch;
			switch($skeleton_site):
				case 1: 
					$docs->addStyleSheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css' ); 
				break;
			endswitch;
			switch($knacss_site):
				case 1: 
					$docs->addStyleSheetVersion($own_cdn.'/knacss/knacss.css' ); 
				break;
				case 2: 
					$docs->addStyleSheetVersion($own_cdn.'/knacss/knacss.min.css' ); 
				break;
				case 3: 
					$docs->addStyleSheet($proto_fi.'cdn.jsdelivr.net/knacss/4.4.0/knacss.css' ); 
				break;
			endswitch;
			switch($fondationzurb_site):
				case 1: 
					$docs->addStyleSheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css' ); 
					if($html4or5_config == 0): $docs->addScript('cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>'; endif;
				break;
			endswitch;
			switch($htmlkickstart_site):
				case 1: 
					$docs->addStyleSheetVersion($own_cdn.'/kickstart/kickstart.css' ); 
					if($html4or5_config == 0): $docs->addScriptVersion($own_cdn.'/kickstart/kickstart.js' );  else : echo "\n".'<script src="'.$own_cdn.'/kickstart/kickstart.js"></script>'; endif;
				break;
				case 2: 
					$docs->addStyleSheetVersion($own_cdn.'/kickstart/kickstart.min.css' ); 
					if($html4or5_config == 0): $docs->addScriptVersion($own_cdn.'/kickstart/kickstart.min.js' );  else : echo "\n".'<script src="'.$own_cdn.'/kickstart/kickstart.min.js"></script>'; endif;
				break;
			endswitch;
			switch($rotatorjs_site):
				case 1: 
					if($html4or5_config == 0): $docs->addScriptVersion($own_cdn.'/rotatorjs/rotator.js' );  else : echo "\n".'<script src="'.$own_cdn.'/rotatorjs/rotator.js"></script>'; endif;
				break;
				case 2: 
					if($html4or5_config == 0): $docs->addScriptVersion($own_cdn.'/rotatorjs/rotator.min.js' );  else : echo "\n".'<script src="'.$own_cdn.'/rotatorjs/rotator.min.js"></script>'; endif;
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
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>'; endif;
				break;
			endswitch;
			switch($angularjs_site):
				case 1: 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.8/angular.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.8/angular.min.js"></script>'; endif;
				break;
			endswitch;
			switch($bootstrap_site):
				case 1: 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>'; endif;
					$docs->addStyleSheet( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css' ); 
				break;
				case 2: 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>'; endif;
					$docs->addStyleSheet( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css' ); 
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
						$docs->addScript($proto_fi.'cdnjs.cloudflare.com/ajax/libs/metro/3.0.17/js/metro.min.js' );  
						$docs->addStyleSheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/metro/3.0.17/css/metro.min.css'); 
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/metro/3.0.17/js/metro.min.js"></script>'; 
						$docs->addStyleSheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/metro/3.0.17/css/metro.min.css'); 
					endif;
				break;
			endswitch; 
			switch($weathericons_site):
				case 1: 
					$docs->addStyleSheetVersion($own_cdn.'/weather-icons/weather-icons.css' );
				break;
				case 2: 
					$docs->addStyleSheetVersion($own_cdn.'/weather-icons/weather-icons.min.css' ); 
				break;
				case 3: 
					$docs->addStyleSheetVersion($own_cdn.'/weather-icons/weather-icons-wind.css' ); 
				break;
				case 4: 
					$docs->addStyleSheetVersion($own_cdn.'/weather-icons/weather-icons-wind.min.css' ); 
				break;
				case 5: 
					$docs->addStyleSheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons-wind.min.css' ); 
				break;
				case 6: 
					$docs->addStyleSheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css' ); 
				break;
			endswitch;
			switch($typicons_site):
				case 1: 
					$docs->addStyleSheetVersion($own_cdn.'/typicons/typicons.css' ); 
				break;
				case 2: 
					$docs->addStyleSheetVersion($own_cdn.'/typicons/typicons.min.css' ); 
				break;
				case 3: 
					$docs->addStyleSheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/typicons/2.0.8/typicons.min.css' ); 
				break;
			endswitch;
			switch($foundationicons_site):
				case 1: 
					$docs->addStyleSheetVersion($own_cdn.'/foundation-icons/foundation-icons.css' ); 
				break;
				case 2: 
					$docs->addStyleSheetVersion($own_cdn.'/foundation-icons/foundation-icons.min.css' ); 
				break;
				case 3: 
					$docs->addStyleSheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.min.css' ); 
				break;
				case 4: 
					$docs->addStyleSheet($proto_fi.'cdn.jsdelivr.net/foundation-icons/3.0/foundation-icons.min.css' ); 
				break;
			endswitch;
			switch($useiconic_site):
				case 1: 
					$docs->addStyleSheetVersion($own_cdn.'/useiconic/iconic-bootstrap.css' ); 
				break;
				case 2: 
					$docs->addStyleSheetVersion($own_cdn.'/useiconic/iconic-bootstrap.min.css' ); 
				break;
				case 3: 
					$docs->addStyleSheetVersion($own_cdn.'/useiconic/iconic-foundation.css' ); 
				break;
				case 4: 
					$docs->addStyleSheetVersion($own_cdn.'/useiconic/iconic-foundation.min.css' ); 
				break;
				case 5: 
					$docs->addStyleSheetVersion($own_cdn.'/useiconic/iconic-glyphs.css' ); 
				break;
				case 6: 
					$docs->addStyleSheetVersion($own_cdn.'/useiconic/iconic-glyphs.min.css' ); 
				break;
				case 7: 
					$docs->addStyleSheetVersion($own_cdn.'/useiconic/iconic-glyphs-legacy.css' ); 
				break;
				case 8: 
					$docs->addStyleSheetVersion($own_cdn.'/useiconic/iconic-glyphs-legacy.min.css' ); 
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
						$docs->addScript($proto_fi.'api.mapbox.com/mapbox.js/v3.1.1/mapbox.js' );  
						$docs->addStyleSheet($proto_fi.'api.mapbox.com/mapbox.js/v3.1.1/mapbox.css'); 
					else : 
						echo "\n".'<script src="'.$proto_fi.'api.mapbox.com/mapbox.js/v3.1.1/mapbox.js"></script>'; 
						$docs->addStyleSheet($proto_fi.'api.mapbox.com/mapbox.js/v3.1.1/mapbox.css'); 
					endif;
				break;
				case 2: 
					if($html4or5_config == 0): 
						$docs->addScript($proto_fi.'api.tiles.mapbox.com/mapbox-gl-js/v0.39.1/mapbox-gl.js' );  
						$docs->addStyleSheet($proto_fi.'api.tiles.mapbox.com/mapbox-gl-js/v0.39.1/mapbox-gl.css'); 
					else : 
						echo "\n".'<script src="'.$proto_fi.'api.tiles.mapbox.com/mapbox-gl-js/v0.39.1/mapbox-gl.js"></script>'; 
						$docs->addStyleSheet($proto_fi.'api.tiles.mapbox.com/mapbox-gl-js/v0.39.1/mapbox-gl.css'); 
					endif;
				break;
			endswitch;
			switch($popper_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScript($proto_fi.'cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/esm/popper.min.js' );  
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/esm/popper.min.js"></script>'; 
					endif;
				break;
			endswitch;
			
			/*****************[Effect]******************/

			switch($animate_site):
				case 1: 
						$docs->addStyleSheetVersion($own_cdn.'/effect/animate.css'); 
				break;
				case 2: 
						$docs->addStyleSheetVersion($own_cdn.'/effect/animate.min.css'); 
				break;
				case 3: 
						$docs->addStyleSheet($proto_fi.'cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css'); 
				break;
				case 4: 
						$docs->addStyleSheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'); 
				break;
			endswitch;
			switch($wowjs_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($own_cdn.'/effect/wow.js' );  
					else : 
						echo "\n".'<script src="'.$own_cdn.'/effect/wow.js"></script>'; 
					endif;
				break;
				case 2: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($own_cdn.'/effect/wow.min.js' );  
					else : 
						echo "\n".'<script src="'.$own_cdn.'/effect/wow.min.js"></script>'; 
					endif;
				break;
				case 3: 
					if($html4or5_config == 0): 
						$docs->addScript($proto_fi.'cdn.jsdelivr.net/wow/1.1.2/wow.min.js' );  
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdn.jsdelivr.net/wow/1.1.2/wow.min.js"></script>'; 
					endif;
				break;
				case 4: 
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
						$docs->addScript($proto_fi.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js' );
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>'; 
					endif;
						$docs->addStyleSheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css', 'text/css', 'screen'); 
				break;
			endswitch;
			switch($CountUPJs_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.3/angular-countUp.min.js' );
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.3/angular-countUp.min.js"></script>'; 
					endif;
				break;
				case 2: 
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
						$docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/jquery.parallax.min.js' );
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/jquery.parallax.min.js"></script>'; 
					endif;
				break;
				case 2: 
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
						$docs->addScript($proto_fi.'cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.5/js/smooth-scroll.min.js' ); 
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.5/js/smooth-scroll.min.js"></script>'; 
					endif;
				break;
			endswitch;			
			/*****************[Prerender and prefetch]******************/

			if($dnsprefetch_yoursite == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.JURI::base().'">'); endif;
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
					$docs->addCustomTag('<!--[if lt IE 9]>
						<script src="'.$proto_fi.'oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
						<script src="'.$proto_fi.'oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
					<![endif]-->');
				break;
				case 2: 
					$docs->addCustomTag('<!--[if lt IE 9]>
						<script src="'.$proto_fi.'cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
						<script src="'.$proto_fi.'cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
					<![endif]-->');
				break;
				case 3: 
					$docs->addCustomTag('<!--[if lt IE 9]>
						<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
						<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
					<![endif]-->');
				break;
				case 4: 
					$docs->addCustomTag('<!--[if lt IE 9]><script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->');
				break;
			endswitch;	
				
				
if($amp_start == 'yes'){ $docs->addCustomTag('<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript><script async src="'.$proto_fi.'cdn.ampproject.org/v0.js"></script>'); }
if($amp_youtube == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-youtube" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>'); }
if($amp_access == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-access" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-access-0.1.js"></script>'); }
if($amp_vine == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-vine" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-vine-0.1.js"></script>'); }
if($amp_accordion == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-accordion" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>'); }
if($amp_twitter == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-twitter" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-twitter-0.1.js"></script>'); }
if($amp_pinterest == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-pinterest" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-pinterest-0.1.js"></script>'); }
if($amp_instagram == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-instagram" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-instagram-0.1.js"></script>'); }
if($amp_soundcloud == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-soundcloud" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-soundcloud-0.1.js"></script>'); }
if($amp_usernotification == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-user-notification" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-user-notification-0.1.js"></script>'); }
if($amp_iframe == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-iframe" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>'); }
if($amp_facebook == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-facebook" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-facebook-0.1.js"></script>'); }
if($amp_vimeo == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-vimeo" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-vimeo-0.1.js"></script>'); }
if($amp_lightbox == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-lightbox" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>'); }
if($amp_mustache){ $docs->addCustomTag('<script async custom-template="amp-mustache" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-mustache-0.1.js"></script>'); }
if($amp_dailymotion == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-dailymotion" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-dailymotion-0.1.js"></script>'); }
if($amp_font == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-font" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-font-0.1.js"></script>'); }
if($amp_fittext == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-fit-text" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>'); }
if($amp_list == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-list" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-list-0.1.js"></script>'); }
if($amp_installserviceworker == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-install-serviceworker" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js"></script>'); }
if($amp_carousel == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-carousel" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>'); }
if($amp_imagelightbox == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-image-lightbox" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>'); }
if($amp_brightcove == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-brightcove" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-brightcove-0.1.js"></script>'); }
if($amp_audio == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-audio" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-audio-0.1.js"></script>'); }
if($amp_anim == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-anim" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-anim-0.1.js"></script>'); }
if($amp_analytics == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-analytics" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>'); }
if($amp_ad == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-ad" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-ad-0.1.js"></script>'); }
if($amp_embed == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-embed" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-embed-0.1.js"></script>'); }
if($amp_img == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-img" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-img-0.1.js"></script>'); }
if($amp_pixel == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-pixel" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-pixel-0.1.js"></script>'); }
if($amp_video == 'yes'){ $docs->addCustomTag('<script async custom-element="amp-video" src="'.$proto_fi.'cdn.ampproject.org/v0/amp-video-0.1.js"></script>'); }
	
?>
