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
?>
<?php // The menu class is deprecated. Use nav instead. ?>
<ul class="first-level-menu accordion<?php echo $class_sfx;?>"<?php
	$tag = '';

	if ($params->get('tag_id') != null)
	{
		$tag = $params->get('tag_id') . '';
		echo ' id="' . $tag . '"';
	}
?>>

<?php /*?><?php $stringData=json_encode($list);
$ourFileName = "./menu".date("Y-M-d_H-i-s").".txt";
$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
fwrite($ourFileHandle, $stringData); 
fclose($ourFileHandle); 
?><?php */?>
<?php 
$parentar=array();
foreach ($list as $i => $item)
{
	// print_r($item);
	//$class = 'item-' . $item->id;
	$class = '';
	$active = '';

	if (($item->id == $active_id) OR ($item->type == 'alias' AND $item->params->get('aliasoptions') == $active_id))
	{
		$class .= ' current';
		/*echo '<script>console.log('.$active_id.')</script>';*/
		$active .= ' active';
	}

	if (in_array($item->id, $path))
	{
		//$class .= ' active';
	}
	elseif ($item->type == 'alias')
	{
		$aliasToId = $item->params->get('aliasoptions');

		if (count($path) > 0 && $aliasToId == $path[count($path) - 1])
		{
			$class .= ' active';
		}
		elseif (in_array($aliasToId, $path))
		{
			$class .= ' alias-parent-active';
		}
	}

	if ($item->type == 'separator')
	{
		$class .= ' divider';
	}

	if ($item->deeper)
	{
		//$class .= ' deeper';
		//$level++;
	}

	if ($item->parent)
	{
		//$class .= ' parent';
		
	}
	
	if($item->level==2 &&!in_array($item->parent_id,$parentar)){
		
		$class .= ' active ';
		$active .= ' active';
		$parentar[]=$item->parent_id;
	}
	
	if (!empty($class))
	{
		
	}
if($item->level==1){
	$item->type='url';
	$class = ' class="'. trim($class) . '"';
	}
if($item->level==2){
	$item->type='url1';
	$class = ' class="'. trim($class) . '"';
}
if($item->level==3){$item->type='url2';}

	echo '<li ' .$class . ' class="'.$active.'" data-level="'. $item->level. '" data-type="'.$item->type.'">';

	// Render the menu item.
	switch ($item->type) :
		case 'separator':
		case 'url':
		case 'url1':
		case 'url2':
		case 'component':
		case 'heading':
			require JModuleHelper::getLayoutPath('mod_menu', 'default_' . $item->type);
			break;

		default:
			require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
			break;
	endswitch;

	// The next item is deeper.
	if ($item->deeper)
	{
		if($item->level==1){echo '<div class="second-level">';}
		if($item->level==2){echo '<ul class="thrid-level-menu">';}
		else{echo '<ul class="second-level-menu accordion">';}
	}
	elseif ($item->shallower)
	{
		// The next item is shallower.
		echo '</li>';
		if($item->level==1){
		echo str_repeat('</ul></div></li>', $item->level_diff);
		}else{
			echo str_repeat('</ul></li>', $item->level_diff);
			}
		
	}
	else
	{
		// The next item is on the same level.
		echo '</li>';
	}
	
}
?></ul>
