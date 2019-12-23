@extends('layouts.auth')
@section('header')
<title>INSPINIA | Login</title>
@endsection
@section('body')
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>
            <h1 class="logo-name">IN+</h1>
        </div>
        <h3>Welcome to IN+</h3>
        <p class="error_status"></p>
        <p class="success_status"></p>
        <form class="m-t" role="form" action="" id="formSignin" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <div class="form-group">
                <a href="/auth/facebook" class="btn btn-block btn-social btn-facebook">
                    <span class="fa fa-facebook"></span> Sign in with Facebook
                </a>
                <a href="/auth/google" class="btn btn-block btn-social btn-google">
                    <span class="fa fa-google"></span> Sign in with Google
                </a>
            </div>
            <a href="/forgotPassword"><small>Forgot password?</small></a>
            <p class="text-muted text-center"><small>Do not have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="/register">Create an account</a>
        </form>
        <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
    </div>
</div>
@endsection
@section('footer')
<script>
    $(document).ready(function() {
        $('#formSignin').submit(function(e) {
            e.preventDefault();
            var email = $('[name=email]').val();
            var password = $('[name=password]').val();
            $.ajax({
                url: '/login',
                type: 'post',
                data: {
                    email: email,
                    password: password,
                },
                error: function(err) {
                    console.log(err);
                },
                success: function(data) {
                    console.log(data);
                    if (data.status === 0) {
                        $('.error_status').text('Wrong account or password!');
                        $('.error_status').css('display', 'block');
                    } else {
                        window.location.href = data.redirect;
                    }
                }
            });
            return false;
        });
    });
</script>
@endsection