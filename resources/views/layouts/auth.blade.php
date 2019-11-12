<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('public/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('public/admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/plugins/textSpinners/spinners.css')}}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/plugins/bootstrapSocial/bootstrap-social.css')}}" rel="stylesheet">

    <link href="{{ asset('public/admin/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <style>
        .error_status {
            color: red;
            display: none;
        }

        .success_status {
            color: green;
            display: none;
        }
    </style>
    @yield('header')

</head>

<body class="gray-bg">

    @yield('body')

    <script src="{{asset('public/admin/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('public/admin/js/popper.min.js')}}"></script>
    <script src="{{asset('public/admin/js/bootstrap.js')}}"></script>
    <script src="{{asset('public/admin/js/plugins/iCheck/icheck.min.js')}}"></script>

    <script src="{{asset('public/admin/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('public/admin/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('public/admin/js/inspinia.js')}}"></script>
    <script src="{{asset('public/admin/js/plugins/pace/pace.min.js')}}"></script>
    <script src="{{asset('public/admin/js/plugins/pwstrength/pwstrength-bootstrap.min.js')}}"></script>
    <script src="{{asset('public/admin/js/plugins/pwstrength/zxcvbn.js')}}"></script>

    <script>
        $(document).ready(function() {
            var token = $('input[name=_token]').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': token
                }
            });
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
    @yield('footer')

</body>

</html>