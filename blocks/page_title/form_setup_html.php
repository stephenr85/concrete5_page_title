<?php  defined('C5_EXECUTE') or die("Access Denied."); ?> 
<?php

	$form = Loader::helper('form');
?>
<p>
<?php echo $form->label('tatHandle', t('Attribute')) ?> <?php echo $form->select('tatHandle', array_merge(array(''=>'None'), $this->controller->getAvailableAttributes()), $tatHandle) ?><br/>
<br /><small><?php echo t('Leave empty if you want to use the default page name.') ?></small>
</p>

<p>
<?php echo $form->label('override', t('Override')) ?> <?php echo $form->text('override', $override, array('style'=>'width:95%')) ?>
<br/><small><?php echo t('This will override whatever the default page title is for this page.') ?></small>
</p>


