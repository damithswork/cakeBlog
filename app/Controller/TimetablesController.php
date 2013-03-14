<?php
class TimetablesController extends AppController {
    var $helpers = array ('Html','Form');
    var $name = 'Timetables';

    function index() {
        $this->set('timetables', $this->Timetable->find('all'));
    }
    
    
    
}
?>