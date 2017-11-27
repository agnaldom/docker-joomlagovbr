<?php
/**
 * YoutubeGallery Joomla! 3.0 Native Component
 * @version 4.4.0
 * @author Ivan Komlev< <support@joomlaboat.com>
 * @link http://www.joomlaboat.com
 * @GNU General Public License
 **/

// No direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.tooltip');
?>

<p style="text-align:left;">Upgrade to <a href="http://joomlaboat.com/youtube-gallery#pro-version" target="_blank">PRO version</a> to get more features
<span style="margin-left:20px;">|</span>
				<a href="http://joomlaboat.com/contact-us" target="_blank" style="margin-left:20px;">Help (Contact Tech-Support)</a>

</p>
<form id="adminForm" action="<?php echo JRoute::_('index.php?option=com_youtubegallery'); ?>" method="post" class="form-inline">


        <fieldset class="adminform">
               <legend><?php echo JText::_( 'COM_YOUTUBEGALLERY_CATEGORY_FORM_DETAILS' ); ?></legend>
               
               <table><tbody>
               
               <tr><td><?php echo $this->form->getLabel('categoryname'); ?></td><td>:</td><td><?php echo $this->form->getInput('categoryname'); ?></td></tr>
               <tr><td><?php echo $this->form->getLabel('parentid'); ?></td><td>:</td><td><?php echo $this->form->getInput('parentid'); ?></td></tr>
	       <tr><td><?php echo $this->form->getLabel('description'); ?></td><td>:</td><td><?php echo $this->form->getInput('description'); ?></td></tr>
               <tr><td><?php echo $this->form->getLabel('image'); ?></td><td>:</td><td><?php echo $this->form->getInput('image'); ?></td></tr>
               
               </tbody></table>
               

        </fieldset>
        <div>
                <input type="hidden" name="jform[id]" value="<?php echo (int)$this->item->id; ?>" />
                <input type="hidden" name="task" value="categoryform.edit" />
                <?php echo JHtml::_('form.token'); ?>
        </div>
</form>
