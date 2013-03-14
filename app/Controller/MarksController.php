<?php
class MarksController extends AppController {

	var $helpers = array ('Html','Form');
	var $uses = array('students_papers');



	function index(){
		$this->set('subjectsFaceList',$this->SubjectsFace->find('all'));
	}

	function add() {
                if ($this->SubjectsFace->saveAssociated($this->data)) {
                    $this->Session->setFlash('The subjects facing have been entered.');
                    $this->redirect(array('action' => 'index'));
                }           
            
        }
    


	function delete($id){
		if($this->Student->delete($id)){
			$this->Session->setFlash('The post with id: ' . 			$id . ' has been deleted.');
        		$this->redirect(array('action' => 'index'));
		}
	}

	function edit($id = null){
		$this->Student->id = $id;

		if(empty($this->data)){
			$this->data = $this->Student->read();
		}
		else{
			if($this->Student->save($this->data)){
				$this->Session->setFlash('Your post has been updated.' );
				$this->redirect(array('action' => 'index'));
			}
		}
	}
}
?>