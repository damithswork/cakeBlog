<?php

class Timetable extends AppModel {

	var $name = 'Timetable';
	var $primaryKey = 'id';
        //var $belongsTo = 'Subject'
	public $useTable = 'time_tables';

	var $validate = array(
        	'subject_code' => array('rule' => 'notEmpty'),
        	'part' => array( 'rule' => 'notEmpty'),
		'percentage' => array('rule' => 'notEmpty'),
		'date' => array('rule' => 'notEmpty'),
		'time' => array('rule' => 'notEmpty'),
               /* 'username' => array(
                        'isUnique' => array(
                            'rule' => 'isUnique',
                            'message' => 'That  has already been taken',
                            'on' => 'create'
                        ),
                        'notEmpty' => array(
                            'rule' => 'notEmpty',
                            'message' => 'Please enter a username'
                        )

    )*/);
        /*
        var $hasMany = array('Paper', array(
            'className' => 'Paper'
        ));*/

	//var $callbacks = 'before';

        
        public function getTimeTable($subject, $part){
            return $this->find('first', array( 
                    'conditions' => array('Timetable.subject_code'=>$subject,'Timetable.part'=>$part)
                    ));
        }
        
        public function getPercentage($subject, $part){
            $tt = $this->getTimeTable($subject, $part);
            return $tt['Timetable']['percentage'];
        }
}

?>
