<table id="example1" class="table table-bordered table-striped">

    <thead>
        <tr>
            <th>SL</th>
            <th>Employee Name</th>
            <th>Email</th>
            <th>JobTitle</th>


        </tr>
    </thead>
    <tbody>



        <?php foreach ($empls as $index => $empl) : ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $empl['firstName'] . $empl['firstName'] ?></td>
                <td><?= $empl['email'] ?></td>
                <td><?= $empl['jobTitle'] ?></td>




            </tr>
        <?php endforeach; ?>


    </tbody>

</table>