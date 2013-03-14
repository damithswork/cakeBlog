<?php
class PapersController extends AppController {

	var $helpers = array ('Html','Form');



	function index(){
		$this->set('papers',$this->Paper->find('all'));
                
	}
        
        function enter(){
                $this->set('papers',$this->Paper->find('all'));
                $this->Paper->create();
                  
             
                /*$paper['Paper']['mark'] = $paperData['Paper']['mark'];
                $paper['Paper']['presence'] = $paperData['Paper']['presence'];*/
                //$this->Paper->create();
                if(!empty($this->data)){
                    $paperData = $this->data;
                    $pId = $this->Paper->getPaper($paperData);
                    $p = $this->Paper->read(null,$pId);
                    //die(print_r($p));
                    if($p['Paper']['pId'] !== null){
                        $this->Paper->set(array(
                                'mark' => $paperData['Paper']['mark'],
                                'presence' => $paperData['Paper']['presence']));
                        $data = $this->Paper;
                        $sql = 'SELECT `percentage` FROM time_tables  WHERE `subject_code` = '.$paperData['Paper']['subject_code'].
                                ' AND `part` = '.$paperData['Paper']['part'].' LIMIT 1;';
                        $percentage = $this->Paper->query($sql);
                        //die(print_r($percentage['0']['time_tables']['percentage']));
                        $realMark = ($percentage['0']['time_tables']['percentage'] * $paperData['Paper']['mark'])/100;
                        //die(print_r($realMark));
                        $sql = 'SELECT mark FROM students_subjects WHERE subject_code = '.$paperData['Paper']['subject_code'].
                                ' AND `nic_no` = '.$paperData['Paper']['nic_no'].' LIMIT 1;';
                        $currentMark = $this->Paper->query($sql);
                        if($currentMark['0']['students_subjects']['mark']===null){
                            $mark = 0+ $realMark;
                        }
                        else{
                            $mark = $currentMark['0']['students_subjects']['mark'] + $realMark;
                        }
                        $sql = 'UPDATE students_subjects SET mark = '.$mark.' WHERE subject_code = '.$paperData['Paper']['subject_code'].
                                ' AND `nic_no` = '.$paperData['Paper']['nic_no'].' LIMIT 1;';
                        $this->Paper->query($sql);
                        //die(print_r($mark));
                        //$this->Student->updateMarks($data, $percentage);
                        if ($this->Paper->save()) {                           
                            $this->Session->setFlash('The paper marks have been entered.');
                            $this->redirect(array('action' => 'enter'));
                        }
                    }
                    else{
                        $this->Session->setFlash('No such registration.');
                    }
                }
                
        }

	function add() {
                if ($this->SubjectsFace->saveAssociated($this->data)) {
                    $this->Session->setFlash('The subjects facing have been entered.');
                    $this->redirect(array('action' => 'index'));
                }           
            
        }
    


	function delete($id){
		if($this->Student->delete($id)){
			$this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
        		$this->redirect(array('action' => 'index'));
		}
	}

	function edit($id = null){
		$this->Paper->id = $id;              
		if(empty($this->data)){
			$this->data = $this->Paper->read();
                        
		}
		else{
                    $previous = $this->Paper->read();
                    //die(print_r($previous));
                    $new = $this->data;
                   $sql = 'SELECT `percentage` FROM time_tables  WHERE `subject_code` = '.$previous['Paper']['subject_code'].
                                ' AND `part` = '.$previous['Paper']['part'].' LIMIT 1;';
                        $percentage = $this->Paper->query($sql);
                        //die(print_r($percentage['0']['time_tables']['percentage']));
                        $preRealMark = ($percentage['0']['time_tables']['percentage'] * $previous['Paper']['mark'])/100;
                        $newRealMark = ($percentage['0']['time_tables']['percentage'] * $new['Paper']['mark'])/100;
                        $sql = 'SELECT mark FROM students_subjects WHERE `subject_code` = '.$previous['Paper']['subject_code'].
                                ' AND `nic_no` = '.$previous['Paper']['nic_no'].' LIMIT 1;';
                        $currentMark = $this->Paper->query($sql);
                        $marksRest = $currentMark['0']['students_subjects']['mark'] - $preRealMark;
                        
                        $mark = $marksRest + $newRealMark;
                        $sql = 'UPDATE students_subjects SET mark = '.$mark.' WHERE subject_code = '.$previous['Paper']['subject_code'].
                                ' AND `nic_no` = '.$previous['Paper']['nic_no'].' LIMIT 1;';
                        $this->Paper->query($sql); 
                    
                    
                    $this->Paper->set(array(
                                'mark' => $new['Paper']['mark']));
			if($this->Paper->save()){
				$this->Session->setFlash('Your post has been updated.' );
				$this->redirect(array('action' => 'index'));
			}
		}
	}
}
?>