<?php echo view("layouts/header") ?>

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
                    <h1 class="m-0"> Edit Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
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
                            <h3 class="card-title">Add Products</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <?php
                            $errors = [];
                            if (session()->has('errors')) {
                                $errors = session()->errors;
                                // print_r($errors);
                            }
                            ?>

                            <form method="POST" action="<?= base_url('/products/update/' . $product['id']) ?> " enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="name">Product Name</label>
                                        <input type="text" class="form-control" id="name" value="<?= old('product_name') ? old('product_name') : $product['product_name'] ?>" name="product_name" placeholder="Enter Product name">
                                        <span class="text-warning">
                                            <?=
                                            isset($errors['product_name']) ? $errors['product_name'] : '';
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
                                        <label for="summernote">Product details</label>
                                        <textarea name="product_details" class="form-control" id="summernote">
                                    <?= old('product_details') ? old('product_details') : $product['product_details'] ?>
                                    </textarea>
                                        <span class="text-warning">
                                            <?= isset($errors['product_details']) ? $errors['product_details'] : ''; ?>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Product Price</label>
                                        <input type="text" value="<?= old('product_price') ? old('product_price') : $product['product_price'] ?>" class="form-control" id="exampleInputFile" name="product_price" placeholder="Enter Product price">
                                        <span class="text-warning">
                                            <?=
                                            isset($errors['product_price']) ? $errors['product_price'] : '';
                                            ?>
                                        </span>
                                    </div>



                                    <div class="form-group">
                                        <label for="exampleInputFile">Product Image</label>
                                        <input type="file" class="form-control" id="exampleInputFile" name="product_img">

                                        <img style="width:120px" src="<?= '/' . $product['product_img'] ?>" />




                                    </div>


                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
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

<?php echo view("layouts/footer") ?>