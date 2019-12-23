@extends('layouts.auth')
@section('header')
<title>INSPINIA | Register</title>
@endsection
@section('body')
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>
            <h1 class="logo-name">IN+</h1>
        </div>
        <h3>Register to IN+</h3>
        <p class="error_status"></p>
        <p class="success_status"></p>
        <form class="m-t" role="form" action="" id="formRegister" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="row" id="pwd-container1">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input type="password" class="form-control example1" name="password" id="password1" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <div class="pwstrength_viewport_progress"></div>
                    </div>
                </div>
            </div>
            <!-- <div class="form-group">
                <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
            </div> -->
            <button type="submit" class="btn btn-primary block full-width m-b submit_button">Register</button>

            <p class="text-muted text-center"><small>Already have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="/login">Login</a>
        </form>
        <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
    </div>
</div>
@endsection
@section('footer')
<script>
    $(document).ready(function() {
        var options1 = {};
        options1.ui = {
            container: "#pwd-container1",
            showVerdictsInsideProgressBar: true,
            viewports: {
                progress: ".pwstrength_viewport_progress"
            }
        };
        options1.common = {
            debug: false,
        };
        $('.example1').pwstrength(options1);
    });
</script>
<script>
    $(document).ready(function() {
        $('#formRegister').submit(function(e) {
            e.preventDefault();
            var name = $('[name=name]').val();
            var email = $('[name=email]').val();
            var password = $('[name=password]').val();
            $.ajax({
                url: '/register',
                type: 'post',
                data: {
                    name: name,
                    email: email,
                    password: password,
                },
                error: function(err) {
                    console.log(err);
                },
                success: function(data) {
                    if (data.email === 'false') {
                        $('.error_status').text('Email already exists!');
                        $('.error_status').css('display', 'block');
                    } else {
                        $('.error_status').css('display', 'none');
                        $('.success_status').text('Your registration was successful! Redirecting in 5 seconds...');
                        $('.success_status').css('display', 'block');
                        $('.submit_button').attr('disabled', 'true');
                        $('[name=name]').attr('disabled', 'true');
                        $('[name=email]').attr('disabled', 'true');
                        $('[name=password]').attr('disabled', 'true');

                        setTimeout(function() {
                            window.location.href = data.redirect;
                        }, 5000);
                    }
                }
            });
            return false;
        });
    });
</script>
@endsection