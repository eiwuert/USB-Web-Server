<?php
/*
+ ----------------------------------------------------------------------------------------------+
|     e107 website system  : http://e107.org
|     Steve Dunstan 2001-2002 : jalist@e107.org
|     Released under the terms and conditions of the GNU General Public License (http://gnu.org).
|
|     $Source: /cvs_backup/e107_0.7/e107_plugins/trackback/e_meta.php,v $
|     $Revision: 11346 $
|     $Date: 2010-02-17 13:56:14 -0500 (Wed, 17 Feb 2010) $
|     $Author: secretr $
+-----------------------------------------------------------------------------------------------+
*/
if (!defined('e107_INIT')) { exit; }

if(isset($pref['trackbackEnabled'])){
	echo "<link rel='pingback' href='".SITEURLBASE.e_PLUGIN_ABS."trackback/trackback.php' />";
}

?>