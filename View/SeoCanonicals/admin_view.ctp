<?php $this->assign('title', __('Canonical Link'));?>
<div class="row-fluid">
    <div class="span9">
        <dl><?php $i = 0; $class = ' class="altrow"';?>
            <dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
            <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $seoCanonical['SeoCanonical']['id']; ?>
                &nbsp;
            </dd>
            <dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Seo Uri'); ?></dt>
            <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $this->Html->link($seoCanonical['SeoUri']['uri'], array('controller' => 'seo_uris', 'action' => 'view', $seoCanonical['SeoUri']['id'])); ?>
                &nbsp;
            </dd>
            <dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Canonical'); ?></dt>
            <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $seoCanonical['SeoCanonical']['canonical']; ?>
                &nbsp;
            </dd>
            <dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Active'); ?></dt>
            <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $seoCanonical['SeoCanonical']['is_active']; ?>
                &nbsp;
            </dd>
            <dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Created'); ?></dt>
            <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $seoCanonical['SeoCanonical']['created']; ?>
                &nbsp;
            </dd>
            <dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Modified'); ?></dt>
            <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $seoCanonical['SeoCanonical']['modified']; ?>
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
                    <li><?php echo $this->Html->link(__('List Canonical Links'), array('action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('Edit Canonical'), array('action' => 'edit', $seoCanonical['SeoCanonical']['id'])); ?> </li>
                    <li><?php echo $this->Html->link(__('Delete Canonical'), array('action' => 'delete', $seoCanonical['SeoCanonical']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $seoCanonical['SeoCanonical']['id'])); ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>