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

require_once JPATH_COMPONENT . '/controller.php';

/**
 * Offerings_overv1ew controller class.
 */
class OfferingsControllerOfferings_overv1ew extends OfferingsController {

    /**
     * Method to check out an item for editing and redirect to the edit form.
     *
     * @since	1.6
     */
    public function edit() {
        $app = JFactory::getApplication();

        // Get the previous edit id (if any) and the current edit id.
        $previousId = (int) $app->getUserState('com_offerings.edit.offerings_overv1ew.id');
        $editId = $app->input->getInt('id', null, 'array');

        // Set the user id for the user to edit in the session.
        $app->setUserState('com_offerings.edit.offerings_overv1ew.id', $editId);

        // Get the model.
        $model = $this->getModel('Offerings_overv1ew', 'OfferingsModel');

        // Check out the item
        if ($editId) {
            $model->checkout($editId);
        }

        // Check in the previous user.
        if ($previousId && $previousId !== $editId) {
            $model->checkin($previousId);
        }

        // Redirect to the edit screen.
        $this->setRedirect(JRoute::_('index.php?option=com_offerings&view=offerings_overv1ewform&layout=edit', false));
    }

    /**
     * Method to save a user's profile data.
     *
     * @return	void
     * @since	1.6
     */
    public function publish() {
        // Initialise variables.
        $app = JFactory::getApplication();

        //Checking if the user can remove object
        $user = JFactory::getUser();
        if ($user->authorise('core.edit', 'com_offerings') || $user->authorise('core.edit.state', 'com_offerings')) {
            $model = $this->getModel('Offerings_overv1ew', 'OfferingsModel');

            // Get the user data.
            $id = $app->input->getInt('id');
            $state = $app->input->getInt('state');

            // Attempt to save the data.
            $return = $model->publish($id, $state);

            // Check for errors.
            if ($return === false) {
                $this->setMessage(JText::sprintf('Save failed: %s', $model->getError()), 'warning');
            }

            // Clear the profile id from the session.
            $app->setUserState('com_offerings.edit.offerings_overv1ew.id', null);

            // Flush the data from the session.
            $app->setUserState('com_offerings.edit.offerings_overv1ew.data', null);

            // Redirect to the list screen.
            $this->setMessage(JText::_('COM_OFFERINGS_ITEM_SAVED_SUCCESSFULLY'));
            $menu = & JSite::getMenu();
            $item = $menu->getActive();
            if (!$item) {
                // If there isn't any menu item active, redirect to list view
                $this->setRedirect(JRoute::_('index.php?option=com_offerings&view=offeringsoverv1ews', false));
            } else {
                $this->setRedirect(JRoute::_($item->link . $menuitemid, false));
            }
        } else {
            throw new Exception(500);
        }
    }

    public function remove() {

        // Initialise variables.
        $app = JFactory::getApplication();

        //Checking if the user can remove object
        $user = JFactory::getUser();
        if ($user->authorise('core.delete', 'com_offerings')) {
            $model = $this->getModel('Offerings_overv1ew', 'OfferingsModel');

            // Get the user data.
            $id = $app->input->getInt('id', 0);

            // Attempt to save the data.
            $return = $model->delete($id);


            // Check for errors.
            if ($return === false) {
                $this->setMessage(JText::sprintf('Delete failed', $model->getError()), 'warning');
            } else {
                // Check in the profile.
                if ($return) {
                    $model->checkin($return);
                }

                // Clear the profile id from the session.
                $app->setUserState('com_offerings.edit.offerings_overv1ew.id', null);

                // Flush the data from the session.
                $app->setUserState('com_offerings.edit.offerings_overv1ew.data', null);

                $this->setMessage(JText::_('COM_OFFERINGS_ITEM_DELETED_SUCCESSFULLY'));
            }

            // Redirect to the list screen.
            $menu = & JSite::getMenu();
            $item = $menu->getActive();
            $this->setRedirect(JRoute::_($item->link, false));
        } else {
            throw new Exception(500);
        }
    }

}