@extends('frontend.layouts.app')

@push('title')
    <title>Order Track</title>
@endpush

@push('styles')
@endpush

@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Sign In</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{ route('home') }}">Home</a></li>
                    <li class="page-item">Sign In</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- about us area start here  -->
    <div class="sign-in-page section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-5">
                    <div class="login-wrap">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="far fa-user"></span>
                        </div>
                        <h1 class="text-center mb-4">Sign In</h1>
                        <form class="login-form" method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control rounded-left" placeholder="Email" name="email"
                                    value="" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control rounded-left" placeholder="Password"
                                    name="password" value="" required="">
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                    class="form-control btn btn-primary rounded submit px-3 primary-btn auth-btn">Login</button>
                            </div>
                            <hr>
                            <div class="form-group">
                                <a href="/user/auth/google"
                                    class="form-control btn btn-primary rounded submit px-3 google-btn"><i
                                        class="fab fa-google"></i> Login With Google</a>
                            </div>
                            <hr>
                            <div class="remember-box form-group d-md-flex justify-content-between mb-0">
                                <div>
                                    <label class="checkbox-wrap">
                                        {{ __('Remember me') }}
                                        <input type="checkbox" name="remember" id="remember_me">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                {{-- <div class="text-md-end text-lg-end">
                                    {{ __('Forgot your password?') }}
                                    <a href="forgot-password.html" class="forget-password-link">Forget Password?</a>
                                </div> --}}

                                <div class="text-md-end text-lg-end">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="forget-password-link">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="already-have-account">
                                Dont have an account?<a href="{{ route('register') }}" class="forget-password-link">Sign
                                    Up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
