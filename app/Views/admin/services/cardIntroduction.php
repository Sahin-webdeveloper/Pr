<?php $introductions = $service['introductions'] ?? null; ?>

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Introductions</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <div id="intro_group">
            <div class="form-group intro_type">
                <label for="intro_type">
                    Introduction Type
                </label>
                <select
                        name="introductions[0][type]"
                        class="form-control"
                        id="intro_type"
                >
                    <option
                        <?= (isset($introductions[0]['type']) && $introductions[0]['type'] == 'select') ?
                        'selected' :
                        null
                        ?>
                            value="select"
                    >
                        Select
                    </option>
                    <option
                        <?= (isset($introductions[0]['type']) && $introductions[0]['type'] == 'additional') ?
                        'selected' :
                        null
                        ?>
                        value="additional"
                    >
                        Additional
                    </option>
                </select>
            </div>
            <div class="form-group intro_title">
                <label for="intro_title">
                    Introduction Title
                </label>
                <input
                    name="introductions[0][title]"
                    type="text"
                    class="form-control"
                    id="intro_title"
                    placeholder="Title"
                    value="<?= $introductions[0]['title'] ?? '' ?>"
                >
            </div>
            <div class="form-group intro_description">
                <label for="intro_description">
                    Introduction Description
                </label>
                <textarea
                        name="introductions[0][description]"
                        class="form-control"
                        id="intro_description"
                        rows="3"
                ><?= $introductions[0]['description'] ?? '' ?></textarea>
            </div>

            <?php
            if ($introductions):
                foreach ($introductions as $index => $introduction):
                    if ($index === 0) continue;
            ?>
                <div class="intro-element">
                    <div class="form-group intro_title">
                        <label for="intro_type">
                            Introduction Type
                            <i class="fas fa-trash pull-right text-danger" onclick="deleteColumn(this)"></i>
                        </label>
                        <select
                            name="introductions[0][type]"
                            class="form-control"
                            id="intro_type"
                        >
                            <option
                                <?= (isset($introduction['type']) && $introduction['type'] == 'select') ?
                                    'selected' :
                                    null
                                ?>
                                value="select"
                            >
                                Select
                            </option>
                            <option
                                <?= (isset($introduction['type']) && $introduction['type'] == 'additional') ?
                                    'selected' :
                                    null
                                ?>
                                value="additional"
                            >
                                Additional
                            </option>
                        </select>
                    </div>
                    <div class="form-group intro_title">
                        <label for="intro_title">
                            Introduction Title
                        </label>
                        <input
                            name="introductions[0][title]"
                            type="text"
                            class="form-control"
                            id="intro_title"
                            placeholder="Title"
                            value="<?= $introduction['title'] ?? '' ?>"
                        >
                    </div>
                    <div class="form-group intro_description">
                        <label for="intro_description">
                            Introduction Description
                        </label>
                        <textarea
                            name="introductions[0][description]"
                            class="form-control"
                            id="intro_description"
                            rows="3"
                        ><?= $introduction['description'] ?? '' ?></textarea>
                    </div>
                </div>
            <?php endforeach; endif; ?>
        </div>
        <div class="form-group">
            <button
                type="button"
                class="btn btn-primary"
                id="add_intro"
                onclick="addIntro()"
            >+</button>
        </div>
    </div>
</div>