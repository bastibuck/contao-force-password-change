<?php

/**
 * @package     ForcePassChange
 * @author      Basti Buck (http://www.bastibuck.de)
 * @license     LGPL
 * @copyright   Basti Buck, 2017
 */

// FE Modules
$GLOBALS['FE_MOD']['user']['force_pass_change'] = 'ModuleForcePassChange';

// Hooks
$GLOBALS['TL_HOOKS']['generatePage'][] = array('ForcePassChangeHooks', 'memberChangePass');
