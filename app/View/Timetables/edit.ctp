<!-- File: /app/views/papers/edit.ctp -->

<h1>Edit Paper</h1>
<?php
    echo $this->Form->create('Paper');
    echo $this->Form->input('subject_code', array('disabled'=>'true'));
    echo $this->Form->input('part', array('disabled'=>'true'));
    echo $this->Form->input('percentage');
    echo $this->Form->input('date');
    echo $this->Form->input('time');
    echo $this->Form->input('prctcl_or_not');
?>
