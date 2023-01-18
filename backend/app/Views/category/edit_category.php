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
                    <h1 class="m-0">Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard </li>
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
                            <h3 class="card-title ">Edit Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <form method="post" action="<?= base_url('category/update/' . $cat['id']) ?>" enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Category Name:</label>
                                    <input type="text" class="form-control" value="<?= $cat['cat_name'] ?>" id="name" placeholder="Enter Category Name" name="cat_name">

                                </div>

                                <div class="mb-3">
                                    <label for="details" class="form-label">Category Details:</label>
                                    <textarea name="cat_details" class="form-control" id="" cols="30" rows="5"><?= $cat['cat_details'] ?></textarea>

                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>

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