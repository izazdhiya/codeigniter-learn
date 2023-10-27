<?= $this->extend('layouts/app') ?>

<?= $this->section('title') ?>Aktivitas<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <div class="toast toast-top toast-end">

    <?php if (session('error') !== null) : ?>
        <div class="alert alert-danger" role="alert">
            <span><?= session('error') ?></span>
        </div>
    <?php elseif (session('errors') !== null) : ?>
        <div class="alert alert-danger" role="alert">
            <?php if (is_array(session('errors'))) : ?>
                <?php foreach (session('errors') as $error) : ?>
                    <?= $error ?>
                    <br>
                <?php endforeach ?>
            <?php else : ?>
                <?= session('errors') ?>
            <?php endif ?>
        </div>
    <?php endif ?>

    <?php if (session('message') !== null) : ?>
        <div class="alert alert-success" role="alert"><?= session('message') ?></div>
    <?php endif ?>

    </div>


<?= $this->endSection() ?>