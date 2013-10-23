<?php $this->assign('title', __('Title')); ?>
<div class="row-fluid">
    <div class="span9">
        <dl><?php $i = 0; $class = ' class="altrow"';?>
            <dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
            <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $seoCanonical['SeoTitle']['id']; ?>
                &nbsp;
            </dd>
            <dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Seo Uri'); ?></dt>
            <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $this->Html->link($seoCanonical['SeoUri']['uri'], array('controller' => 'seo_uris', 'action' => 'view', $seoCanonical['SeoUri']['id'])); ?>
                &nbsp;
            </dd>
            <dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Title'); ?></dt>
            <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $seoCanonical['SeoTitle']['title']; ?>
                &nbsp;
            </dd>
            <dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Created'); ?></dt>
            <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $seoCanonical['SeoTitle']['created']; ?>
                &nbsp;
            </dd>
            <dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Modified'); ?></dt>
            <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $seoCanonical['SeoTitle']['modified']; ?>
                &nbsp;
            </dd>
        </dl>
    </div>
    <div class="span3">
        <div class="widget no-margin">
            <div class="widget-header">
                <div class="title">
                    <?php echo __('Actions'); ?>
                </div>
            </div>
            <div class="widget-body">
                <ul>
                    <li><?php echo $this->Html->link(__('List Titles'), array('action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('Edit Title'), array('action' => 'edit', $seoCanonical['SeoTitle']['id'])); ?> </li>
                    <li><?php echo $this->Html->link(__('Delete Title'), array('action' => 'delete', $seoCanonical['SeoTitle']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $seoCanonical['SeoTitle']['id'])); ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>