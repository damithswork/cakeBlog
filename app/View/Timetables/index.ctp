<!-- File: /app/views/papers/index.ctp -->
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

<h1>Time table</h1>
<table>
    <tr>
        <!-- <th>Id</th> -->
        <th>Subject code</th>
        <th>Part</th>
        <th>Percentage</th>
        <th>Date</th>
        <th>Time</th>
	<th>Practical</th>

    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($timetables as $timetable): ?>
    <tr>
        <!-- <td><?php echo $timetable['Timetable']['id']; ?></td> -->
        <td><?php echo $timetable['Timetable']['subject_code']; ?></td>
        <td><?php echo $timetable['Timetable']['part']; ?></td>
        <td><?php echo $timetable['Timetable']['percentage']; ?></td>
        <td><?php echo $timetable['Timetable']['date']; ?></td>
        <td><?php echo $timetable['Timetable']['time']; ?></td>
	<td><?php echo $timetable['Timetable']['prctcl_or_not']; ?></td>	
        <td>        
            <?php echo $this->Html->link('Delete', array('action' => 'delete', $timetable['Timetable']['id']), null, 'Are you sure?')?>

            <?php echo $this->Html->link('Edit', array('action' => 'edit', $timetable['Timetable']['id']));?>
        </td>

    </tr>
    <?php endforeach; ?>

</table>

<?php echo $this->Html->link('Add Paper', array('controller' => 'papers', 'action' => 'add')); ?>


