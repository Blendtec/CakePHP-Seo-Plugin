<?php echo $this->Form->create('SeoUri');?>
<fieldset>
    <legend><?php echo __('Uri');?></legend>
    <?php
        echo $this->Form->hidden('SeoUri.id');
        echo $this->Form->input('SeoUri.uri');
        echo $this->Form->input('SeoUri.is_approved', array('label' => 'Approved'));
    ?>
    <hr/>
    <legend><?php echo __('Title'); ?></legend>
    <?php
        echo $this->Form->hidden('SeoTitle.id');
        echo $this->Form->input('SeoTitle.title');
    ?>
    <hr/>
    <h3>Meta Tags</h3>
    <fieldset>
        <legend><?php echo __('Meta Tag 1')?></legend>
        <?php
            echo $this->Form->hidden('SeoMetaTag.0.id');
            echo $this->Form->input('SeoMetaTag.0.name');
            echo $this->Form->input('SeoMetaTag.0.content');
            echo $this->Form->input('SeoMetaTag.0.is_http_equiv', array('label' => 'Http Equiv'));
        ?>
    </fieldset>
    <fieldset>
        <legend><?php echo __('Meta Tag 2')?></legend>
        <?php
            echo $this->Form->hidden('SeoMetaTag.1.id');
            echo $this->Form->input('SeoMetaTag.1.name');
            echo $this->Form->input('SeoMetaTag.1.content');
            echo $this->Form->input('SeoMetaTag.1.is_http_equiv', array('label' => 'Http Equiv'));
        ?>
    </fieldset>
    <fieldset>
        <legend><?php echo __('Meta Tag 3')?></legend>
        <?php
            echo $this->Form->hidden('SeoMetaTag.2.id');
            echo $this->Form->input('SeoMetaTag.2.name');
            echo $this->Form->input('SeoMetaTag.2.content');
            echo $this->Form->input('SeoMetaTag.2.is_http_equiv', array('label' => 'Http Equiv'));
        ?>
    </fieldset>
</fieldset>
<?php echo $this->Form->end(__('Save All'));?>