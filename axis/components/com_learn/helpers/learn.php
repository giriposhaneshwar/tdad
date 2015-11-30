<?php

/**
 * @version    CVS: 1.0.0
 * @package    Com_Learn
 * @author     Giri <egp.designs@gmail.com>
 * @copyright  Copyright (C) 2015. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/**
 * Class LearnFrontendHelper
 *
 * @since  1.6
 */
class LearnFrontendHelper
{
	/**
	 * Get an instance of the named model
	 *
	 * @param   string  $name  Model name
	 *
	 * @return null|object
	 */
	public static function getModel($name)
	{
		$model = null;

		// If the file exists, let's
		if (file_exists(JPATH_SITE . '/components/com_learn/models/' . strtolower($name) . '.php'))
		{
			require_once JPATH_SITE . '/components/com_learn/models/' . strtolower($name) . '.php';
			$model = JModelLegacy::getInstance($name, 'LearnModel');
		}

		return $model;
	}
}
