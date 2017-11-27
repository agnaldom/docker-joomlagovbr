<?php
/*
 * @package		Joomla.Framework
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 *
 * @component Phoca Component
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License version 2 or later;
 */
defined('_JEXEC') or die();
jimport( 'joomla.application.component.view' );
 
class PhocaGalleryCpViewPhocaGalleryRaImg extends JViewLegacy
{
	protected $items;
	protected $pagination;
	protected $state;
	

	function display($tpl = null) {
		
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');
		$this->state		= $this->get('State');

		JHTML::stylesheet('media/com_phocagallery/css/administrator/phocagallery.css' );
		
		// Check for errors.
		if (count($errors = $this->get('Errors'))) {
			throw new Exception(implode("\n", $errors), 500);
			return false;
		}
		
		$this->addToolbar();
		parent::display($tpl);
		
	}
		

	function addToolbar() {
	
		require_once JPATH_COMPONENT.'/helpers/phocagalleryraimg.php';
	
		$state	= $this->get('State');
		$canDo	= PhocaGalleryRaImgHelper::getActions($state->get('filter.category_id'));
	
		JToolBarHelper::title( JText::_( 'COM_PHOCAGALLERY_IMAGE_RATING' ), 'star' );
		
		// This button is unnecessary but it is displayed because Joomla! design bug
		/*$bar = JToolBar::getInstance( 'toolbar' );
		$dhtml = '<a href="index.php?option=com_phocagallery" class="btn btn-small"><i class="icon-home-2" title="'.JText::_('COM_PHOCAGALLERY_CONTROL_PANEL').'"></i> '.JText::_('COM_PHOCAGALLERY_CONTROL_PANEL').'</a>';
		$bar->appendButton('Custom', $dhtml);*/
		
		if ($canDo->get('core.delete')) {
			JToolBarHelper::deleteList(  JText::_( 'COM_PHOCAGALLERY_WARNING_DELETE_ITEMS' ), 'phocagalleryraimg.delete', 'COM_PHOCAGALLERY_DELETE');
		}
		JToolBarHelper::divider();
		JToolBarHelper::help( 'screen.phocagallery', true );
	}
	
	protected function getSortFields() {
		return array(
			'category_title' => JText::_('COM_PHOCAGALLERY_CATEGORY'),
			'image_title' 	=> JText::_('COM_PHOCAGALLERY_IMAGE'),
			'ua.username' 	=> JText::_('COM_PHOCAGALLERY_USER'),
			'a.rating' 		=> JText::_('COM_PHOCAGALLERY_RATING'),
			'a.id' 			=> JText::_('JGRID_HEADING_ID')
		);
	}
}
?>