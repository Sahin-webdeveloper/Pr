<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Detail</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <div class="form-group">
            <label for="title">Title</label>
            <input
                name="title"
                type="text"
                class="form-control"
                id="title"
                placeholder="Title"
                value="<?= isset($service) ? $service['title'] : '' ?>"
            >
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea
                name="description"
                class="form-control"
                id="description"
                rows="3"
            ><?= isset($service) ? $service['description'] : '' ?></textarea>
        </div>
    </div>
</div>