<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.partials.head')
    @stack('title')
</head>

<body class="direction-ltr">
    <!-- Preloader Area Start -->
    <div id="preloader">
        <div id="status">
            <img src="{{ asset('frontend/assets/images/preloader.svg') }}" alt="img" />
        </div>
    </div>
    <!-- Preloader Area End -->

    <!-- header component start here  -->
    @include('frontend.partials.header')
    <!-- header component end here  -->

    <!-- mobile-header-area area start here  -->
    <!-- mobile-menu-area area start here  -->
    @include('frontend.partials.mobile-header')
    <!-- mobile-header-area area end here  -->
    <!-- mobile-menu-area area end here  -->

    <!-- Cart Offcanvas Sidebar Menu area Start here  -->
    @include('frontend.partials.cart-sidebar')
    <!-- Cart Offcanvas Sidebar Menu area end here  -->
    <div id="CartDeleteFromSession" data-url="/cart/delete"></div>
    <div id="CartIncrementFromSession" data-url="/cart/increase"></div>
    <div id="CartDecrementFromSession" data-url="/cart/decrease"></div>

    @yield('content')
    
    
    <div id="AddToCompareItemUrl" data-url="compare.html/add"></div>
    <div id="AddToCartIntoSession" data-url="/cart/add"></div>
    <div id="productWishlistUrl" data-url="wishlist.html/add"></div>
    <div id="currency-price-url" data-url="/currency-price"></div>
    <div id="currency-symbol-url" data-url="/currency-symbol"></div>
    <div id="productImgAsset" data-url="/uploaded_files/product_image"></div>

    <!-- footer area start here -->
    @include('frontend.partials.footer')
    <!-- footer area end here -->
    <div id="DoNotSubscribe" data-url="/do_not_subscribe"></div>
    <div id="SubscribeStore" data-url="/subscribe/store"></div>
    <div class="modal fade common-modal" id="trackOrderModal" tabindex="-1" aria-labelledby="trackOrderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Track Order</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="public-order-track.html" method="POST">
                        <input type="hidden" name="_token" value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Order Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="order_number"
                                placeholder="Enter order number">
                        </div>
                        <div class="modal-btn-wrap text-end">
                            <button type="submit" class="primary-btn">Track</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade common-modal" id="trackOrderModal" tabindex="-1" aria-labelledby="trackOrderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Track Order</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="public-order-track.html" method="POST">
                        <input type="hidden" name="_token" value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Order Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" name="order_number"
                                placeholder="Enter order number">
                        </div>
                        <div class="modal-btn-wrap text-end">
                            <button type="submit" class="primary-btn">Track</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade common-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="">Login</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/user/login-modal" method="POST">
                        <input type="hidden" name="_token" value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password">
                        </div>

                        <div class="modal-btn-wrap text-end">
                            <button type="submit" class="primary-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="DoNotSubscribe" data-url="/do_not_subscribe"></div>
    <div id="SubscribeStore" data-url="/subscribe/store"></div>

    <!-- Js file  -->
    @include('frontend.partials.js')
    @stack('scripts')
</body>

</html>