<?php
/**
 * SeoCanonicalFixture
 *
 */
class SeoCanonicalFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'length' => 36, 'key' => 'primary'),
		'seo_uri_id' => array('type' => 'string', 'null' => false, 'length' => 36),
		'canonical' => array('type' => 'string', 'null' => false),
		'is_active' => array('type' => 'boolean', 'null' => false, 'default' => true),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'seo_canonicals_seo_uri_id' => array('unique' => false, 'column' => 'seo_uri_id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
	);

}
