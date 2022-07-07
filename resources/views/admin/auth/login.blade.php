@extends('admin.layouts.auth-master')

@section('page-title')
    Login
@endsection

@section('content')
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>Shifts</b>2Go</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg"><strong>Welcome Back</strong><br>Please sign in to continue</p>
            <form action="../../index3.html" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <p class="mb-1 float-right">
                    <a href="forgot-password.html">Forgot your password</a>
                </p>
                <p>&nbsp;</p>
                
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>

</div>
@endsection