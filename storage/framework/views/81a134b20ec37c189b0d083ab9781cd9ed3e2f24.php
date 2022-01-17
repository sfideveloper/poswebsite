<?php $general_setting = DB::table('general_settings')->find(1); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e($general_setting->site_title); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="manifest" href="<?php echo e(url('manifest.json')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(url('logo', $general_setting->site_logo)); ?>" />
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo asset('vendor/bootstrap/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/bootstrap/css/bootstrap-datepicker.min.css') ?>"
        type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/bootstrap/css/bootstrap-select.min.css') ?>" type="text/css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo asset('vendor/font-awesome/css/font-awesome.min.css') ?>" type="text/css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo asset('css/grasp_mobile_progress_circle-1.0.0.min.css') ?>" type="text/css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet"
        href="<?php echo asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') ?>" type="text/css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo asset('css/style.default.css') ?>" id="theme-stylesheet" type="text/css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo asset('css/custom-default.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/custom.css') ?>" type="text/css">

    <!-- SCRIPT -->
    <script type="text/javascript" src="<?php echo asset('vendor/jquery/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/jquery/jquery-ui.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/jquery/bootstrap-datepicker.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/popper.js/umd/popper.min.js') ?>">
    </script>
    <script type="text/javascript" src="<?php echo asset('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/bootstrap/js/bootstrap-select.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/grasp_mobile_progress_circle-1.0.0.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/jquery.cookie/jquery.cookie.js') ?>">
    </script>
    <script type="text/javascript" src="<?php echo asset('vendor/jquery-validation/jquery.validate.min.js') ?>">
    </script>
    <script type="text/javascript"
        src="<?php echo asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')?>">
    </script>
    <script type="text/javascript" src="<?php echo asset('js/front.js') ?>"></script>
</head>

<body>
    <div class="page login-page">
        <div class="container">
            <div class="form-outer d-flex align-items-center">
                <div class="form-inner py-5 px-4 px-sm-5">
                    <div class="brand-logo">
                        <?php echo e($general_setting->site_title); ?>

                    </div>
                    <h2>Reset Password</h2>
                    <p class="text-secondary">Silahkan masukkan password baru</p>
                    <?php if(session()->has('delete_message')): ?>
                    <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close"
                            data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button><?php echo e(session()->get('delete_message')); ?></div>
                    <?php endif; ?>
                    <form method="POST" action="<?php echo e(route('password.request')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group-material">
                            <input id="email" type="email" name="name"
                                class="input-material <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                value="<?php echo e($email ?? old('email')); ?>" required autofocus>
                            <label for="email" class="label-material">Email</label>
                            <?php if($errors->has('email')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group-material">
                            <input id="password" type="password" name="password"
                                class="input-material <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" required>
                            <label for="password" class="label-material">Password</label>
                            <?php if($errors->has('password')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group-material">
                            <input id="password-confirm" type="password" name="password_confirmation"
                                class="input-material" required>
                            <label for="password-confirm" class="label-material">Konfirmasi Passowrd</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function () {
            navigator.serviceWorker.register('/saleproposmajed/service-worker.js').then(function (
                registration) {
                // Registration was successful
                console.log('ServiceWorker registration successful with scope: ', registration.scope);
            }, function (err) {
                // registration failed :(
                console.log('ServiceWorker registration failed: ', err);
            });
        });
    }

</script>
<script type="text/javascript">
    $('.admin-btn').on('click', function () {
        $("input[name='name']").focus().val('admin');
        $("input[name='password']").focus().val('admin');
    });

    $('.staff-btn').on('click', function () {
        $("input[name='name']").focus().val('staff');
        $("input[name='password']").focus().val('staff');
    });

    $('.customer-btn').on('click', function () {
        $("input[name='name']").focus().val('shakalaka');
        $("input[name='password']").focus().val('shakalaka');
    });
    // ------------------------------------------------------- //
    // Material Inputs
    // ------------------------------------------------------ //

    var materialInputs = $('input.input-material');

    // activate labels for prefilled values
    materialInputs.filter(function () {
        return $(this).val() !== "";
    }).siblings('.label-material').addClass('active');

    // move label on focus
    materialInputs.on('focus', function () {
        $(this).siblings('.label-material').addClass('active');
    });

    // remove/keep label on blur
    materialInputs.on('blur', function () {
        $(this).siblings('.label-material').removeClass('active');

        if ($(this).val() !== '') {
            $(this).siblings('.label-material').addClass('active');
        } else {
            $(this).siblings('.label-material').removeClass('active');
        }
    });

</script>
<?php /**PATH E:\Redesign Ureka\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>