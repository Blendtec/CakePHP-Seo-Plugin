<?php $this->assign('title', 'Canonical Links');?>
<div class="row_fluid">
    <div class="span9">
        <div class="widget-header">
            <div id="data-table_info" class="dataTables_info">
                <?php
                $this->Paginator->options(
                    array(
                        'url' => array(
                            'action' => 'index'
                        )
                    )
                );
                echo $this->Paginator->counter(
                    array (
                        'format' => 'Page {:page} of {:pages}, ' .
                                    'showing {:current} records out of {:count} ' .
                                    'total, starting on record {:start}, ' .
                                    'ending on {:end}'
                    )
                );
                ?>
            </div>
        </div>
        <div class="widget-body">
            <div id="dt_example" class="example_alt_pagination">
                <div id="data-table_wrapper" class="dataTables_wrapper" role="grid">
                    <table aria-describedby="data-table_info"
                           class="table
                            table-condensed
                            table-striped
                            table-hover
                            table-bordered
                            pull-left
                            dataTable"
                           id="data-table">
                        <thead>
                        <tr role="row">
                            <th colspan="1"
                                rowspan="1"
                                aria-controls="data-table"
                                tabindex="0"
                                role="columnheader"
                                class="sorting"
                                style="width: 200px;">
                                <?php echo $this->Paginator->sort('SeoUri.uri', 'Uri'); ?>
                            </th>
                            <th colspan="1"
                                rowspan="1"
                                aria-controls="data-table"
                                tabindex="0"
                                role="columnheader"
                                class="sorting"
                                style="width: 150px;">
                                <?php echo $this->Paginator->sort('canonical'); ?>
                            </th>
                            <th colspan="1"
                                rowspan="1"
                                aria-controls="data-table"
                                tabindex="0"
                                role="columnheader"
                                class="sorting hidden-phone"
                                style="width: 100px;">
                                <?php echo $this->Paginator->sort('modified'); ?>
                            </th>
                            <th aria-controls="data-table" role="columnheader">
                                <?php echo __('Actions')?>
                            </th>
                        </tr>
                        </thead>

                        <tbody aria-relevant="all" aria-live="polite" role="alert">
                        <?php foreach ($seoCanonicals as $seoCanonical): ?>
                            <tr class="gradeA odd">
                                <td>
                                    <?php echo
                                    $this->Html->link(
                                        $seoCanonical['SeoUri']['uri'],
                                        array(
                                            'controller' => 'seo_uris',
                                            'action' => 'view',
                                            $seoCanonical['SeoCanonical']['id']
                                        )
                                    );
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $seoCanonical['SeoCanonical']['canonical'];
                                    ?>
                                </td>
                                <td class="hidden-phone">
                                    <?php
                                    echo $seoCanonical['SeoCanonical']['modified'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $this->Html->link(
                                        null,
                                        array (
                                            'action' => 'view',
                                            $seoCanonical['SeoCanonical']['id'],
                                        ),
                                        array (
                                            'escape' => false,
                                            'data-icon' => '&#xe0c6;',
                                            'role' => 'button',
                                            'class' => 'fs1 btn btn-medium btn-success',
                                            'data-original-title' => 'View'
                                        )
                                    );
                                    echo $this->Html->link(
                                        null,
                                        array (
                                            'action' => 'edit',
                                            $seoCanonical['SeoCanonical']['id'],
                                        ),
                                        array(
                                            'escape' => false,
                                            'data-icon' => '&#xe006;',
                                            'role' => 'button',
                                            'class' => 'fs1 btn btn-medium btn-warning',
                                            'data-original-title' => 'Edit'
                                        )
                                    );
                                    echo $this->Html->link(
                                        null,
                                        array('action' => 'delete',
                                            $seoCanonical['SeoCanonical']['id']),
                                        array(
                                            'escape' => false,
                                            'data-icon' => '&#xe0a8;;',
                                            'role' => 'button',
                                            'class' => 'fs1 btn btn-medium btn-danger',
                                            'data-original-title' => 'Delete'
                                        ),
                                        sprintf(
                                            __('Are you sure you want to delete # %s?'),
                                            $seoCanonical['SeoCanonical']['canonical']
                                        )
                                    );
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div id="data-table_paginate"
                         class="dataTables_paginate paging_full_numbers">
                        <?php echo $this->Paginator->pagination(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="span3">
        <div class="widget no-margin">
            <div class="widget-header">
                <div class="title">
                    <?php __('Search'); ?>
                </div>
            </div>
            <div class="widget-body">
                <?php echo $this->Form->create('SeoCanonical');?>
                <fieldset>
                    <?php
                    echo $this->Form->input('uri');
                    echo $this->Form->input('canonical');
                    ?>
                    <div class="alert alert-block alert-error">
                        <p>Do not include '/' character in search</p>
                    </div>
                </fieldset>
                <?php
                echo $this->Form->end(
                    array(
                        'label' => __('Search'),
                        'formnovalidate' => true,
                        'class' => 'btn btn-large btn-primary'
                    )
                );
                ?>
            </div>
        </div>
    </div>
</div>