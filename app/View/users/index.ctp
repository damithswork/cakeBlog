<!-- File: /app/views/students/index.ctp -->

<h1>Student Details</h1>
<table>
    <tr>
                <th>NIC No</th>
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

<?php echo $this->Html->link('Add Student', array('controller' => 'students', 'action' => 'add')); ?>