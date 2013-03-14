<!-- File: /app/views/students/edit.ctp -->
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

<h1>Edit Student</h1>
<?php
    echo $this->Form->create('Student', array('action' => 'edit'));
    echo $this->Form->input('nic_no');
    echo $this->Form->input('full_name');
    echo $this->Form->input('medium');
echo $this->Form->input('pvt_or_not');
echo $this->Form->input('stream');
    echo $this->Form->end('Save Student');
?>
