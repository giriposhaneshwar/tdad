<?php
/**
 * @version     1.0.0
 * @package     com_offerings
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Giri <egp.designs@gmail.com> - http://giri.com
 */

// No direct access.
defined('_JEXEC') or die;

require_once JPATH_COMPONENT.'/controller.php';

/**
 * Offeringspricings list controller class.
 */
class OfferingsControllerOfferingspricings extends OfferingsController
{
	/**
	 * Proxy for getModel.
	 * @since	1.6
	 */
	public function &getModel($name = 'Offeringspricings', $prefix = 'OfferingsModel', $config = array())
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}
}