<!-- File: /app/views/subjectsFace/index.ctp -->

<h1>Subject Facing</h1>
<table>
    <tr>
        <th>Nic No</th>
        <th>Subject Code</th>

    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($subjectsFaces as $subjectsFace): ?>
    <tr>
        <td><?php echo $subjectsFace['SubjectsFace']['nic_no']; ?></td>
        <td><?php echo $subjectsFace['SubjectsFace']['subject_code']; ?></td>
        <!-- td><?php echo $subject['Subject']['mean']; ?></td>
        <td><?php echo $subject['Subject']['std_deviation']; ?></td>
        <td><?php echo $subject['Subject']['a_mark']; ?></td>
        <td><?php echo $subject['Subject']['b_mark']; ?></td>
        <td><?php echo $subject['Subject']['c_mark']; ?></td>
        <td><?php echo $subject['Subject']['s_mark']; ?></td> -->

	<td>
        <?php echo $this->Html->link('Delete', array('action' => 'delete', $subjectsFace['SubjectsFace']['subject_code']), null, 'Are you sure?')?>

	<?php echo $this->Html->link('Edit', array('action' => 'edit', $subjectsFace['SubjectsFace']['subject_code']));?>

        </td>

    </tr>
    <?php endforeach; ?>

</table>

<?php echo $this->Html->link('Add Subject', array('controller' => 'subjects', 'action' => 'add')); ?>