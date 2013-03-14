<!-- File: /app/views/exam_centers/index.ctp -->

<h1>Exam Center Details</h1>
<table>
    <tr>
        <th>Center No</th>
        <th>Center Name</th>
        <th>Capacity</th>

    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($exam_centers as $exam_center): ?>
    <tr>
        <td><?php echo $exam_center['Exam_center']['center_no']; ?></td>

	  <td><?php echo $exam_center['Exam_center']['center_name']; ?></td>
	  <td><?php echo $exam_center['Exam_center']['capacity']; ?></td>


		<td>
        <?php echo $this->Html->link('Delete', array('action' => 'delete', $exam_center['Exam_center']['center_no']), null, 'Are you sure?')?>

		<?php echo $this->Html->link('Edit', array('action' => 'edit', $exam_center['Exam_center']['center_no']));?>

        </td>
    </tr>
    <?php endforeach; ?>

</table>

<?php echo $this->Html->link('Add Exam Center', array('controller' => 'exam_centers', 'action' => 'add')); ?>