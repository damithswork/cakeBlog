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
//$this->Html->script('prototype', array('inline' => false));
echo $this->Form->create('Student');
echo $this->Form->input('division_name',array('disabled'=>true,'default'=>$div)); ?>
<?php echo $this->Form->input('full_name'); ?>
<table>

<tr>
<td><?php echo $this->Form->input('nic_no'); ?></td>

</tr>

<tr>
    <td><?php echo $this->Form->input('medium', array('options' => array('S'=>'Sinhala','E'=>'English','T'=>'Tamil'))); ?> </td>
    <td><?php echo $this->Form->input('pvt_or_not');?></td>
    <td><?php echo $this->Form->input('stream',array('id'=> 'stream','empty'=>'select the stream','options' => array('Mth'=>'Maths','Bio'=>'Bio','Com'=>'Commerce','Art'=>'Art','ICT'=>'ICT')));?></td>
</tr>
<tr>
<td><?php echo $this->Form->input('Subjects.0.subject_code', array('id' => 'subjectsFace'/*, 'options'=>$subjects*/)); ?> </td>
<td><?php echo $this->Form->input('Subjects.1.subject_code', array('id' => 'subjectsFace'/*, 'options'=>$subjects*/)); ?> </td>
<td><?php echo $this->Form->input('Subjects.2.subject_code', array('id' => 'subjectsFace'/*, 'options'=>$subjects*/)); 
//echo $this->Form->input('Subject.3.subject_code', array('id' => 'subjectsFace'/*, 'options'=>$subjects*/));
//echo $this->Form->input('Subject.5.subject_code', array('id' => 'subjectsFace'/*, 'options'=>$subjects*/));
?></td>
</tr>
</table>
<?php
echo $this->Form->end('Save Post');

//echo $this->Ajax->observeField('stream', array('url' => '/subjects/get_by_stream', 'update' => 'Subject.0.subject_code'));
?>

<h1>Student Details</h1>
<br>



<table>
    <tr>
                <th>NIC No

</th>
        <th>Full Name</th>
		<th>medium</th>
	<th>Stream</th>

    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($students as $student): ?>
    <tr>
               <td>
            <?php echo $this->Html->link($student['Student']['nic_no'],
array('controller' => 'students', 'action' => 'view', $student['Student']['nic_no'])); ?>
        </td>

        <td>
            <?php echo $this->Html->link($student['Student']['full_name'],
array('controller' => 'students', 'action' => 'view', $student['Student']['nic_no'])); ?>
        </td>

        <td>
            <?php echo $this->Html->link($student['Student']['medium'],
array('controller' => 'students', 'action' => 'view', $student['Student']['nic_no'])); ?>
        </td>

        <td><?php echo $student['Student']['stream']; ?></td>

		<td>
        <?php echo $this->Html->link('Delete', array('action' => 'delete', $student['Student']['nic_no']), null, 'Are you sure?')?>

		<?php echo $this->Html->link('Edit', array('action' => 'edit', $student['Student']['nic_no']));?>

        </td>

    </tr>
    <?php endforeach; ?>

</table>