<?php echo view("layouts/header") ?>

<!-- Navbar -->
<?php echo view("layouts/top_nav") ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php echo view("layouts/mainsidebar") ?>

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>General Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <?php

    if (session()->has('errors')) {
        $errors = session()->errors;

        print_r($errors);
    }

    ?>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8 offset-2">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Product Entry Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="<?= base_url('/products/create') ?> " enctype="multipart/form-data">
                            <?= csrf_field() ?>

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Product Name</label>
                                    <input type="text" class="form-control" id="exampleInputFile" value="<?Php echo old('product_name') ?>" name="product_name" placeholder="Enter Product name">
                                    <span class="text-warning">
                                        <?php
                                        if (isset($errors['product_name'])) {
                                            echo $errors['product_name'];
                                        }
                                        ?>
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="">Product Catagory</label>
                                    <select name="cat_name" id="" class="form-control">
                                        <option value="">Select One</option>
                                        <?php foreach ($cats as $cat) { ?>
                                            <option value="<?= $cat['id'] ?>"><?= $cat['cat_name'] ?></option>
                                        <?php } ?>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Product details</label>
                                    <textarea name="product_details" class="form-control" id="summernote" cols="30" rows="5">
                                    <?Php echo old('product_details') ?>
                                </textarea>
                                    <span class="text-warning">
                                        <?php
                                        if (isset($errors['product_details'])) {
                                            echo $errors['product_details'];
                                        }
                                        ?>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Product Price</label>
                                    <input type="text" value="<?Php echo old('product_price') ?>" class="form-control" id="exampleInputFile" name="product_price" placeholder="Enter Product price">
                                    <span class="text-warning">
                                        <?php
                                        if (isset($errors['product_price'])) {
                                            echo $errors['product_price'];
                                        }
                                        ?>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Product Image</label>
                                    <input type="file" value="" class="form-control" id="exampleInputFile" name="product_img">
                                    <span class="text-warning">
                                        <?php
                                        if (isset($errors['product_img'])) {
                                            echo $errors['product_img'];
                                        }
                                        ?>
                                    </span>
                                </div>

                                <!-- <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div> -->

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                    <!-- general form elements -->

                    <!-- /.card -->

                    <!-- Input addon -->

                    <!-- /.card -->
                    <!-- Horizontal Form -->

                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
                <!-- right column -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>



<?php echo view("layouts/footer") ?>