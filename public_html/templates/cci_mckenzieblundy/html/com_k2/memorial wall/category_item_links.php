<?php
/**
 * @version		$Id: category_item_links.php 478 2010-06-16 16:11:42Z joomlaworks $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.gr
 * @copyright	Copyright (c) 2006 - 2010 JoomlaWorks, a business unit of Nuevvo Webware Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// Define default image size (do not change)
$image = 'image'.$this->item->params->get($this->item->itemGroup.'ImgSize');

?>

<!-- Start K2 Item Layout (links) -->
<li>
	<?php if ($this->item->params->get('catItemTitleLinked')): ?>
	<a href="<?php echo $this->item->link; ?>">
		<?php echo $this->item->title; ?>
	</a>
	<?php else: ?>
	<?php echo $this->item->title; ?>
	<?php endif; ?>	
</li>
<!-- End K2 Item Layout (links) -->
