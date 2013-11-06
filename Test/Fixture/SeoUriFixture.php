<?php
/**
 * SeoUriFixture
 *
 */
class SeoUriFixture extends CakeTestFixture {

	/**
	 * Fields
	 *
	 * @var array
	 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'length' => 36, 'key' => 'primary'),
		'uri' => array('type' => 'string', 'null' => true, 'default' => null),
		'is_approved' => array('type' => 'boolean', 'null' => false, 'default' => true),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'seo_uris_unique_uri' => array('unique' => true, 'column' => 'uri'),
			'seo_uris_is_approved' => array('unique' => false, 'column' => 'is_approved')
		),
		'tableParameters' => array()
	);

	/**
	 * Records
	 *
	 * @var array
	 */
	public $records = array(
		array(
			'id' => '527a88aa-72f0-46ca-beb5-1f2042cbcf71',
			'uri' => '/products/total_blender_classic_series_wildside_combo_white',
			'is_approved' => 1,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-a6a4-46ce-8a54-1f2042cbcf71',
			'uri' => '/products/cyclone_cup',
			'is_approved' => 1,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-52d8-4faf-8d19-1f2042cbcf71',
			'uri' => '/products/kneading_arm',
			'is_approved' => 1,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-d158-423f-a6ef-1f2042cbcf71',
			'uri' => '/products/mixing_bowl',
			'is_approved' => 1,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-34e4-45dc-9799-1f2042cbcf71',
			'uri' => '/products/drive_shaft_german',
			'is_approved' => 1,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-a0a4-4621-83bc-1f2042cbcf71',
			'uri' => '/products/mixing_bowl_lid',
			'is_approved' => 1,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-2ec4-44b5-b213-1f2042cbcf71',
			'uri' => '/products/dough_hook',
			'is_approved' => 1,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-e0d4-4c4e-8bf6-1f2042cbcf71',
			'uri' => '/products/total_blender_classic_series_wildside_white',
			'is_approved' => 1,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-65f8-488f-a2dd-1f2042cbcf71',
			'uri' => '/products/total_blender_classic_series_wildside_combo_red',
			'is_approved' => 1,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-e798-486c-a774-1f2042cbcf71',
			'uri' => '/products/total_blender_classic_series_wildside_red',
			'is_approved' => 1,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
	);

}
