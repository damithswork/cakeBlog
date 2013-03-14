<?php
class ExamCentersController extends AppController {
    var $helpers = array ('Html','Form');
    var $name = 'Exam_centers';

    function index() {
        $this->set('exam_centers', $this->Exam_center->find('all'));
    }


	function add() {
        if (!empty($this->data)) {
            if ($this->Exam_center->save($this->data)) {
                $this->Session->setFlash('Your post has been 	saved.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

	function delete($center_no){
		if($this->Exam_center->delete($center_no)){
			$this->Session->setFlash('The Exam Center with center no: ' . 			$center_no . ' has been deleted.');
        		$this->redirect(array('action' => 'index'));
		}
	}

	function edit($center_no = null){
		$this->Exam_center->id = $center_no;

		if(empty($this->data)){
			$this->data = $this->Exam_center->read();
		}
		else{
			if($this->Exam_center->save($this->data)){
				$this->Session->setFlash('Exam center details has been updated.' );
				$this->redirect(array('action' => 'index'));
			}
		}
	}

}
?>