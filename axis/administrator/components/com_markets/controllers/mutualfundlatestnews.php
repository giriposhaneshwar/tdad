<?php
/**
 * @version     1.0.0
 * @package     com_markets
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      venkatesh <venkat_vend@thinkdesign.in> - http://thinkdesign.in
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Mutualfundlatestnews controller class.
 */
class MarketsControllerMutualfundlatestnews extends JControllerForm
{

    function __construct() {
        $this->view_list = 'mutualfundlatestnewss';
        parent::__construct();
    }

}