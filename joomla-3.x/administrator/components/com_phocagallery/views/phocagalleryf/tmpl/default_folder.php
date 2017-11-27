<?php 
/*
 * @package Joomla
 * @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 *
 * @component Phoca Gallery
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */
defined('_JEXEC') or die('Restricted access'); ?>

<div class="phocagallery-box-file-i">
	<center>
		<div class="phocagallery-box-file-first-i">
			<div class="phocagallery-box-file-second">
				<div class="phocagallery-box-file-third">
					<center>
					<a href="index.php?option=com_phocagallery&amp;view=phocagalleryf&amp;tmpl=component&amp;folder=<?php echo $this->_tmp_folder->path_with_name_relative_no; ?>&amp;field=<?php echo $this->field; ?>"><?php echo JHTML::_( 'image', 'media/com_phocagallery/images/administrator/icon-folder-images.gif', ''); ?></a>
					</center>
				</div>
			</div>
		</div>
	</center>
	
	<div class="name"><a href="index.php?option=com_phocagallery&amp;view=phocagalleryf&amp;tmpl=component&amp;folder=<?php echo $this->_tmp_folder->path_with_name_relative_no; ?>&amp;field=<?php echo $this->field; ?>"><span><?php echo PhocagalleryText::WordDelete($this->_tmp_folder->name, 15); ?></span></a></div>
		<div class="detail" style="text-align:right">
			<a href="#" onclick="if (window.parent) window.parent.<?php echo $this->fce; ?>('<?php echo $this->_tmp_folder->path_with_name_relative_no; ?>');"><?php echo JHTML::_( 'image', 'media/com_phocagallery/images/administrator/icon-insert.gif', JText::_('COM_PHOCAGALLERY_INSERT_FOLDER'), array('title' => JText::_('COM_PHOCAGALLERY_INSERT_FOLDER'))); ?></a>
		</div>
	<div style="clear:both"></div>
</div>
