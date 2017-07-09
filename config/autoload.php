<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Bastibuck',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'Bastibuck\ModuleForcePassChange' => 'system/modules/force_pass_change/modules/ModuleForcePassChange.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_force_passchange' => 'system/modules/force_pass_change/templates',
));
