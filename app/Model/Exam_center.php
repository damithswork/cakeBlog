<?php

class Exam_center extends AppModel {

	var $name = 'Exam_center';
	var $primaryKey = 'center_no';

	var $validate = array(
        	'center_no' => array('rule' => 'notEmpty'),
        	'center_name' => array( 'rule' => 'notEmpty'),
		'capacity' => array('rule' => 'notEmpty'),

    );

}

?>