<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_contact_info
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the latest functions only once
require_once dirname(__FILE__) . '/helper.php';

$contact = $params->get('contact');
$dataContact = ModContactsInfoHelper::getData($contact, 'com_contact', '#__contact_details', 'id');

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_contact_info', $params->get('layout', 'default'));
