<?php $general_setting = DB::table('general_settings')->find(1); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$general_setting->site_title}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="manifest" href="{{url('manifest.json')}}">
    <link rel="icon" type="image/png" href="{{url('logo', $general_setting->site_logo)}}" />
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
                        {{$general_setting->site_title}}
                    </div>
                    <h2>Lupa Password</h2>
                    <p class="text-secondary">Silahkan masukkan email akun kamu</p>
                    @if(session()->has('delete_message'))
                    <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close"
                            data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>{{ session()->get('delete_message') }}</div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group-material">
                            <input id="email" type="email" name="name" class="input-material {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>
                            <label for="email" class="label-material">{{trans('file.Email')}}</label>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
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
