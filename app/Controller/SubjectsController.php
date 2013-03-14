<?php
class SubjectsController extends AppController {

	var $helpers = array ('Html','Form');
	var $name = 'Subjects';



	function index(){
		$this->set('subjects',$this->Subject->find('all'));
	}

	function add() {
        if (!empty($this->request->data)) {
            $myData = $this->request->data;
            //echo "{$myData['Subject']['subject_code']}";
            //die(print_r($this->data));
            if(!$this->Subject->exists($myData['Subject']['subject_code'])){
                if ($this->Subject->saveAll($this->request->data)) {
                    $this->Session->setFlash('The subject details have been entered.');
                    $this->redirect(array('action' => 'index'));
                }           
            }
            else{
                    $this->Session->setFlash('The subject code have already been entered.');
            }
        }
    }


	function delete($id){
		if($this->Subject->delete($id)){
			$this->Session->setFlash('The subject with subject code: ' . $id . ' has been deleted.');
        		$this->redirect(array('action' => 'index'));
		}
	}

	function edit($id = null){
		$this->Subject->id = $id;

		if(empty($this->data)){
			$this->data = $this->Subject->read();
		}
		else{
			if($this->Subject->save($this->data)){
				$this->Session->setFlash('Your post has been updated.' );
				$this->redirect(array('action' => 'index'));
			}
		}
	}
        
        
}
?>