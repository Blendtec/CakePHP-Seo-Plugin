<?php echo $this->Form->create('SeoTitle');?>
<fieldset>
    <?php
    echo $this->Form->input('id');
    echo $this->Form->input('SeoUri.uri');
    echo $this->Form->input('title');
    ?>
</fieldset>
<?php echo $this->Form->end(__('Submit'));?>