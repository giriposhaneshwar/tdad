<?php

/**
 * @version     1.0.0
 * @package     com_nri_offerings
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Giri <egp.designs@gmail.com> - http://giri.com
 */
defined('_JEXEC') or die;

class Nri_offeringsFrontendHelper
{
	

	/**
	 * Get an instance of the named model
	 *
	 * @param string $name
	 *
	 * @return null|object
	 */
	public static function getModel($name)
	{
		$model = null;

		// If the file exists, let's
		if (file_exists(JPATH_SITE . '/components/com_nri_offerings/models/' . strtolower($name) . '.php'))
		{
			require_once JPATH_SITE . '/components/com_nri_offerings/models/' . strtolower($name) . '.php';
			$model = JModelLegacy::getInstance($name, 'Nri_offeringsModel');
		}

		return $model;
	}
}
