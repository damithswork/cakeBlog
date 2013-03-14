<!-- File: /app/views/exam_centers/add.ctp -->

<h1>Add Division</h1>
<?php
echo $this->Form->create('Division');

echo $this->Form->input('division');
echo $this->Form->input('center_no');
echo $this->Form->input('district');
echo $this->Form->input('prctcl_center');

echo $this->Form->end('Save Details');
?>