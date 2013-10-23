<?php $this->assign('title', __('Meta Tag'));?>
<div class="row-fluid">
	<div class="span9">
		<dl><?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $seoMetaTag['SeoMetaTag']['id']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Seo Uri'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $this->Html->link($seoMetaTag['SeoUri']['uri'], array('controller' => 'seo_uris', 'action' => 'view', $seoMetaTag['SeoUri']['id'])); ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Name'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $seoMetaTag['SeoMetaTag']['name']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Content'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $seoMetaTag['SeoMetaTag']['content']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Is Http Equiv'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $seoMetaTag['SeoMetaTag']['is_http_equiv']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Created'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $seoMetaTag['SeoMetaTag']['created']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Modified'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $seoMetaTag['SeoMetaTag']['modified']; ?>
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
                    <li><?php echo $this->Html->link(__('List Meta Tags'), array('action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('Edit Meta Tag'), array('action' => 'edit', $seoMetaTag['SeoMetaTag']['id'])); ?> </li>
                    <li><?php echo $this->Html->link(__('Delete Meta Tag'), array('action' => 'delete', $seoMetaTag['SeoMetaTag']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $seoMetaTag['SeoMetaTag']['id'])); ?> </li>
                </ul>
            </div>
	    </div>
    </div>
</div>