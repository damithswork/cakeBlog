<!-- File: /app/views/students/add.ctp -->
<table>
<tr>
        <td width="120"><a href="http://localhost/cakeBlog/index.php/Students/index"><?php echo ('Register Students'); ?> </td>
        <td width="120"><a href="http://localhost/cakeBlog/index.php/Students/index"><?php echo ('Enter Marks'); ?> </td>
        <td width="120"><a href="http://localhost/cakeBlog/index.php/Exam_centers/index"><?php echo ('Examination Centers'); ?> </td>
        <td width="120"><a href="http://localhost/cakeBlog/index.php/Subjects/index"><?php echo ('Subject Details'); ?> </td>
        <td width="120"><a href="http://localhost/cakeBlog/index.php/Students/index"><?php echo ('Time Table'); ?> </td>
	
</tr>
</table>
<br>

<h1>Add Student</h1>
<?php
$this->Html->script('prototype', array('inline' => false));
echo $this->Form->create('Student');
echo $this->Form->input('nic_no');
echo $this->Form->input('full_name');
echo $this->Form->input('medium', array('options' => array('S'=>'Sinhala','E'=>'English','T'=>'Tamil')));
echo $this->Form->input('pvt_or_not');
//echo $this->Form->input('stream');
echo $this->Form->input('stream',array('id'=> 'stream','empty'=>'select the stream','options' => array('Mth'=>'Maths','Bio'=>'Bio','Com'=>'Commerce','Art'=>'Art','ICT'=>'ICT')));

echo $this->Form->input('Subjects.0.subject_code', array('id' => 'subjectsFace'/*, 'options'=>$subjects*/));
echo $this->Form->input('Subjects.1.subject_code', array('id' => 'subjectsFace'/*, 'options'=>$subjects*/));
echo $this->Form->input('Subjects.2.subject_code', array('id' => 'subjectsFace'/*, 'options'=>$subjects*/));
//echo $this->Form->input('Subject.3.subject_code', array('id' => 'subjectsFace'/*, 'options'=>$subjects*/));
//echo $this->Form->input('Subject.5.subject_code', array('id' => 'subjectsFace'/*, 'options'=>$subjects*/));

echo $this->Form->end('Save Post');

//echo $this->Ajax->observeField('stream', array('url' => '/subjects/get_by_stream', 'update' => 'Subject.0.subject_code'));
?>

<?php
$this->Js->get('#stream')->event('change', 
	$this->Js->request(array(
		'controller'=>'subjects',
		'action'=>'getByStream'
		), array(
		'update'=>'#subjectsFace',
		'async' => true,
		'method' => 'student',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array(
			'isForm' => true,
			'inline' => true
			))
		))
	);
?>