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
	'member_force_pass_change' => 'system/modules/force_pass_change/templates',
));
