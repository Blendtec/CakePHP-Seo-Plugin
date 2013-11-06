<?php
/**
 * SeoMetaTagFixture
 *
 */
class SeoMetaTagFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'length' => 36, 'key' => 'primary'),
		'seo_uri_id' => array('type' => 'string', 'null' => false, 'length' => 36),
		'name' => array('type' => 'string', 'null' => true, 'default' => null),
		'content' => array('type' => 'string', 'null' => true, 'default' => null),
		'is_http_equiv' => array('type' => 'boolean', 'null' => false, 'default' => false),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'seo_meta_tags_seo_uri_id' => array('unique' => false, 'column' => 'seo_uri_id')
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	/**
	 * Records
	 *
	 * @var array
	 */
	public $records = array(
		array(
			'id' => '527a88aa-24fc-4d34-b161-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-72f0-46ca-beb5-1f2042cbcf71',
			'name' => 'description',
			'content' => ' The Total Blender is the all-in-one appliance that makes smoothies, fresh juice, ice cream, milkshakes, cappuccinos, margaritas, soups, sauces, bread',
			'is_http_equiv' => 0,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-9868-4143-8d0b-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-a6a4-46ce-8a54-1f2042cbcf71',
			'name' => 'description',
			'content' => 'The cyclone cup is an essential part of the Kitchen Mill™, catching any overflow of flour and preventing flour from coming out the sides of the machine.',
			'is_http_equiv' => 0,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-29a8-4767-868d-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-52d8-4faf-8d19-1f2042cbcf71',
			'name' => 'description',
			'content' => 'Kneading Arm replacement part for Mix n\' Blend II.  See this and more replacement parts here.',
			'is_http_equiv' => 0,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-9504-4904-ad39-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-d158-423f-a6ef-1f2042cbcf71',
			'name' => 'description',
			'content' => 'Mixing Bowl replacement part for Mix n\' Blend II.  See this and more replacement parts here.',
			'is_http_equiv' => 0,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-0704-4d88-b5f8-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-34e4-45dc-9799-1f2042cbcf71',
			'name' => 'description',
			'content' => 'Replacement drive shaft for the German Mixer.  Learn more about this and other replacement parts here.',
			'is_http_equiv' => 0,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-74b8-4028-b772-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-a0a4-4621-83bc-1f2042cbcf71',
			'name' => 'description',
			'content' => 'Mixing Bowl Lid replacement part for Mix n\' Blend II.  See this and more replacement parts here.',
			'is_http_equiv' => 0,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-3d70-4946-86fd-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-2ec4-44b5-b213-1f2042cbcf71',
			'name' => 'description',
			'content' => 'Dough hook replacement part for Mix n\' Blend II.  See this and more replacement parts here.',
			'is_http_equiv' => 0,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-c5b4-4c02-912f-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-e0d4-4c4e-8bf6-1f2042cbcf71',
			'name' => 'description',
			'content' => 'Blendtec professional-grade kitchen blenders. Choose from our wide variety of colors. Order yours today! Call 1-800-BLENDTEC',
			'is_http_equiv' => 0,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-4754-42f9-9e74-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-65f8-488f-a2dd-1f2042cbcf71',
			'name' => 'description',
			'content' => ' The Total Blender is the all-in-one appliance that makes smoothies, fresh juice, ice cream, milkshakes, cappuccinos, margaritas, soups, sauces, bread',
			'is_http_equiv' => 0,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-bda0-4f12-b8a2-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-e798-486c-a774-1f2042cbcf71',
			'name' => 'description',
			'content' => 'Blendtec professional-grade kitchen blenders. Choose from our wide variety of colors. Order yours today! Call 1-800-BLENDTEC',
			'is_http_equiv' => 0,
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
	);

}
