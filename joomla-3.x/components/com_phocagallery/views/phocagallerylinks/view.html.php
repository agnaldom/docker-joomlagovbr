<?php
/* @package Joomla
 * @copyright Copyright (C) Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @extension Phoca Extension
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */
defined('_JEXEC') or die();
jimport( 'joomla.application.component.view' );
 
class phocaGalleryViewphocaGalleryLinks extends JViewLegacy
{
	function display($tpl = null) {
		
		$app	= JFactory::getApplication();
		
		//Frontend Changes
		$tUri = '';
		if (!$app->isAdmin()) {
			$tUri = JURI::base();
		}
		
		$document	= JFactory::getDocument();
		$uri		= JFactory::getURI();
		JHTML::stylesheet( 'media/com_phocagallery/css/administrator/phocagallery.css' );
		
		$eName	= $app->input->get('e_name', '', 'cmd');
		$eName	= preg_replace( '#[^A-Z0-9\-\_\[\]]#i', '', $eName );
		
		$tmpl['categories']		= $tUri.'index.php?option=com_phocagallery&amp;view=phocagallerylinkcats&amp;tmpl=component&amp;e_name='.$eName;
		//$tmpl['COM_PHOCAGALLERY_CATEGORY']		= 'index.php?option=com_phocagallery&amp;view=phocagallerylinkcat&amp;tmpl=component&amp;e_name='.$eName;
		$tmpl['images']			= $tUri.'index.php?option=com_phocagallery&amp;view=phocagallerylinkimg&amp;type=2&amp;tmpl=component&amp;e_name='.$eName;
		$tmpl['image']			= $tUri.'index.php?option=com_phocagallery&amp;view=phocagallerylinkimg&amp;type=1&amp;tmpl=component&amp;e_name='.$eName;
		$tmpl['switchimage']	= $tUri.'index.php?option=com_phocagallery&amp;view=phocagallerylinkimg&amp;type=3&amp;tmpl=component&amp;e_name='.$eName;
		$tmpl['slideshow']		= $tUri.'index.php?option=com_phocagallery&amp;view=phocagallerylinkimg&amp;type=4&amp;tmpl=component&amp;e_name='.$eName;
		
		$this->assignRef('tmpl',	$tmpl);
		parent::display($tpl);
	}
}
?>