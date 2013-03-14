<!-- File: /app/views/exam_centers/edit.ctp -->

<h1>Edit Exam Center</h1>
<?php
    echo $this->Form->create('Division', array('action' => 'edit'));
    echo $this->Form->input('id',array('disabled'=>true));
    echo $this->Form->input('division');
    echo $this->Form->input('center_no');
    echo $this->Form->input('district');
    echo $this->Form->input('prctcl_center');
    echo $this->Form->end('Update Details');
?>
