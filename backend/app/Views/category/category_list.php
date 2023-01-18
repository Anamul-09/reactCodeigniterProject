<?php echo view('layouts/product_header'); ?>


<!-- Navbar -->
<?= view('layouts/navbar') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?= view('layouts/mainsidebar') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">All Category</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>sSL</th>
                                        <th>Category Name</th>
                                        <th>Category Details</th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($cats as $cat) {

                                    ?>
                                        <tr>
                                            <td><?php echo $cat['id'] ?></td>
                                            <td><?php echo $cat['cat_name'] ?>
                                            </td>
                                            <td><?php echo $cat['cat_details'] ?>
                                            </td>

                                            <td>
                                                <a href="/category/edit/<?php echo $cat['id'] ?>" class="btn btn-primary">Edit</a>

                                                <form method="post" action="<?= site_url("/category/delete/" . $cat['id']) ?>">
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
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->

    <!-- /.content -->
</div>


<?php echo view('layouts/product_footer'); ?>