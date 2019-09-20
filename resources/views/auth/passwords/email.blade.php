<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mania - Forgot Password</title>

    <link rel="stylesheet" href="{{ URL::asset('/fontawesome-free/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->

    <link rel="stylesheet" href="{{ URL::asset('/css/sb-admin-2.min.css') }}">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                @endif
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                    <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                                </div>


                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-10 control-label">E-Mail Address</label>
                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
                                            </button>
                                        </div>
                                    </div>
                                </form>


                                </form>

                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{url('/register')}}">Create an Account!</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{url('/login')}}">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>



<script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ URL::asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ URL::asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
