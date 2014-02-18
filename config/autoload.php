<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Screencast
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'ModuleCeTile' => 'system/modules/bhb-ce_tile/modules/ModuleCeTile.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_bhb_ce_tile' => 'system/modules/bhb-ce_tile/templates',
));
