<?php
/**
 * SeoTitleFixture
 *
 */
class SeoTitleFixture extends CakeTestFixture {

	/**
	 * Fields
	 *
	 * @var array
	 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'length' => 36, 'key' => 'primary'),
		'seo_uri_id' => array('type' => 'string', 'null' => false, 'length' => 36),
		'title' => array('type' => 'string', 'null' => false),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'seo_titles_seo_uri_id' => array('unique' => true, 'column' => 'seo_uri_id')
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
			'id' => '527a88aa-6b64-4f23-82af-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-72f0-46ca-beb5-1f2042cbcf71',
			'title' => 'Total Blender WildSide Combo (White)',
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-26e0-4c31-aab1-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-a6a4-46ce-8a54-1f2042cbcf71',
			'title' => 'Cyclone Cup for Kitchen Mill | Blendtec',
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-ba14-4b87-81be-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-52d8-4faf-8d19-1f2042cbcf71',
			'title' => 'Kneading Arm for Mix n\' Blend II | Blendtec',
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-2c78-4ce0-a68e-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-d158-423f-a6ef-1f2042cbcf71',
			'title' => 'Mixing Bowl for Mix n\' Blend II | Blendtec',
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-97d4-431e-8f37-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-34e4-45dc-9799-1f2042cbcf71',
			'title' => 'Drive Shaft German Mixer | Blendtec',
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-0524-43a9-a463-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-a0a4-4621-83bc-1f2042cbcf71',
			'title' => 'Mixing Bowl Lid for Mix n\' Blend II | Blendtec',
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-c3b4-4aff-afc6-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-2ec4-44b5-b213-1f2042cbcf71',
			'title' => 'Dough Hook for Mix n\' Blend II | Blendtec',
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-4fe0-4a1d-a62a-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-e0d4-4c4e-8bf6-1f2042cbcf71',
			'title' => 'White Total Blender Classic WildSide | Blendtec',
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-c30c-4be4-be2e-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-65f8-488f-a2dd-1f2042cbcf71',
			'title' => 'Total Blender WildSide Combo (Red)',
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
		array(
			'id' => '527a88aa-4ed4-4b43-a01d-1f2042cbcf71',
			'seo_uri_id' => '527a88aa-e798-486c-a774-1f2042cbcf71',
			'title' => 'Red Total Blender Classic WildSide | Blendtec',
			'created' => '2013-11-06 18:21:30',
			'modified' => '2013-11-06 18:21:30'
		),
	);

}
