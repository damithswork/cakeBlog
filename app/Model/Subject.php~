<?php

class Subject extends AppModel {

	var $name = 'Subject';
	var $primaryKey = 'subject_code';
	public $useTable = 'subjects';

	var $validate = array(
        	'subject_code' => array('rule' => 'notEmpty'),
        	'subject_name' => array( 'rule' => 'notEmpty'),
                'a_mark' => array( 'rule' => 'notEmpty'),
		//'mean' => array('rule' => 'notEmpty'),
		//'std_deviation' => array('rule' => 'notEmpty'),
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

	//var $callbacks = 'before';
        var $hasMany = array(
                'Timetable' => array(
                    'className'     => 'Timetable',
                    'foreignKey'    => 'subject_code',                   
                    //'conditions'    => array('timetable.status' => '1'),
                    //'order'         => 'timeTable.created DESC',
                    'limit'         => '5',
                    'dependent'     => true
        )
    ); 
        
        var $hasAndBelongsToMany = array('Students' =>
                                        array(
                                            'className' => 'Student',
                                            'joinTable' => 'students_subjects',
                                            'foreignKey' => 'subject_code',
                                            'associationForeignKey' => 'nic_no',
                                            'unique' => true,
                                        ));
        
        public function getPaperss($subjectCode) {
            $paperss = $this->Timetable->find('all', array(
                            'conditions' => array('Timetable.subject_code' => $subjectCode)
                            ));           
            return $paperss;
        }
        
}

?>
