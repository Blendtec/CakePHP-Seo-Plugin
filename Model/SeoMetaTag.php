<?php
class SeoMetaTag extends SeoAppModel {
	var $name = 'SeoMetaTag';
	var $displayField = 'name';
	var $validate = array(
		'seo_uri_id' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Uri required',
            ),
		),
		'name' => array(
			'notempty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Name must be present.',
			),
		),
		'content' => array(
			'notempty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Content must be present.',
			),
		),
		'is_http_equiv' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				'message' => 'Must be true or false',
			),
		),
	);
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
        'name' => array ('type' => 'like', 'empty' => true),
        'content' => array ('type' => 'like', 'empty' => true),
        'uri' => array('type' => 'like', 'field' => array('SeoUri.uri')),
    );
	
	function beforeSave($options = array()){
		$this->createOrSetUri();
		return true;
	}
	
	/**
	* Find all the tags by a specific reuqest,
	* This takes in a request URI and finds all matching meta_tags for this URI
	* @param incoming request URI
	* @return array of results
	*/
	function findAllTagsByUri($request = null){
		$retval = $this->find('all', array(
			'conditions' => array(
				"{$this->SeoUri->alias}.uri" => $request,
				"{$this->SeoUri->alias}.is_approved" => true
			),
			'contain' => array("{$this->SeoUri->alias}.uri")
		));
		
		if(!empty($retval)){
			return $retval;
		}
		
		$uri_ids = $this->SeoUri->findRegexUri($request);
		
		if(empty($uri_ids)){
			return array();
		}
		
		$retval = $this->find('all', array(
			'conditions' => array(
				"{$this->alias}.seo_uri_id" => $uri_ids
			),
			'contain' => array()
		));
		
		return $retval;
	}
}