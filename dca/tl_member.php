<?php

/**
 * @package     ForcePassChange
 * @author      Basti Buck (http://www.bastibuck.de)
 * @license     LGPL
 * @copyright   Basti Buck, 2017
 */

namespace Bastibuck;

// Palettes
$GLOBALS['TL_DCA']['tl_member']['subpalettes']['login'] = str_replace (
  'username,password',
  'username,password,passChanged',
  $GLOBALS['TL_DCA']['tl_member']['subpalettes']['login']
);


// Fields
$GLOBALS['TL_DCA']['tl_member']['fields']['passChanged'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_member']['passChanged'],
  'exclude'                 => true,
  'inputType'               => 'checkbox',
  'eval'                    => array
  (
    'tl_class'=>'w50'
  ),
  'sql'                     => "char(1) NOT NULL default '0'"
);
