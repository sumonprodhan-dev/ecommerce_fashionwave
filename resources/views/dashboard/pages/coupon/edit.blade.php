@extends('dashboard.layouts.app')

@push('title')
@endpush

@push('styles')
@endpush

@section('content')
    <!-- Container Fluid-->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2>Edit Coupon</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/dashboard">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Coupon</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery__area bg-style">
                        <div class="gallery__content">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-one" role="tabpanel"
                                    aria-labelledby="nav-one-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-vertical__item bg-style">
                                                <form enctype="multipart/form-data" method="POST"
                                                    action="http://127.0.0.1:8000/admin/coupon/update">
                                                    <input type="hidden" name="_token"
                                                        value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf"> <input
                                                        type="hidden" name="id" value="1">
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Coupon code</label>
                                                        <input type="text" class="form-control" id="coupon_code"
                                                            name="coupon_code" value="test1" placeholder="Code">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Amount</label>
                                                        <input type="number" min="1" step="0.01"
                                                            class="form-control" id="amount" name="amount"
                                                            value="1" placeholder="Amount">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Minimum Expense</label>
                                                        <input type="number" min="0" step="0.01"
                                                            class="form-control" id="min_expenses" name="min_expenses"
                                                            value="200" placeholder="Minimum Expenses">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Expire Date</label>
                                                        <input type="date" class="form-control" id="expire_date"
                                                            name="expire_date" value="2024-11-29">
                                                    </div>
                                                    <div class="input__button">
                                                        <button type="submit" class="btn btn-blue">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
