<?= $this->extend('layouts/auth') ?>

<?= $this->section('title') ?>Login<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="relative flex flex-col items-center justify-center h-screen overflow-hidden">
        <div class="w-full p-6 bg-primary-focus border-t-4 border-base-200 rounded-md shadow-md border-top lg:max-w-lg">
            <h1 class="text-3xl font-semibold text-center">PKBM Maju Lestari</h1>

            <?php if (session('error') !== null) : ?>
                <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
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

            <form class="space-y-4"action="<?= url_to('login') ?>" method="post">
            <?= csrf_field() ?>

                <!-- email -->
                <div>
                    <label for="floatingEmailInput" class="label">
                        <span class="text-base">Email</span>
                    </label>
                    <input type="email" class="w-full input input-bordered" id="floatingEmailInput" name="email" inputmode="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required>
                </div>

                <!-- password -->
                <div>
                    <label for="floatingPasswordInput" class="label">
                        <span class="text-base">Password</span>
                    </label>
                    <input type="password" class="w-full input input-bordered" id="floatingPasswordInput" name="password" inputmode="text" autocomplete="current-password" placeholder="<?= lang('Auth.password') ?>" required>
                </div>

                <!-- Remember me -->
                <?php if (setting('Auth.sessionConfig')['allowRemembering']): ?>
                    <div class="form-control">
                        <label class="label cursor-pointer">
                            <span class="label-text">Ingat Saya</span> 
                            <input type="checkbox" name="remember" class="checkbox checkbox-success" <?php if (old('remember')): ?> checked<?php endif ?>>
                        </label>
                    </div>
                <?php endif; ?>

                <div>
                    <button class="btn btn-block">Masuk</button>
                </div>

                <?php if (setting('Auth.allowMagicLinkLogins')) : ?>
                    <a href="<?= url_to('magic-link') ?>" class="text-sm hover:underline hover:text-base-200">Lupa Password?</a>
                <?php endif ?>

            </form>
        </div>
    </div>

<?= $this->endSection() ?>