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

/**
 * Insights helper.
 */
class InsightsHelper {

    /**
     * Configure the Linkbar.
     */
    public static function addSubmenu($vName = '') {
        		JHtmlSidebar::addEntry(
			JText::_('COM_INSIGHTS_TITLE_RESEARCHCALLSOVERV1EWINDEXS'),
			'index.php?option=com_insights&view=researchcallsoverv1ewindexs',
			$vName == 'researchcallsoverv1ewindexs'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_INSIGHTS_TITLE_RESEARCHCALLSINVESTMENTIDEAS'),
			'index.php?option=com_insights&view=researchcallsinvestmentideas',
			$vName == 'researchcallsinvestmentideas'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_INSIGHTS_TITLE_RESEARCHCALLSOVERV1EWS'),
			'index.php?option=com_insights&view=researchcallsoverv1ews',
			$vName == 'researchcallsoverv1ews'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_INSIGHTS_TITLE_RESEARCHTRADINGIDEASS'),
			'index.php?option=com_insights&view=researchtradingideass',
			$vName == 'researchtradingideass'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_INSIGHTS_TITLE_RESEARCHCALLSDERIVATIVES'),
			'index.php?option=com_insights&view=researchcallsderivatives',
			$vName == 'researchcallsderivatives'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_INSIGHTS_TITLE_RESEARCHCALLSPREMIUMIDEASS'),
			'index.php?option=com_insights&view=researchcallspremiumideass',
			$vName == 'researchcallspremiumideass'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_INSIGHTS_TITLE_RESEARCHCALLSMUTUALFUNDIDEASS'),
			'index.php?option=com_insights&view=researchcallsmutualfundideass',
			$vName == 'researchcallsmutualfundideass'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_INSIGHTS_TITLE_RESEARCHCALLSSIPIDEASS'),
			'index.php?option=com_insights&view=researchcallssipideass',
			$vName == 'researchcallssipideass'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_INSIGHTS_TITLE_RESEARCHREPORTSOVERV1EWS'),
			'index.php?option=com_insights&view=researchreportsoverv1ews',
			$vName == 'researchreportsoverv1ews'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_INSIGHTS_TITLE_RESEARCHREPORTSFUNDAMENTALREPORTSS'),
			'index.php?option=com_insights&view=researchreportsfundamentalreportss',
			$vName == 'researchreportsfundamentalreportss'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_INSIGHTS_TITLE_RESEARCHREPORTSTECHNICALREPORTSS'),
			'index.php?option=com_insights&view=researchreportstechnicalreportss',
			$vName == 'researchreportstechnicalreportss'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_INSIGHTS_TITLE_RESEARCHREPORTSMUTUALFUNDREPORTSS'),
			'index.php?option=com_insights&view=researchreportsmutualfundreportss',
			$vName == 'researchreportsmutualfundreportss'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_INSIGHTS_TITLE_RESEARCHREPORTSSECTORECONOMYOTHERSS'),
			'index.php?option=com_insights&view=researchreportssectoreconomyotherss',
			$vName == 'researchreportssectoreconomyotherss'
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

        $assetName = 'com_insights';

        $actions = array(
            'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete'
        );

        foreach ($actions as $action) {
            $result->set($action, $user->authorise($action, $assetName));
        }

        return $result;
    }


}
