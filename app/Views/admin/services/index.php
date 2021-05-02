<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Services</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>
                <a href="<?= route_to('admin.service.create') ?>" class="btn btn-primary btn-sm">New service</a>
                <div class="card-tools">
                    <ul class="pagination pagination-sm float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th style="width: 40px">Operation</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($services as $service): ?>
                        <tr>
                            <td><?= $service['id'] ?>.</td>
                            <td><?= $service['title'] ?></td>
                            <td>
                                <img style="width: 70px;" src="/<?= $service['gallery']['images'][0] ?? null ?>" alt="">
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a
                                            href="<?= route_to('admin.service.edit', $service['id']) ?>"
                                            class="btn btn-primary btn-sm"
                                        >
                                            Edit
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a
                                            href="<?= route_to('admin.service.delete', $service['id']) ?>"
                                            class="btn btn-danger btn-sm"
                                        >
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
<?= $this->endSection(); ?>
