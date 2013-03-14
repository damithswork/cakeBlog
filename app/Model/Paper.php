<?php

class Paper extends AppModel {

	var $name = 'Paper';
	
	var $primaryKey = 'pId';
        //var $belongsTo = 'Subject'
	public $useTable = 'students_papers';
        
        
        
        public function getPaper($paperData){
            $paper = $this->find('first', array(
                        'conditions' => array('Paper.nic_no' => $paperData['Paper']['nic_no'],'Paper.subject_code' => $paperData['Paper']['subject_code'],'Paper.part' => $paperData['Paper']['part'])
                ));
            $pId = $paper['Paper']['pId'];
            return $pId;
        }
        
        public function getPaperPercentage($data){
            $tTable = $this->Timetable->find('first', array('conditions' , array(
                'Timetable.subject_code' => $data['Paper']['subject_code'],
                'Timetable.subject_part' => $data['Paper']['part']               
            )));
            return $tTable['Timetable']['percentage'];
        }
        
        

}

?>