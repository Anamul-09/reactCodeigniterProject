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
                    <h1 class="m-0">All Users</h1>
                    <?php
                    if (session()->has('msg')) { ?>
                        <div class="alert alert-success">
                            <?php echo session()->msg ?>
                        </div>

                    <?php  } ?>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active">All Users</li>
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
                                        <th>User Name</th>
                                        <th>Email</th>

                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $index => $user) { ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td><?php echo $user['name'] ?></td>
                                            <td><?php echo $user['email'] ?></td>
                                            <td>



                                                <form method="post" action="<?= site_url("/user_list/delete/" . $user['id']) ?>">
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