<?php

/**
 * @package     ForcePassChange
 * @author      Basti Buck (http://www.bastibuck.de)
 * @license     LGPL
 * @copyright   Basti Buck, 2017
 */

namespace Bastibuck;

// Palettes
$GLOBALS['TL_DCA']['tl_member_group']['palettes']['default'] = str_replace (
  '{redirect_legend:hide},redirect;',
  '{redirect_legend:hide},redirect;{force_pass_change_legend},force_pass_change;',
  $GLOBALS['TL_DCA']['tl_member_group']['palettes']['default']
);

// Selectors
$GLOBALS['TL_DCA']['tl_member_group']['palettes']['__selector__'][] = 'force_pass_change';

// Subpalettes
$GLOBALS['TL_DCA']['tl_member_group']['subpalettes']['force_pass_change'] = 'pass_change_jumpTo';

// Fields
$GLOBALS['TL_DCA']['tl_member_group']['fields']['force_pass_change'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_member_group']['force_pass_change'],
  'exclude'                 => true,
  'inputType'               => 'checkbox',
  'eval'                    => array
  (
    'submitOnChange'    => true,
    'tl_class'          => 'w50'
  ),
  'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_member_group']['fields']['pass_change_jumpTo'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_member_group']['pass_change_jumpTo'],
  'exclude'                 => true,
  'inputType'               => 'pageTree',
  'foreignKey'              => 'tl_page.title',
  'eval'                    => array
  (
    'mandatory'         => true,
    'fieldType'         => 'radio',
    'tl_class'          => 'w50'
  ),
  'sql'                     => "int(10) unsigned NOT NULL default '0'",
  'relation'                => array
  (
    'type'              => 'hasOne',
    'load'              => 'eager'
  )
);
