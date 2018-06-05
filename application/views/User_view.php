<table id="mytable" class="table">
    <thead>
        <tr>
            <th><strong>Name</strong></th>
            <th><strong>Email</strong></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($allUsers as $allUsers):?>
        <tr>
            <td><?php echo $allUsers->name; ?></td>
            <td><?php echo $allUsers->email; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<p><a href="<?php echo base_url(); ?>user" class="btn btn-default">Back</a></p>