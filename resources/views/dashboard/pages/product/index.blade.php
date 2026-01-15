@extends('dashboard.layouts.app')

@push('title')
@endpush

@push('styles')
    <style>
        #ProductTable {
            table-layout: fixed;
            width: 100% !important;
        }

        #ProductTable td,
        #ProductTable th {
            white-space: normal !important;
            word-break: break-word;
            vertical-align: middle;
        }
    </style>
@endpush

@section('content')
    <!-- Container Fluid-->
    <div class="page-content">
        <div class="container-fluid">
            <div id="table-url" data-url="{{ route('admin.product.index') }}"></div>

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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
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
                                        <th class="sorting_asc" rowspan="1" colspan="1" style="width: 5%;" aria-label="#">#
                                        </th>
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
                                            colspan="1" style="width: 6%;"
                                            aria-label="Status: activate to sort column ascending">Status</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10%;"
                                            aria-label="Action">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody" class="data-table">
                                    @forelse ($products as $key => $product)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $key + 1 }}</td>
                                            <td><img src="{{ asset('uploads/products/' . $product->primary_image) }}" border="0"
                                                    width="50" class="rounded text-center" ></td>
                                            <td>{{ $product->en_name }}</td>
                                            <td>{{ $product->category->en_name }}</td>
                                            <td>{{ $product->brand->en_name }}</td>
                                            <td><span class="badge admin-new-price text-success">{{ $product->discount_price }}</span>
                                                @if ($product->price > 0)
                                                    <span
                                                        class="badge admin-old-price text-danger">{{ $product->price }}</span>
                                                @endif
                                            </td>

                                            <td>
                                                @if ($product->status == 1)
                                                    <span class="status active">Active</span>
                                                @else
                                                    <span class="status inactive">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="action__buttons">
                                                    <a href="{{ route('admin.product.edit', $product->id) }}" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="{{ route('admin.product.status', $product->id) }}"
                                                        class="btn-action fs-5">
                                                        @if($product->status)
                                                            <i class="fas fa-toggle-on text-success"></i>
                                                        @else
                                                            <i class="fas fa-toggle-off text-danger"></i>
                                                        @endif
                                                    </a>
                                                    {{-- delete --}}
                                                    <form action="{{ route('admin.product.delete', $product->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn-action delete-confirm ms-3 fs-5">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
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
    <script>
        $('.delete-confirm').click(function (event) {
            var form = $(this).closest("form");
            event.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: "Delete this product?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
@endpush