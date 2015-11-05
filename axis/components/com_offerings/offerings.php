<?php
/**
 * @version     1.0.0
 * @package     com_offerings
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Giri <egp.designs@gmail.com> - http://giri.com
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::register('OfferingsFrontendHelper', JPATH_COMPONENT . '/helpers/offerings.php');

// Execute the task.
$controller = JControllerLegacy::getInstance('Offerings');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
