<?php echo view("layouts/product_header") ?>

<!-- Navbar -->
<?php echo view("layouts/top_nav") ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php echo view("layouts/mainsidebar") ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>


                    <?php if (session()->has('msg')) : ?>
                        <script>
                            function tempAlert(msg, duration) {
                                var el = document.createElement("div");
                                el.setAttribute('class', 'alert alert-success text-white');
                                el.setAttribute("style", "position:absolute;top:20%;left:50%;");
                                el.innerHTML = msg;
                                setTimeout(function() {
                                    el.parentNode.removeChild(el);
                                }, duration);
                                document.body.appendChild(el);
                            }

                            tempAlert('<?= session()->msg; ?>', 5000);
                        </script>
                    <?php endif; ?>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Products</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">

                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Product Name</th>
                                        <th>Details</th>
                                        <th>Price</th>
                                        <th>Catagory </th>
                                        <th>Images</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($products as $index => $product) { ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td><?php echo $product['product_name'] ?></td>
                                            <td><?php echo $product['product_details'] ?></td>
                                            <td><?php echo $product['product_price'] ?></td>
                                            <td><?php echo $product['product_catagory'] ?></td>
                                            <td><img class="imglist" src="<?= '/' . $product['product_img'] ?>" style="width:120px" /></td>
                                            <td class="d-flex pt ">
                                                <a href="<?= site_url("/products/edit/" . $product['id']) ?>" class="btn btn-primary pr"><i class="fa fa-pen"></i></i></a>

                                                <form method="post" action="<?= site_url("/products/delete/" . $product['id']) ?>">
                                                    <?= csrf_field() ?>
                                                    <button class="btn btn-danger" onclick="return confirm('Are you Sure?')"><i class="fa fa-trash"></i></button>
                                                </form>


                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>



                    <!-- /.card -->
                </section>
            </div>
            <!-- DIRECT CHAT -->

            <!-- /.card-body -->

        </div>
        <!-- /.card -->
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->

    <!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php echo view("layouts/product_footer") ?>