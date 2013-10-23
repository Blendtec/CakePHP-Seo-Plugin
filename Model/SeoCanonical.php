<?php
class SeoCanonical extends SeoAppModel {
	var $name = 'SeoCanonical';
	var $displayField = 'canonical';
	var $validate = array(
		'seo_uri_id' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Uri required',
            ),
		),
		'canonical' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'A canonical link must be entered',
			),
		),
		'is_active' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				'message' => 'Your custom message here',
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'SeoUri' => array(
			'className' => 'Seo.SeoUri',
			'foreignKey' => 'seo_uri_id',
		)
	);

    /**
     * Default filter args for building search queries using the searchable behavior
     *
     * @var array
     */
    public $filterArgs = array (
        'canonical' => array ('type' => 'like', 'empty' => true),
        'uri' => array('type' => 'like', 'field' => array('uri')),
    );
	
	/**
	* Assign or create the url.
	*/
	function beforeSave($options = array()){
		$this->createOrSetUri();
		return true;
	}
	
	/**
	* Find the first canonical link that matches this requesting URI
	* @param string incoming reuqest uri
	* @return the first canonical link to match
	*/
	function findByUri($request = null){
		return $this->field('canonical', array(
			"{$this->SeoUri->alias}.uri" => $request,
			"{$this->SeoUri->alias}.is_approved" => true,
			"{$this->alias}.is_active" => true,
		));
	}
}
