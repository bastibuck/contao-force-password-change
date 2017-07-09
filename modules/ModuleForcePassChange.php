<?php

/**
 * @package     ForcePassChange
 * @author      Basti Buck (http://www.bastibuck.de)
 * @license     LGPL
 * @copyright   Basti Buck, 2017
 */

namespace Bastibuck;

class ModuleForcePassChange extends \ModuleChangePassword {

  protected $strTemplate = 'mod_force_passchange';


  /**
   * Display a wildcard in the back end
   */
  public function generate()
  {
    if (TL_MODE == 'BE')
    {
      $objTemplate = new \BackendTemplate('be_wildcard');

      $objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['force_pass_change'][0]). ' ###';
      $objTemplate->title = $this->headline;
      $objTemplate->id = $this->id;
      $objTemplate->link = $this->name;
      $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

      return $objTemplate->parse();
    }

    return parent::generate();
  }

  /**
   * Generate the module
   */
  public function compile() {

    // get additional text field content
    $this->Template->pass_change_text = $this->pass_change_text;

    // return original function
    parent::compile();
  }
}
