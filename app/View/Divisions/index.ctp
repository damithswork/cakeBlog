<!-- File: /app/views/divisions/index.ctp -->

<h1>Division Details</h1>
<table>
    <tr>
        <th>Division id</th>
        <th>Division name</th>
        <th>Center No</th>
        <th>District</th>
        <th>Practical Center No</th>

    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($divisions as $division): ?>
    <tr>
        <td><?php echo $division['Division']['id']; ?></td>
        <td><?php echo $division['Division']['division']; ?></td>
        <td><?php echo $division['Division']['center_no']; ?></td>
        <td><?php echo $division['Division']['district']; ?></td>
        <td><?php echo $division['Division']['prctcl_center']; ?></td>

        <td>
        <?php echo $this->Html->link('Delete', array('action' => 'delete', $division['Division']['id']), null, 'Are you sure?')?>
        <?php echo $this->Html->link('Edit', array('action' => 'edit', $division['Division']['id']));?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

<?php echo $this->Html->link('Add Division', array('controller' => 'divisions', 'action' => 'add')); ?>