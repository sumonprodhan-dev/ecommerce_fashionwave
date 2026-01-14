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
                                <h2>Add Coupon</h2>
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
                                                    action="http://127.0.0.1:8000/admin/coupon/create">
                                                    <input type="hidden" name="_token"
                                                        value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">
                                                    <div class="input__group mb-25">
                                                        <label for="coupon_code">Coupon code</label>
                                                        <input type="text" id="coupon_code" name="coupon_code"
                                                            value="" placeholder="Code">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="amount">Amount</label>
                                                        <input type="number" min="1" step="0.01" id="amount"
                                                            name="amount" value="1" placeholder="Amount">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="min_expenses">Minimum Expense</label>
                                                        <input type="number" min="0" step="0.01"
                                                            id="min_expenses" name="min_expenses" value=""
                                                            placeholder="Minimum Expenses">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="expire_date">Expire Date</label>
                                                        <input type="date" id="expire_date" name="expire_date"
                                                            value="">
                                                    </div>
                                                    <div class="input__button">
                                                        <button type="submit" class="btn btn-blue">Add</button>
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
