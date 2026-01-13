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
                <h2 class="page-title">Track Order</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                    <li class="page-item">Track Order</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- Profile Page area start here  -->
    <div class="profile-page-area section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="user-profile-right-part">
                        <div class="user-profile-content-box my-order-page-box track-my-order-page-box">

                            <div class="d-flex justify-content-between align-items-center text-black mb-5">
                                <h2 class="user-profile-content-title">Track Order</h2>
                            </div>

                            <div class="order-progress bg-white">
                                <div class="single-progress active">
                                    <span>Processing</span>
                                </div>
                                <div class="single-progress active">
                                    <span>Shipped</span>
                                </div>
                                <div class="single-progress active">
                                    <span>Delivered</span>
                                </div>
                            </div>

                            <div class="order-table mt-5">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Item</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Plaid Cotton Shirt
                                                </td>
                                                <td>
                                                    <div class="item-image-lsit d-flex align-items-center">
                                                        <div class="single-item">
                                                            <img class="order-image"
                                                                src="http://127.0.0.1:8000/uploaded_files/product_image/product-image-1.png"
                                                                alt="images">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="amount">$ 90</span>
                                                </td>
                                                <td>1.00</td>
                                                <td>$ 90</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Rosmo Namino
                                                </td>
                                                <td>
                                                    <div class="item-image-lsit d-flex align-items-center">
                                                        <div class="single-item">
                                                            <img class="order-image"
                                                                src="http://127.0.0.1:8000/uploaded_files/product_image/product-image-5.png"
                                                                alt="images">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="amount">$ 450</span>
                                                </td>
                                                <td>1.00</td>
                                                <td>$ 450</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Subtotal</td>
                                                <td>$ 540</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Tax</td>
                                                <td>$ 0</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Delivery Charge</td>
                                                <td>$ 0</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Discount (-)</td>
                                                <td>$ 0</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Grand Total</td>
                                                <td>$ 540</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
