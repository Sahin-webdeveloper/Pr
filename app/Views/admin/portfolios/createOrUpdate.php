<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Portfolio</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Portfolio</li>
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
                <h3 class="card-title">New Portfolio</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form
                action="<?= isset($portfolio) ?
                    route_to('admin.portfolio.update', $portfolio['id']) :
                    route_to('admin.portfolio.insert') ?>"
                method="post"
                enctype="multipart/form-data"
            >
                <div class="card-body">
                    <div class="form-group">
                        <label for="portfolio_category_id">Category</label>
                        <select name="portfolio_category_id" id="portfolio_category_id" class="form-control">
                            <?php foreach ($categories as $category): ?>

                                <option
                                    value="<?= $category['id'] ?>"
                                    <?= (
                                            isset($portfolio['portfolio_category_id']) &&
                                            $category['id'] === $portfolio['portfolio_category_id']
                                    ) ?
                                        'selected' : null
                                    ?>
                                >
                                    <?= $category['title'] ?>
                                </option>

                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input
                            name="title"
                            type="text"
                            class="form-control"
                            id="title"
                            placeholder="Title"
                            value="<?= $portfolio['title'] ?? null  ?>"
                        >
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea
                            name="description"
                            class="form-control"
                            id="description"
                            rows="3"
                        ><?= isset($portfolio) ? $portfolio['description'] : '' ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Images</label>
                        <input type="file" name="image" class="form-control" id="image">
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