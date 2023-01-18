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



        <?php foreach ($orders as $index => $order) : ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $order['customerName'] ?></td>
                <td><?= $order['phone'] ?></td>
                <td><?= $order['city'] ?></td>
                <td><?= $order['orderNumber'] ?></td>
                <td><?= $order['orderDate'] ?></td>
                <td><?= $order['status'] ?></td>




            </tr>
        <?php endforeach; ?>


    </tbody>

</table>