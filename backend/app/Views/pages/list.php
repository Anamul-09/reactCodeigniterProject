<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<title>Document</title>

<style>
    th.details {
        width: 400px;
    }

    tr,
    td {
        text-align: center;
    }
</style>
</head>

<body>


    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Product Name</th>
                <th class="details">Details</th>
                <th class="details">Product Image</th>
                <th>Price</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) { ?>


                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['product_name'] ?></td>
                    <td class="details"><?= $product['product_details'] ?></td>
                    <td><img src="<?= '/' .  $product['product_img'] ?>" alt=""></td>
                    <td><?= $product['product_price'] ?></td>

                </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="pagination justify-content-end">
        <?php echo $pager->links('group1', 'bs_full') ?>
        <?php if ($pager) { ?>
            <?php $pagi_path = 'index.php/productList'; ?>
            <?php $pager->setPath($pagi_path) ?>
            <?= $pager->links() ?>

        <?php } ?>

    </div>




</body>

</html>