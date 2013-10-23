<?php echo $this->Form->create('SeoCanonical');?>
<fieldset>
    <?php
    echo $this->Form->input('id');
    echo $this->Form->input('SeoUri.uri');
    echo $this->Form->input('canonical', array('label' => 'Canonical Link'));
    echo $this->Form->input('is_active');
    ?>
</fieldset>
<?php echo $this->Form->end(__('Submit'));?>