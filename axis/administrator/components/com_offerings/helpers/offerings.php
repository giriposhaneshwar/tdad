<?php

/**
 * @version     1.0.0
 * @package     com_offerings
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Giri <egp.designs@gmail.com> - http://giri.com
 */
// No direct access
defined('_JEXEC') or die;

/**
 * Offerings helper.
 */
class OfferingsHelper {

    /**
     * Configure the Linkbar.
     */
    public static function addSubmenu($vName = '') {
        		JHtmlSidebar::addEntry(
			JText::_('COM_OFFERINGS_TITLE_OVERV1EWS'),
			'index.php?option=com_offerings&view=overv1ews',
			$vName == 'overv1ews'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_OFFERINGS_TITLE_PRODUCTSS'),
			'index.php?option=com_offerings&view=productss',
			$vName == 'productss'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_OFFERINGS_TITLE_PLATFORMSS'),
			'index.php?option=com_offerings&view=platformss',
			$vName == 'platformss'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_OFFERINGS_TITLE_PRICINGS'),
			'index.php?option=com_offerings&view=pricings',
			$vName == 'pricings'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_OFFERINGS_TITLE_ACCOUNTSS'),
			'index.php?option=com_offerings&view=accountss',
			$vName == 'accountss'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_OFFERINGS_TITLE_VALUEADDEDSERVICESS'),
			'index.php?option=com_offerings&view=valueaddedservicess',
			$vName == 'valueaddedservicess'
		);

    }

    /**
     * Gets a list of the actions that can be performed.
     *
     * @return	JObject
     * @since	1.6
     */
    public static function getActions() {
        $user = JFactory::getUser();
        $result = new JObject;

        $assetName = 'com_offerings';

        $actions = array(
            'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete'
        );

        foreach ($actions as $action) {
            $result->set($action, $user->authorise($action, $assetName));
        }

        return $result;
    }


}
