<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
$class = $item->anchor_css ? 'class="' . $item->anchor_css . '" ' : '';
$title = $item->anchor_title ? 'title="' . $item->anchor_title . '" ' : '';


	$linktype = $item->title;


$flink = $item->flink;
$flink = JFilterOutput::ampReplace(htmlspecialchars($flink));




switch ($item->browserNav) :
	default:
	case 0:
?><a href="javascript:void(0)" id="<?php echo $item->id."anch";?>" <?php echo $title; ?>><?php echo $linktype ?></a><?php
		break;
	case 1:
		// _blank
?><a href="javascript:void(0)" id="<?php echo $item->id."anch";?>" target="_blank" <?php echo $title; ?>><?php echo $linktype ?></a><?php
		break;
	case 2:
		// Use JavaScript "window.open"
		$options = 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,' . $params->get('window_open');
			?><a href="javascript:void(0)" id="<?php echo $item->id."anch";?>" onclick="window.open(this.href,'targetWindow','<?php echo $options;?>');return false;" <?php echo $title; ?>><?php echo $linktype ?></a><?php
		break;
endswitch;
