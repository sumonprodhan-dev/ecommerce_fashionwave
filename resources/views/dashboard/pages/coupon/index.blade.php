@extends('dashboard.layouts.app')

@push('title')
@endpush

@push('styles')
@endpush

@section('content')
    <!-- Container Fluid-->
    <div class="page-content">
        <div class="container-fluid">

            <div id="table-url" data-url="http://127.0.0.1:8000/admin/coupon"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2>Coupons</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/dashboard">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Coupons</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="customers__area bg-style mb-30">
                        <div class="item-title">
                            <div class="col-xs-6">
                                <a href="coupon-create.html" class="btn btn-md btn-info">Add Coupon</a>
                            </div>
                        </div>
                        <div class="customers__table">
                            <div id="CouponTable_wrapper" class="dataTables_wrapper no-footer">
                                <div class="dataTables_length" id="CouponTable_length"><label>Show <select
                                            name="CouponTable_length" aria-controls="CouponTable" class="">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                                <div id="CouponTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                            class="" placeholder="" aria-controls="CouponTable"></label></div>
                                <div id="CouponTable_processing" class="dataTables_processing" style="display: none;">
                                    Processing...</div>
                                <table id="CouponTable" class="row-border data-table-filter table-style dataTable no-footer"
                                    role="grid" aria-describedby="CouponTable_info" style="width: 1214px;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="CouponTable"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Coupon Code: activate to sort column descending"
                                                style="width: 104px;">Coupon Code</th>
                                            <th class="sorting" tabindex="0" aria-controls="CouponTable" rowspan="1"
                                                colspan="1" aria-label="Amount: activate to sort column ascending"
                                                style="width: 222px;">Amount</th>
                                            <th class="sorting" tabindex="0" aria-controls="CouponTable" rowspan="1"
                                                colspan="1" aria-label="Min Expenses: activate to sort column ascending"
                                                style="width: 200px;">Min Expenses</th>
                                            <th class="sorting" tabindex="0" aria-controls="CouponTable" rowspan="1"
                                                colspan="1" aria-label="Expire Date: activate to sort column ascending"
                                                style="width: 222px;">Expire Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="CouponTable" rowspan="1"
                                                colspan="1" aria-label="Validity: activate to sort column ascending"
                                                style="width: 113px;">Validity</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Action"
                                                style="width: 113px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Speical01</td>
                                            <td>1</td>
                                            <td>200</td>
                                            <td>2025-01-31</td>
                                            <td><span class="status active">Valid</span></td>
                                            <td>
                                                <div class="action__buttons"><a href="coupon-edit.html"
                                                        class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a><a
                                                        href="" class="btn-action delete"><i
                                                            class="fas fa-trash-alt"></i></a></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="dataTables_info" id="CouponTable_info" role="status" aria-live="polite">
                                    Showing 1 to 1 of 1 entries</div>
                                <div class="dataTables_paginate paging_simple_numbers" id="CouponTable_paginate"><a
                                        class="paginate_button previous disabled" aria-controls="CouponTable"
                                        data-dt-idx="0" tabindex="-1" id="CouponTable_previous">Previous</a><span><a
                                            class="paginate_button current" aria-controls="CouponTable" data-dt-idx="1"
                                            tabindex="0">1</a></span><a class="paginate_button next disabled"
                                        aria-controls="CouponTable" data-dt-idx="2" tabindex="-1"
                                        id="CouponTable_next">Next</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row-->
        </div>
    </div>
@endsection

@push('scripts')
@endpush
