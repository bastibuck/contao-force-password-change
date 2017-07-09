<?php

/**
 * @package     ForcePassChange
 * @author      Basti Buck (http://www.bastibuck.de)
 * @license     LGPL
 * @copyright   Basti Buck, 2017
 */

namespace Bastibuck;

// Palettes
$GLOBALS['TL_DCA']['tl_module']['palettes']['force_pass_change'] = str_replace (
  ';{redirect_legend}',
  ';{pass_change_legend:hide},pass_change_text;{redirect_legend}',
  $GLOBALS['TL_DCA']['tl_module']['palettes']['changePassword'] // get original changePassword palettes
);

// Fields
$GLOBALS['TL_DCA']['tl_module']['fields']['pass_change_text'] = array
(
  'label'             => &$GLOBALS['TL_LANG']['tl_module']['pass_change_text'],
  'exclude'           => true,
  'search'            => true,
  'inputType'         => 'textarea',
  'eval'              => array
  (
    'rte'       => 'tinyMCE',
    'tl_class'  => 'clr'
  ),
  'sql'               => "text NULL"
);
