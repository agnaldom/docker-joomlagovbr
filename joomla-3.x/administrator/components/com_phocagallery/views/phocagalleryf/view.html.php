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
jimport( 'joomla.application.component.view');

class PhocaGalleryCpViewPhocagalleryF extends JViewLegacy
{
	protected $field;
	protected $fce;
	
	public function display($tpl = null) {

		$params = JComponentHelper::getParams( 'com_phocagallery' );
		JResponse::allowCache(false);
		JHTML::stylesheet('media/com_phocagallery/css/administrator/phocagallery.css' );
		
		$document	= JFactory::getDocument();
		//$document->addCustomTag(PhocaGalleryRenderAdmin::renderIeCssLink(1));

		$path 			= PhocaGalleryPath::getPath();
		
		$this->field	= JFactory::getApplication()->input->get('field');
		$this->fce 		= 'phocaSelectFolder_'.$this->field;
		
		/*$this->assignRef('session', JFactory::getSession());
		$this->assign('path_orig_rel', $path->image_rel);
		$this->assignRef('folders', $this->get('folders'));
		$this->assignRef('state', $this->get('state'));*/
		
		$this->assign('session', JFactory::getSession());
		$this->assign('path_orig_rel', $path->image_rel);
		$this->assign('folders', $this->get('folders'));
		$this->assign('state', $this->get('state'));

		parent::display($tpl);
	}

	protected function setFolder($index = 0) {
		if (isset($this->folders[$index])) {
			$this->_tmp_folder = $this->folders[$index];
		} else {
			$this->_tmp_folder = new JObject;
		}
	}
}
?>