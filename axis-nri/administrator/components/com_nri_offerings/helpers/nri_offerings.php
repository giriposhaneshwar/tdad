<?php

/**
 * @version     1.0.0
 * @package     com_nri_offerings
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Giri <egp.designs@gmail.com> - http://giri.com
 */
// No direct access
defined('_JEXEC') or die;

/**
 * Nri_offerings helper.
 */
class Nri_offeringsHelper {

    /**
     * Configure the Linkbar.
     */
    public static function addSubmenu($vName = '') {
        		JHtmlSidebar::addEntry(
			JText::_('COM_NRI_OFFERINGS_TITLE_OFFERINGSOVERV1EWS'),
			'index.php?option=com_nri_offerings&view=offeringsoverv1ews',
			$vName == 'offeringsoverv1ews'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_NRI_OFFERINGS_TITLE_OFFERINGSPRODUCTSS'),
			'index.php?option=com_nri_offerings&view=offeringsproductss',
			$vName == 'offeringsproductss'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_NRI_OFFERINGS_TITLE_OFFERINGSPRICINGS'),
			'index.php?option=com_nri_offerings&view=offeringspricings',
			$vName == 'offeringspricings'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_NRI_OFFERINGS_TITLE_OFFERINGSPLATFORMSS'),
			'index.php?option=com_nri_offerings&view=offeringsplatformss',
			$vName == 'offeringsplatformss'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_NRI_OFFERINGS_TITLE_OFFERINGSACCOUNTSS'),
			'index.php?option=com_nri_offerings&view=offeringsaccountss',
			$vName == 'offeringsaccountss'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_NRI_OFFERINGS_TITLE_OFFERINGSVALUEADDEDSERVICESS'),
			'index.php?option=com_nri_offerings&view=offeringsvalueaddedservicess',
			$vName == 'offeringsvalueaddedservicess'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_NRI_OFFERINGS_TITLE_PLATFORMSMOBILEAPPS'),
			'index.php?option=com_nri_offerings&view=platformsmobileapps',
			$vName == 'platformsmobileapps'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_NRI_OFFERINGS_TITLE_PLATFORMSPORTALS'),
			'index.php?option=com_nri_offerings&view=platformsportals',
			$vName == 'platformsportals'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_NRI_OFFERINGS_TITLE_PLATFORMSTRADES'),
			'index.php?option=com_nri_offerings&view=platformstrades',
			$vName == 'platformstrades'
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

        $assetName = 'com_nri_offerings';

        $actions = array(
            'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete'
        );

        foreach ($actions as $action) {
            $result->set($action, $user->authorise($action, $assetName));
        }

        return $result;
    }


}
