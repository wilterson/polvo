@extends('auth.template.login')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Trekking</b>Store</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                           autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input id="password" type="password" class="form-control" name="password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <p class="help-block text-center"><b>Login:</b> admin@admin.com</p>
        <p class="help-block text-center"><b>Senha:</b> secret</p>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
@endsection