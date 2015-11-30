<?php

/**
 * @version    CVS: 1.0.0
 * @package    Com_Learn
 * @author     Giri <egp.designs@gmail.com>
 * @copyright  Copyright (C) 2015. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die;

/**
 * Learn helper.
 *
 * @since  1.6
 */
class LearnHelper
{
	/**
	 * Configure the Linkbar.
	 *
	 * @param   string  $vName  string
	 *
	 * @return void
	 */
	public static function addSubmenu($vName = '')
	{
				JHtmlSidebar::addEntry(
			JText::_('COM_LEARN_TITLE_OVERV1EWS'),
			'index.php?option=com_learn&view=overv1ews',
			$vName == 'overv1ews'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_LEARN_TITLE_COURSESS'),
			'index.php?option=com_learn&view=coursess',
			$vName == 'coursess'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_LEARN_TITLE_DEMOSS'),
			'index.php?option=com_learn&view=demoss',
			$vName == 'demoss'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_LEARN_TITLE_ECLASSROOMS'),
			'index.php?option=com_learn&view=eclassrooms',
			$vName == 'eclassrooms'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_LEARN_TITLE_DIRECTSPEAKS'),
			'index.php?option=com_learn&view=directspeaks',
			$vName == 'directspeaks'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_LEARN_TITLE_GOODREADSS'),
			'index.php?option=com_learn&view=goodreadss',
			$vName == 'goodreadss'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_LEARN_TITLE_COURSE_VS'),
			'index.php?option=com_learn&view=course_vs',
			$vName == 'course_vs'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_LEARN_TITLE_QUIZ_VS'),
			'index.php?option=com_learn&view=quiz_vs',
			$vName == 'quiz_vs'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_LEARN_TITLE_DEMOS_VS'),
			'index.php?option=com_learn&view=demos_vs',
			$vName == 'demos_vs'
		);
	}

	/**
	 * Gets a list of the actions that can be performed.
	 *
	 * @return    JObject
	 *
	 * @since    1.6
	 */
	public static function getActions()
	{
		$user   = JFactory::getUser();
		$result = new JObject;

		$assetName = 'com_learn';

		$actions = array(
			'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete'
		);

		foreach ($actions as $action)
		{
			$result->set($action, $user->authorise($action, $assetName));
		}

		return $result;
	}
}
