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
echo $this->Form->create('Division');
echo $this->Form->input('division');

echo $this->Form->end('Set Division');
?>

