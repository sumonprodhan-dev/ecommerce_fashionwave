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
                <h2 class="page-title">Rosmo Namino</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a>
                    </li>
                    <li class="page-item">Product Single Page</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- product-single-area start here  -->
    <div class="product-single-area section-top">
        <div class="container">
            <div class="product-single-details">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-single-left">
                            <div class="product-thumbnail-image">
                                <ul class="product-thumb-silide slider slider-nav">

                                    <li class="single-item"><img class="single-item-image"
                                            src="assets/images/products/tshirt.png" alt="product" /></li>
                                    <li class="single-item"><img class="single-item-image"
                                            src="assets/images/products/tshirt.png" alt="product" />
                                    </li>
                                    <li class="single-item"><img class="single-item-image"
                                            src="assets/images/products/tshirt.png" alt="product" />
                                    </li>
                                    <li class="single-item"><img class="single-item-image"
                                            src="assets/images/products/tshirt.png" alt="product" /></li>
                                    <li class="single-item"><img class="single-item-image"
                                            src="assets/images/products/tshirt.png" alt="product" /></li>
                                </ul>
                            </div>
                            <div class="product-slier-big-image">
                                <div class="product-priview-slide slider slider-for">
                                    <div class="single-slide">
                                        <img class="slide-image" src="assets/images/products/tshirt.png" alt="product" />
                                    </div>
                                    <div class="single-slide">
                                        <img class="slide-image" src="assets/images/products/tshirt.png" alt="product" />
                                    </div>
                                    <div class="single-slide">
                                        <img class="slide-image" src="assets/images/products/tshirt.png" alt="product" />
                                    </div>
                                    <div class="single-slide">
                                        <img class="slide-image" src="assets/images/products/tshirt.png" alt="product" />
                                    </div>
                                    <div class="single-slide">
                                        <img class="slide-image" src="assets/images/products/tshirt.png" alt="product" />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-single-right">
                            <div class="product-info">
                                <h4 class="product-catagory">HOT - COLLECTION</h4>

                                <h3 class="product-name">
                                    Rosmo Namino</h3>
                                <!-- This is server side code. User can not modify it. -->
                                <ul class="product-review">
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>

                                <div class="product-price">
                                    <span class="price">$ 450</span>
                                    <span class="regular-price">$ 500</span>
                                </div>

                                <p class="note-text">Please note: We have this product in United States warehouse. If
                                    destination means you can receive the parcel faster and earlier than expected.
                                </p>

                                <div class="product-color-area">
                                    <div class="variable-single-item color-switch">
                                        <div class="product-variable-color">
                                            <label>
                                                <input type="hidden" name="colorId" value="1">
                                                <input name="productColor" class="color-select" type="radio"
                                                    value="1">
                                                <span style="background:#FF0000;"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-size-area">
                                    <h4 class="size-title">Type: Physical
                                    </h4>
                                    <ul class="size-switch">
                                        <input type="hidden" class="sizeValue" name="productSize" value="1">
                                        <li class="single-size activeSize" data-size="1">
                                            S</li>
                                    </ul>
                                </div>

                                <div class="prdouct-btn-wrapper d-flex align-items-center">
                                    <div class="cart-plus-minus">
                                        <div class="dec qtybutton btn">-</div>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                            id="product_quantity" value="1" readonly />
                                        <div class="inc qtybutton btn">+</div>
                                    </div>
                                    <a class="product-btn MyWishList" data-id="5" title="Add To Wishlist"><i
                                            class="icon flaticon-like"></i></a>
                                    <a class="product-btn CompareList" data-id="5" title="Add To Compare"><i
                                            class="icon flaticon-bar-chart"></i></a>
                                </div>
                                <div class="product-bottom-button d-flex">
                                    <a href="javascript:void(0)" class="primary-btn buyNow" data-id="5">Buy Now</a>
                                    <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                        data-id="5">Add To Cart
                                        <i class="icon fas fa-plus-circle"></i></a>
                                </div>
                            </div>
                            <div class="product-right-bottom">
                                <ul class="features">
                                    <li class="single-feature"><img class="icon"
                                            src="assets/images/delivery-van-icon.svg" alt="icon" /><strong
                                            class="feature-title">Estimated Delivery:</strong><span class="feature-text">7
                                            days</span></li>
                                    <li class="single-feature"><img class="icon"
                                            src="assets/images/shipping-return.svg" alt="icon" /><strong
                                            class="feature-title">Shipping Charge:</strong><span class="feature-text">
                                            $ 60

                                        </span>
                                    </li>
                                </ul>

                                <div class="guarantee-checkout-area">
                                    <h3 class="guarantee-title">Guarantee safe &amp; secure checkout</h3>
                                    <img src="assets/images/we_accept.webp" alt="payment-method-image" />
                                </div>

                                <div class="share-area mt-30">
                                    <h3 class="share-title">SHARE:</h3>
                                    <ul class="social-media a2a_kit">
                                        <li class="media-item"><a class="media-link facebook a2a_button_facebook"
                                                href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="media-item"><a class="media-link twitter a2a_button_twitter"
                                                href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                        <li class="media-item"><a class="media-link linkedin a2a_button_linkedin"
                                                href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li class="media-item"><a class="media-link pinterest a2a_button_pinterest"
                                                href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-bottom-info mt-50">
                <div class="nav-tabs-menu">
                    <ul class="nav nav-tabs" id="ProductTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                data-bs-target="#Description" type="button" role="tab" aria-controls="Description"
                                aria-selected="true">
                                Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Reviews-tab" data-bs-toggle="tab" data-bs-target="#Reviews"
                                type="button" role="tab" aria-controls="Reviews" aria-selected="false">
                                Reviews</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Shipping-Return-tab" data-bs-toggle="tab"
                                data-bs-target="#Shipping-Return" type="button" role="tab"
                                aria-controls="Shipping-Return" aria-selected="false">
                                Shipping &amp; Return</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Additional-Information-tab" data-bs-toggle="tab"
                                data-bs-target="#Additional-Information" type="button" role="tab"
                                aria-controls="Additional-Information" aria-selected="false">
                                Additional Information</button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="ProductTabContent">

                    <div class="tab-pane fade show active" id="Description" role="tabpanel"
                        aria-labelledby="Description-tab">
                        <div class="product-description">
                            <p class="description-text">Praesent sapien massa, convallis a pellentesque nec, egestas non
                                nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien
                                massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus.
                                Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus
                                nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus
                                magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices
                                non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies
                                porta </p>
                            <p class="description-text">Curabitur aliquet quam id dui posuere blandit. Donec rutrum
                                congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue
                                leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non
                                nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur
                                non nulla sit amet nisl tempus convallis quis ac egestas non nisi. Curabitur non nulla
                                sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra
                                eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>
                            <p class="description-text">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam
                                sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna
                                dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent
                                sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum
                                primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque,
                                auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed
                                ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                        <div class="product-reviews">
                            <div class="review-top">
                                <div class="review-top-left">
                                    <span class="review-point">0</span>
                                    <!-- This is server side code. User can not modify it. -->
                                    <ul class="product-review">
                                        <li class="review-item"><i class="flaticon-star"></i></li>
                                        <li class="review-item"><i class="flaticon-star"></i></li>
                                        <li class="review-item"><i class="flaticon-star"></i></li>
                                        <li class="review-item"><i class="flaticon-star"></i></li>
                                        <li class="review-item"><i class="flaticon-star"></i></li>
                                    </ul>
                                    <span class="review-count">0
                                        Reviews</span>
                                </div>
                            </div>

                            <div class="reviews-list">
                                <h1>No Review Yet!</h1>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Shipping-Return" role="tabpanel"
                        aria-labelledby="Shipping-Return-tab">
                        <div class="shipping-return-area">
                            <p class="return-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut
                                blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et
                                magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus
                                scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales
                                dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>
                            <p class="return-text">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis.
                                Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                            <p class="return-text">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor
                                ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam
                                sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus.
                                Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque
                                vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi
                                facilisis.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Additional-Information" role="tabpanel"
                        aria-labelledby="Additional-Information-tab">
                        <p class="additional-information-text">Quisque velit nisi, pretium ut lacinia in, elementum id
                            enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget
                            tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at
                            tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a
                            pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem
                            ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies
                            ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                            Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                            Nulla quis lorem ut libero malesuada feugiat. </p>
                        <ul class="additional-feature">
                            <li class="single-feature">
                                <h3 class="feature-title">Comodous:</h3>
                                <p class="feature-text">Comodous in tempor ullamcorper miaculis</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Mattis laoreet:</h3>
                                <p class="feature-text">Pellentesque vitae neque mollis urna mattis laoreet.</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Divamus de ametos:</h3>
                                <p class="feature-text">Divamus sit amet purus justo</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Molestie:</h3>
                                <p class="feature-text">Proin molestie egestas orci ac suscipit risus posuere loremous
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-single-area end here  -->

    <!-- Featured Products area start here  -->
    <div class="featured-productss-area section-top pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-title">Similar Products</h3>
                        <h2 class="section-title">Related Products</h2>
                    </div>
                    <div class="col-md-6 align-self-end text-md-end">
                        <a href="/product/all" class="see-btn">See All</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="/product/single/plaid-cotton-shirt"><img class="product-thumbnal"
                                    src="assets/images/products/tshirt.png" alt="product" /></a>
                            <div class="product-flags">
                                <span class="product-flag sale">NEW</span>
                                <span class="product-flag discount">-10.00</span>
                            </div>
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn MyWishList" data-id="5"
                                        href="javascript:void(0)" title="Add To Compare"><i
                                            class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn CompareList" data-id="5"
                                        href="javascript:void(0)" title="Add To Wishlist"><i
                                            class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-info text-center">
                            <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                            <h3 class="product-name"><a class="product-link"
                                    href="/product/single/plaid-cotton-shirt">Plaid Cotton Shirt</a>
                            </h3>
                            <!-- This is server side code. User can not modify it. -->
                            <ul class="product-review">
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="regular-price">$ 100</span>
                                <span class="price">$ 90</span>
                            </div>
                            <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart" data-id="5">Add
                                To
                                Cart <i class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="/product/single/plaid-cotton-shirt"><img class="product-thumbnal"
                                    src="assets/images/products/tshirt.png" alt="product" /></a>
                            <div class="product-flags">
                                <span class="product-flag sale">NEW</span>
                                <span class="product-flag discount">-10.00</span>
                            </div>
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn MyWishList" data-id="5"
                                        href="javascript:void(0)" title="Add To Compare"><i
                                            class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn CompareList" data-id="5"
                                        href="javascript:void(0)" title="Add To Wishlist"><i
                                            class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-info text-center">
                            <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                            <h3 class="product-name"><a class="product-link"
                                    href="/product/single/plaid-cotton-shirt">Plaid Cotton Shirt</a>
                            </h3>
                            <!-- This is server side code. User can not modify it. -->
                            <ul class="product-review">
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="regular-price">$ 100</span>
                                <span class="price">$ 90</span>
                            </div>
                            <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart" data-id="5">Add
                                To
                                Cart <i class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="/product/single/plaid-cotton-shirt"><img class="product-thumbnal"
                                    src="assets/images/products/tshirt.png" alt="product" /></a>
                            <div class="product-flags">
                                <span class="product-flag sale">NEW</span>
                                <span class="product-flag discount">-10.00</span>
                            </div>
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn MyWishList" data-id="5"
                                        href="javascript:void(0)" title="Add To Compare"><i
                                            class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn CompareList" data-id="5"
                                        href="javascript:void(0)" title="Add To Wishlist"><i
                                            class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-info text-center">
                            <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                            <h3 class="product-name"><a class="product-link"
                                    href="/product/single/plaid-cotton-shirt">Plaid Cotton Shirt</a>
                            </h3>
                            <!-- This is server side code. User can not modify it. -->
                            <ul class="product-review">
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="regular-price">$ 100</span>
                                <span class="price">$ 90</span>
                            </div>
                            <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart" data-id="5">Add
                                To
                                Cart <i class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="/product/single/plaid-cotton-shirt-2"><img class="product-thumbnal"
                                    src="assets/images/products/tshirt.png" alt="product" /></a>
                            <div class="product-flags">
                                <span class="product-flag sale">NEW</span>
                                <span class="product-flag discount">-10.00</span>
                            </div>
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn MyWishList" data-id="5"
                                        href="javascript:void(0)" title="Add To Compare"><i
                                            class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn CompareList" data-id="5"
                                        href="javascript:void(0)" title="Add To Wishlist"><i
                                            class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-info text-center">
                            <h4 class="product-catagory">HOT - COLLECTION</h4>
                            <h3 class="product-name"><a class="product-link"
                                    href="/product/single/plaid-cotton-shirt-2">Plaid Cotton Shirt</a>
                            </h3>
                            <!-- This is server side code. User can not modify it. -->
                            <ul class="product-review">
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="regular-price">$ 500</span>
                                <span class="price">$ 450</span>
                            </div>
                            <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart" data-id="5">Add
                                To
                                Cart <i class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
