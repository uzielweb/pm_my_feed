<?php
/**
 * @copyright	Copyright © 2016 - All rights reserved.
 * @license		GNU General Public License v2.0
 * @generator	http://xdsoft/joomla-module-generator/
 */
defined('_JEXEC') or die;

$doc = JFactory::getDocument();

// Include assets
$doc->addStyleSheet(JURI::root()."modules/mod_pm_my_feed/assets/css/style.css");
$doc->addScript(JURI::root()."modules/mod_pm_my_feed/assets/js/script.js");


/**
	$db = JFactory::getDBO();
	$db->setQuery("SELECT * FROM #__mod_pm_my_feed where del=0 and module_id=".$module->id);
	$objects = $db->loadAssocList();
*/
require JModuleHelper::getLayoutPath('mod_pm_my_feed', $params->get('layout', 'default'));