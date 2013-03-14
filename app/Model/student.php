<?php

class Student extends AppModel {

	var $name = 'Student';
	var $primaryKey = 'nic_no';
	public $useTable = 'students';

	var $validate = array(
        	'full_name' => array('rule' => 'notEmpty'),
        	'nic_no' => array( 'rule' => 'isUnique'),
		'medium' => array('rule' => 'notEmpty'),
		'stream' => array('rule' => 'notEmpty'),
                'division_id' => array('rule'=>'notEmpty')
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
        
        var $hasAndBelongsToMany = array('Subjects' =>
                                        array(
                                            'className' => 'Subject',
                                            'joinTable' => 'students_subjects',
                                            'foreignKey' => 'nic_no',
                                            'associationForeignKey' => 'subject_code',
                                            'unique' => true,
                                        ));
        
        var $hasMany = array(
                'Papers' => array(
                    'className'     => 'Paper',
                    'foreignKey'    => 'nic_no',                   
                    
        )
    ); 
        /*
        var $belongsTo = array(
            'Division'=>array(
                'className' => 'Division',
                //'foreignKey' => 'division_id'
            )
        );*/
        
        public function getPapers($subjectCode) {
            $papers = $this->Subjects->getPaperss($subjectCode);
            return $papers;
        }
        
        
        public function savePapers($data){
            $this->Papers->create();
            $this->Papers->save($data);
        }
        /*
        public function getDivision($name){
            return $this->Division->getByName($name);
        }*/
        
        public function updateMarks($data, $percentage){
            
            $subjectEntry = $this->Subjects->find('first', array('conditions', array(
                'Subjects.nic_no' => $data['Paper']['nic_no']
            )));
            $updatedMark = $subjectEntry['Subjects']['mark'] + ($percentage * $data['Paper'])/100;
            $this->Subjects->set(array(
                                'mark' => $updatedMark,
                                'presence' => 1));
            $this->Subjects->save();
        }
}

?>
