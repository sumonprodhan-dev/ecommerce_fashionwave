@extends('dashboard.layouts.app')

@push('title')
@endpush

@push('styles')
@endpush

@section('content')
    <!-- Container Fluid-->
    <div class="page-content">
        <div class="container-fluid">
            <div id="table-url" data-url="http://127.0.0.1:8000/admin/orders/all"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2>Order List</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/dashboard">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="customers__area bg-style mb-30">
                        <div class="customers__table">
                            <table id="AdvertiseTable" class="row-border data-table-filter table-style">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Id</th>
                                        <th>User</th>
                                        <th>Products</th>
                                        <th>Total Amount</th>
                                        <th>Payment Method</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>hLLLm3</td>
                                        <td>William Smith</td>
                                        <td><img src="assets/images/background/bg-img.png" border="0" height="50"
                                                class="img-rounded mr-1" align="center"></td>
                                        <td>$115.00</td>
                                        <td>COD</td>
                                        <td>
                                            <span class="status text-center bg-secondary-light-varient">Processing</span>
                                            <select name="" id="" class="mt-3">
                                                <option value="">Select Status</option>
                                                <option value="">Pending</option>
                                                <option value="">Processing</option>
                                                <option value="">Shipped</option>
                                                <option value="">Delivered</option>
                                                <option value="">Returned</option>
                                            </select>
                                        </td>
                                        </td>
                                        <td>
                                            <div class="action__buttons"><a href="invoice.html" class="btn-action"
                                                    onclick="orderDetails(72)" title="Invoice"><i
                                                        class="fas fa-file-invoice"></i></a><a href=""
                                                    class="btn-action delete"><i class="fas fa-trash-alt"></i></a></div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>hLLLm3</td>
                                        <td>William Smith</td>
                                        <td><img src="assets/images/background/bg-img.png" border="0" height="50"
                                                class="img-rounded mr-1" align="center"></td>
                                        <td>$115.00</td>
                                        <td>COD</td>
                                        <td>
                                            <span class="status text-center bg-secondary-light-varient">Processing</span>
                                            <select name="" id="" class="mt-3">
                                                <option value="">Select Status</option>
                                                <option value="">Pending</option>
                                                <option value="">Processing</option>
                                                <option value="">Shipped</option>
                                                <option value="">Delivered</option>
                                                <option value="">Returned</option>
                                            </select>
                                        </td>
                                        </td>
                                        <td>
                                            <div class="action__buttons"><a href="invoice.html" class="btn-action"
                                                    onclick="orderDetails(72)" title="Invoice"><i
                                                        class="fas fa-file-invoice"></i></a><a href=""
                                                    class="btn-action delete"><i class="fas fa-trash-alt"></i></a></div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>hLLLm3</td>
                                        <td>William Smith</td>
                                        <td><img src="assets/images/background/bg-img.png" border="0" height="50"
                                                class="img-rounded mr-1" align="center"></td>
                                        <td>$115.00</td>
                                        <td>COD</td>
                                        <td>
                                            <span class="status text-center bg-secondary-light-varient">Processing</span>
                                            <select name="" id="" class="mt-3">
                                                <option value="">Select Status</option>
                                                <option value="">Pending</option>
                                                <option value="">Processing</option>
                                                <option value="">Shipped</option>
                                                <option value="">Delivered</option>
                                                <option value="">Returned</option>
                                            </select>
                                        </td>
                                        </td>
                                        <td>
                                            <div class="action__buttons"><a href="invoice.html" class="btn-action"
                                                    onclick="orderDetails(72)" title="Invoice"><i
                                                        class="fas fa-file-invoice"></i></a><a href=""
                                                    class="btn-action delete"><i class="fas fa-trash-alt"></i></a></div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>hLLLm3</td>
                                        <td>William Smith</td>
                                        <td><img src="assets/images/background/bg-img.png" border="0" height="50"
                                                class="img-rounded mr-1" align="center"></td>
                                        <td>$115.00</td>
                                        <td>COD</td>
                                        <td>
                                            <span class="status text-center bg-secondary-light-varient">Processing</span>
                                            <select name="" id="" class="mt-3">
                                                <option value="">Select Status</option>
                                                <option value="">Pending</option>
                                                <option value="">Processing</option>
                                                <option value="">Shipped</option>
                                                <option value="">Delivered</option>
                                                <option value="">Returned</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="action__buttons"><a href="invoice.html" class="btn-action"
                                                    onclick="orderDetails(72)" title="Invoice"><i
                                                        class="fas fa-file-invoice"></i></a><a href=""
                                                    class="btn-action delete"><i class="fas fa-trash-alt"></i></a></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--  modal -->
            <div class="modal fade bd-example-modal-lg" id="dataModal" tabindex="-1" role="dialog"
                aria-labelledby="invoiceModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
@endpush
