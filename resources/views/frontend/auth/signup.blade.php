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
                <h2 class="page-title">Sign Up</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                    <li class="page-item">Sign Up</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- about us area start here  -->
    <div class="sign-in-page sign-up-page section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-5">
                    <div class="login-wrap">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="far fa-user"></span>
                        </div>
                        <h1 class="text-center mb-4">Sign Up</h1>
                        <form class="login-form" action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="Name" name="name"
                                    required="">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control rounded-left" placeholder="Email" name="email"
                                    required="">
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" class="form-control rounded-left" placeholder="Password"
                                    name="password" required="">
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" class="form-control rounded-left" placeholder="Confirm Password"
                                    name="password_confirmation" required="">
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                    class="form-control btn btn-primary rounded submit px-3 primary-btn auth-btn">Sign
                                    Up</button>
                            </div>
                            <hr>
                            <div class="form-group">
                                <a href="/user/auth/google"
                                    class="form-control btn btn-primary rounded submit px-3 google-btn"><i
                                        class="fab fa-google"></i> Login With Google</a>
                            </div>
                            <hr>

                            <div class="already-have-account">
                                Already have an account?<a href="{{ route('login') }}" class="forget-password-link">Sign
                                    In</a>
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
