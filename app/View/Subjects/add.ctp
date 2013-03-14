<!-- File: /app/views/subjects/add.ctp -->

<h1>Add Subject</h1>
<?php
echo $this->Form->create('Subject');
echo $this->Form->input('Subject.subject_code');
echo $this->Form->input('Subject.subject_name');
echo $this->Form->input('a_mark',array('default'=>75));
echo $this->Form->input('b_mark',array('default'=>65));
echo $this->Form->input('c_mark',array('default'=>50));
echo $this->Form->input('s_mark',array('default'=>35));

echo $this->Form->input('Timetable.0.part');
echo $this->Form->input('Timetable.0.percentage');
echo $this->Form->input('Timetable.0.date',array('type'=>'date'));
echo $this->Form->input('Timetable.0.time',array('type'=>'time'));
echo $this->Form->input('Timetable.1.part');
echo $this->Form->input('Timetable.1.percentage');
echo $this->Form->input('Timetable.1.date',array('type'=>'date'));
echo $this->Form->input('Timetable.1.time',array('type'=>'time'));
//echo $this->Form->input('mean');
//echo $this->Form->input('std_deviation');



echo $this->Form->end('Save Subject');
?>