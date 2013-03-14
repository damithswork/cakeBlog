<!-- File: /app/views/exam_centers/add.ctp -->

<h1>Add Exam Center</h1>
<?php
echo $this->Form->create('Exam_center');

echo $this->Form->input('center_name');
echo $this->Form->input('capacity');

echo $this->Form->end('Save Details');
?>