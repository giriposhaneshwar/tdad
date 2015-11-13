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

/**
 * Markets helper.
 */
class MarketsHelper {

    /**
     * Configure the Linkbar.
     */
    public static function addSubmenu($vName = '') {
        		JHtmlSidebar::addEntry(
			JText::_('COM_MARKETS_TITLE_SNAPSHOTS'),
			'index.php?option=com_markets&view=snapshots',
			$vName == 'snapshots'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_MARKETS_TITLE_EQUITYMARKETSTODAYS'),
			'index.php?option=com_markets&view=equitymarketstodays',
			$vName == 'equitymarketstodays'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_MARKETS_TITLE_EQUITYTOPPERFORMER'),
			'index.php?option=com_markets&view=equitytopperformer',
			$vName == 'equitytopperformer'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_MARKETS_TITLE_EQUITYLATESTNEWSS'),
			'index.php?option=com_markets&view=equitylatestnewss',
			$vName == 'equitylatestnewss'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_MARKETS_TITLE_EQUITYMARKETSTATSS'),
			'index.php?option=com_markets&view=equitymarketstatss',
			$vName == 'equitymarketstatss'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_MARKETS_TITLE_DERIVATIVESMARKETSTODAYS'),
			'index.php?option=com_markets&view=derivativesmarketstodays',
			$vName == 'derivativesmarketstodays'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_MARKETS_TITLE_DERIVATIVESMARKETSTATSS'),
			'index.php?option=com_markets&view=derivativesmarketstatss',
			$vName == 'derivativesmarketstatss'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_MARKETS_TITLE_MUTUALFUNDOVERV1EWS'),
			'index.php?option=com_markets&view=mutualfundoverv1ews',
			$vName == 'mutualfundoverv1ews'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_MARKETS_TITLE_MUTUALFUNDLATESTNEWSS'),
			'index.php?option=com_markets&view=mutualfundlatestnewss',
			$vName == 'mutualfundlatestnewss'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_MARKETS_TITLE_MUTUALFUNDMARKETSTATSS'),
			'index.php?option=com_markets&view=mutualfundmarketstatss',
			$vName == 'mutualfundmarketstatss'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_MARKETS_TITLE_INDICESSECTORSS'),
			'index.php?option=com_markets&view=indicessectorss',
			$vName == 'indicessectorss'
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

        $assetName = 'com_markets';

        $actions = array(
            'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete'
        );

        foreach ($actions as $action) {
            $result->set($action, $user->authorise($action, $assetName));
        }

        return $result;
    }


}
