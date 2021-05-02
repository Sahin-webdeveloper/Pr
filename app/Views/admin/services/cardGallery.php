<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Gallery</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <div class="form-group">
            <label for="gallery_description">Description</label>
            <textarea
                name="gallery[description]"
                class="form-control"
                id="gallery_description"
                rows="3"
            ><?= (isset($service) && isset($service['gallery'])) ? $service['gallery']['description'] : '' ?></textarea>
        </div>

        <div class="form-group">
            <label for="gallery_images">Images</label>
            <input type="file" name="gallery[images][]" class="form-control" multiple id="gallery_images">
        </div>
    </div>
</div>