<?php
class DivisionsController extends AppController {

	var $helpers = array ('Html','Form');
	var $name = 'Divisions';
        var $components = array('RequestHandler');
 



	function index(){
		$this->set('divisions',$this->Division->find('all'));
	}

	function add() {
        if (!empty($this->data)) {
            $myData = $this->data;
            //echo "{$myData['Student']['nic_no']}";
            //die(print_r($this->data));
            $chk = $this->Division->find('first', array(
                            'conditions' => array('Division.division' => $myData['Division']['division'])
                            ));
            //die(print_r($chk));
            if($chk['Division']['division']===null){
                if ($this->Division->save($this->data)) {                  
                    $this->Session->setFlash('The student details have been entered.');
                    $this->redirect(array('action' => 'index'));                    
                }           
            }
            else{
                    $this->Session->setFlash('The nic no have already been entered.');
            }
        }
    }


	function delete($id){
		if($this->Division->delete($id)){
			$this->Session->setFlash('The post with id: ' . 			$id . ' has been deleted.');
        		$this->redirect(array('action' => 'index'));
		}
	}

	function edit($id = null){
		$this->Division->id = $id;

		if(empty($this->data)){
			$this->data = $this->Division->read();
		}
		else{
			if($this->Division->save($this->data)){
				$this->Session->setFlash('Your post has been updated.' );
				$this->redirect(array('action' => 'index'));
			}
		}
	}
        
        public function setDivision(){
            if(!empty($this->data)){
                $div = $this->data;
                
                $divid = $this->Division->getByName($div['Division']['division']);
                die(print_r($divid));
                if($divid !== null){
                    $this->Session->setFlash('The division has been selected.' );
                    $this->redirect(array('controller'=>'students','action' => 'add',$divid,$div['Division']['division']));               
                }
                else{
                    $this->Session->setFlash('No such division.' );
                }
            
        }
        
    }
}
?>
