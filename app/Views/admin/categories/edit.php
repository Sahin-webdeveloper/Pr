<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Categories</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">New category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?= route_to('admin.category.update', $category['id']) ?>" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="<?= $category['title'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input name="slug" type="text" class="form-control" id="slug" placeholder="Slug" value="<?= $category['slug'] ?>">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
<?= $this->endSection() ?>