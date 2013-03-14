<!-- File: /app/views/students/edit.ctp -->

<h1>Edit Student</h1>
<?php
    echo $this->Form->create('Paper', array('action' => 'edit'));
    
echo $this->Form->input('mark');
    echo $this->Form->end('Update Mark');
?>
