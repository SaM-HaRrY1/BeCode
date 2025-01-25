<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?=lang('Auth.loginTitle')?></h1>
                                </div>

                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <form action="<?= url_to('login') ?>" method="post" class="user"> <?= csrf_field() ?>

                            <?php if ($config->validFields == ['email']): ?>
                                    <div class="form-group">
                                        <input type="email" name="login" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.email')?>">
                                            <div class="invalid-feedback">
								                <?= session('errors.login') ?>
							                </div>
                                    </div>
                            <?php else: ?>
                                <div class="form-group">
                                        <input type="text" name="login" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.emailOrUsername')?>">
                                            <div class="invalid-feedback">
								                <?= session('errors.login') ?>
							                </div>
                                    </div>
                            <?php endif; ?>
                            
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
                                            <div class="invalid-feedback">
								                <?= session('errors.password') ?>
							                </div>
                                    </div>

                                    <?php if ($config->allowRemembering): ?>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                <?=lang('Auth.rememberMe')?>
                                            </label>
                                        </div>
                                    <?php endif; ?>

                                    <button type="submit" class="btn btn-dark btn-user btn-block">
                                        <?=lang('Auth.loginAction')?>
                                    </button>
                                </form>
                                <hr>
                                <!-- <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div> -->
                            <?php if ($config->allowRegistration) : ?>
                                <div class="text-center">
                                    <p><a class="small" href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
                                </div> 
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?= $this->endSection(); ?>