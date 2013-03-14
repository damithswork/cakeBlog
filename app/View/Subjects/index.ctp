<!-- File: /app/views/subjects/index.ctp -->

<h1>Subject Details</h1>
<table>
    <tr>
        <th>Subject Code</th>
        <th>Subject Name</th>
        <th>Mean</th>
	<th>Standard Deviation</th>
        <th>A</th>
        <th>B</th>
        <th>C</th>
        <th>S</th>

    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($subjects as $subject): ?>
    <tr>
        <td><?php echo $subject['Subject']['subject_code']; ?></td>
        <td><?php echo $subject['Subject']['subject_name']; ?></td>
        <td><?php echo $subject['Subject']['mean']; ?></td>
        <td><?php echo $subject['Subject']['std_deviation']; ?></td>
        <td><?php echo $subject['Subject']['a_mark']; ?></td>
        <td><?php echo $subject['Subject']['b_mark']; ?></td>
        <td><?php echo $subject['Subject']['c_mark']; ?></td>
        <td><?php echo $subject['Subject']['s_mark']; ?></td>

	<td>
        <?php echo $this->Html->link('Delete', array('action' => 'delete', $subject['Subject']['subject_code']), null, 'Are you sure?')?>

	<?php echo $this->Html->link('Edit', array('action' => 'edit', $subject['Subject']['subject_code']));?>

        </td>

    </tr>
    <?php endforeach; ?>

</table>

<?php echo $this->Html->link('Add Subject', array('controller' => 'subjects', 'action' => 'add')); ?>