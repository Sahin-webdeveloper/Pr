<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
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
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">New service</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php
                $action = isset($service) ?
                    route_to('admin.service.update', $service['id']) :
                    route_to('admin.service.insert');
            ?>
            <form
                    action="<?= $action ?>"
                    method="post"
                    enctype="multipart/form-data"
            >
                <div class="card-body">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <?= $this->include('admin/services/cardDetail') ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <?= $this->include('admin/services/cardGallery') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <?= $this->include('admin/services/cardIntroduction') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
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

<script>

  var index = 1;

  function addIntro() {
    var introGroup = document.getElementById('intro_group');

    var type = introGroup.querySelector('.intro_type').cloneNode(true);

    var typeInput = type.querySelector('select');

    var typeLabel = type.querySelector('label');

    typeLabel.insertAdjacentHTML(
      'beforeend',
      '<i class="fas fa-trash pull-right text-danger" onclick="deleteColumn(this)"></i>'
    );

    typeInput.name = 'introductions[' + index + '][type]';
    typeInput.id = 'intro_type_' + index;
    typeInput.value = '';
    type.appendChild(typeInput);

    var title = introGroup.querySelector('.intro_title').cloneNode(true);

    var titleInput = title.querySelector('input');

    titleInput.name = 'introductions[' + index + '][title]';
    titleInput.id = 'intro_title_' + index;
    titleInput.value = '';
    title.appendChild(titleInput);

    var description = introGroup.querySelector('.intro_description').cloneNode(true);

    var descInput = description.querySelector('textarea');

    descInput.name = 'introductions[' + index + '][description]';
    descInput.id = 'intro_description_' + index;
    descInput.value = '';

    description.appendChild(descInput);

    var div = document.createElement('div');

    div.classList.add('intro-element');

    div.appendChild(type);
    div.appendChild(title);
    div.appendChild(description);

    introGroup.appendChild(div);

    index = ++index;
  }

  function deleteColumn(element) {
    var column = element.closest('.intro-element');

    column.remove();
  }
</script>

<?= $this->endSection() ?>
