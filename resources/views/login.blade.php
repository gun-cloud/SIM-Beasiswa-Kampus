@include('partials.styles')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo-polmed.png" type="image/png">
    <title>Beasiswa Polmed | Login </title>
</head>
<body>
    <div class="col-md-6 offset-md-3">
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
    </div>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="../../images/logo-polmed.svg" alt="logo">
                            </div>
                            <h4>Hello! Admin, let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <form action="{{route('login.proses')}}" method="POST" class="pt-3">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</body>
</html>
@include('partials.scripts')
