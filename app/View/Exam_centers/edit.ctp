<!-- File: /app/views/exam_centers/edit.ctp -->

<h1>Edit Exam Center</h1>
<?php
    echo $this->Form->create('Exam_center', array('action' => 'edit'));
    echo $this->Form->input('center_no');
    echo $this->Form->input('center_name');
    echo $this->Form->input('capacity');
    echo $this->Form->end('Update Details');
?>
