<!-- File: /app/views/papers/index.ctp -->

<h1>Papers Facing</h1>
<br>
<?php echo $this->Html->link('Enter marks', array('action' => 'enter'));?>
<table>
    <tr>
        <th>Nic No</th>
        <th>Subject Code</th>
        <th>Part</th>
        <th>Mark</th>
        <th>Presence</th>

    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($papers as $paper): ?>
    <tr>
        <td><?php echo $paper['Paper']['nic_no']; ?></td>
        <td><?php echo $paper['Paper']['subject_code']; ?></td>
        <td><?php echo $paper['Paper']['part']; ?></td>
        <td><?php echo $paper['Paper']['mark']; ?></td>
        <td><?php echo $paper['Paper']['presence']; ?></td>
        
	<td>
        

	<?php echo $this->Html->link('Edit', array('action' => 'edit', $paper['Paper']['pId']));?>

        </td>

    </tr>
    <?php endforeach; ?>

</table>

