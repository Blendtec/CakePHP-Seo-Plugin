<?php echo $this->Form->create('SeoMetaTag');?>
    <fieldset>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('SeoUri.uri');
        echo $this->Form->input('name');
        echo $this->Form->input('content');
        echo $this->Form->input('is_http_equiv');
        ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit'));?>