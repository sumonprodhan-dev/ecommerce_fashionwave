@extends('dashboard.layouts.app')

@push('title')
@endpush

@push('styles')
    <style>
        #ProductTable {
            table-layout: fixed;
            /* Column width control korbe */
            width: 100% !important;
        }

        #ProductTable td,
        #ProductTable th {
            white-space: normal !important;
            /* Lekha boro hole niche neme asbe */
            word-break: break-word;
            /* Boro boro nam kete niche neme asbe */
            vertical-align: middle;
        }
    </style>
@endpush

@section('content')
    <!-- Container Fluid-->
    <div class="page-content">
        <div class="container-fluid">
            <div id="table-url" data-url="http://127.0.0.1:8000/admin/product"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2>Product</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/dashboard">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Product</li>
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
                            <table id="ProductTable" class="row-border data-table-filter table-style dataTable no-footer"
                                role="grid" aria-describedby="ProductTable_info" style="width: 100%; !important">

                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" rowspan="1" colspan="1" style="width: 5%;"
                                            aria-label="#">#</th>
                                        <th class="sorting" tabindex="0" aria-controls="ProductTable" rowspan="1"
                                            colspan="1" style="width: 10%;"
                                            aria-label="Image: activate to sort column ascending">Image</th>
                                        <th class="sorting" tabindex="0" aria-controls="ProductTable" rowspan="1"
                                            colspan="1" style="width: 25%;"
                                            aria-label="Product Name: activate to sort column ascending">Product
                                            Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="ProductTable" rowspan="1"
                                            colspan="1" style="width: 15%;"
                                            aria-label="Category: activate to sort column ascending">Category
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="ProductTable" rowspan="1"
                                            colspan="1" style="width: 15%;"
                                            aria-label="Brand: activate to sort column ascending">Brand</th>
                                        <th class="sorting" tabindex="0" aria-controls="ProductTable" rowspan="1"
                                            colspan="1" style="width: 15%;"
                                            aria-label="Price: activate to sort column ascending">Price</th>
                                        <th class="sorting" tabindex="0" aria-controls="ProductTable" rowspan="1"
                                            colspan="1" style="width: 5%;"
                                            aria-label="Status: activate to sort column ascending">Status</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10%;"
                                            aria-label="Action">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody" class="data-table">
                                    @forelse ($products as $key => $product)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $key + 1 }}</td>
                                            <td><img src="http://127.0.0.1:8000/uploaded_files/product_image/product-image-3.png"
                                                    border="0" width="50" class="img-rounded" align="center"></td>
                                            <td>{{ $product->en_name }}</td>
                                            <td>{{ $product->category->en_name }}</td>
                                            <td>{{ $product->brand->en_name }}</td>
                                            <td><span
                                                    class="badge admin-new-price text-success">{{ $product->price }}</span>
                                                @if ($product->discount_price > 0)
                                                    <span
                                                        class="badge admin-old-price text-danger">{{ $product->discount_price }}</span>
                                                @endif
                                                <span
                                                    class="badge admin-new-price text-danger text-decoration-line-through">00</span>
                                            </td>

                                            <td>{{ $product->status }}</td>
                                            <td>
                                                <div class="action__buttons"><a href="product-edit.html"
                                                        class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a><a
                                                        href="http://127.0.0.1:8000/admin/product/inactive/11"
                                                        class="btn-action"><i class="fas fa-toggle-on"></i></a><a
                                                        href="http://127.0.0.1:8000/admin/product/delete/11"
                                                        class="btn-action delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                    @empty
                                        <div>
                                            <h4 class="text-center">No Product Found</h4>
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
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
