<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    @include('layouts.assets-top')
    <link rel="stylesheet" href="{{asset('../assets/vendor/css/pages/page-auth.css')}}" />
</head>

<body>
    <!-- Content -->

   @if(count($errors) > 0)
    @foreach( $errors->all() as $message )
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span>{{ $message }}</span>
    </div>
    @endforeach
    @endif

    <div class="container">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="index.html" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">      
                                </span>
                                <span class="app-brand-text demo text-body fw-bolder">Login</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Welcome to U-Rank! 👋</h4>

                        <form class="mb-3" action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username"
                                    placeholder="Enter your username" autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label for="username" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>New on our platform?</span>
                            <a href="{{ route('register') }}">
                                <span>Create an account</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    @include('layouts.assets-bottom')
</body>

</html>