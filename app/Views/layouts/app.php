<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('includes/head') ?>
</head>
<body>
    <?= $this->include('includes/header') ?>

    <!-- start of main content -->
    <div class="main-content max-w-[100vw] px-6 pb-16 xl:pr-2">
        <?= $this->renderSection('content') ?>
    </div>
    <!-- end of main content -->

    <?= $this->include('includes/footer') ?>

    <?= $this->include('includes/script') ?>
</body>
</html>