<!-- File: /app/views/papers/add.ctp -->

<h1>Add Paper</h1>
<?php
echo $this->Form->create('Paper');
echo $this->Form->input('subject_code');
echo $this->Form->input('part', array('options' => array('1'=>'part I','2'=>'Part II','3'=>'Part III')));
echo $this->Form->input('percentage');
echo $this->Form->input('date');
echo $this->Form->input('time');
echo $this->Form->input('prctcl_or_not');

echo $this->Form->end('Save Paper');
?>