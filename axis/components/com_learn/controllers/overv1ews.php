<?php
/**
 * @version     1.0.0
 * @package     com_learn
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      E Giri Poshaneshwar <giri.eshwardiamond@gmail.com> - http://
 */

// No direct access.
defined('_JEXEC') or die;

require_once JPATH_COMPONENT.'/controller.php';

/**
 * Overv1ews list controller class.
 */
class LearnControllerOverv1ews extends LearnController
{
	/**
	 * Proxy for getModel.
	 * @since	1.6
	 */
	public function &getModel($name = 'Overv1ews', $prefix = 'LearnModel', $config = array())
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}
}