<?php
/**
 * @version     1.0.0
 * @package     com_learn
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      E Giri Poshaneshwar <giri.eshwardiamond@gmail.com> - http://
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

// Execute the task.
$controller	= JControllerLegacy::getInstance('Learn');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();