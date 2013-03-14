<!-- File: /app/views/subjects/add.ctp -->

<h1>Add Subject</h1>
<?php
echo $this->Form->create('Subject');
echo $this->Form->input('subject_code');
echo $this->Form->input('subject_name');
//echo $this->Form->input('mean');
//echo $this->Form->input('std_deviation');
echo $this->Form->input('a_mark');
echo $this->Form->input('b_mark');
echo $this->Form->input('c_mark');
echo $this->Form->input('s_mark');
echo $this->Form->end('Save Subject');
?>