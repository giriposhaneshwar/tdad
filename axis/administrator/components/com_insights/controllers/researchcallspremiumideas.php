<?php
/**
 * @version     1.0.0
 * @package     com_insights
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      venkatesh <venkat_vend@thinkdesign.in> - http://thinkdesign.in
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Researchcallspremiumideas controller class.
 */
class InsightsControllerResearchcallspremiumideas extends JControllerForm
{

    function __construct() {
        $this->view_list = 'researchcallspremiumideass';
        parent::__construct();
    }

}