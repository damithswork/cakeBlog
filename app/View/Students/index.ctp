<!-- File: /app/views/students/index.ctp -->
<table>
<tr>
        <td width="120"><a href="http://localhost/cakeBlog/index.php/Students/index"><?php echo ('Register Students'); ?> </td>
        <td width="120"><a href="http://localhost/cakeBlog/index.php/Papers/index"><?php echo ('Enter Marks'); ?> </td>
        <td width="120"><a href="http://localhost/cakeBlog/index.php/Exam_centers/index"><?php echo ('Examination Centers'); ?> </td>
        <td width="120"><a href="http://localhost/cakeBlog/index.php/Subjects/index"><?php echo ('Subject Details'); ?> </td>
        <td width="120"><a href="http://localhost/cakeBlog/index.php/Timetables/index"><?php echo ('Time Table'); ?> </td>
	
</tr>
</table>
<br>

<h1>Student Details</h1>
<br>
<?php echo $this->Html->link('Add Student', array('controller' => 'divisions', 'action' => 'setDivision')); ?>


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

