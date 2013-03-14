<!-- File: /app/views/students/edit.ctp -->

<h1>Edit Student</h1>
<?php
    echo $this->Form->create('Student', array('action' => 'edit'));
    echo $this->Form->input('nic_no');
    echo $this->Form->input('full_name');
    echo $this->Form->input('medium');
echo $this->Form->input('pvt_or_not');
echo $this->Form->input('stream');
    echo $this->Form->end('Save Student');
?>
