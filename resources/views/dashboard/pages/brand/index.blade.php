@extends('dashboard.layouts.app')

@push('title')
    
@endpush

@push('styles')
    
@endpush

@section('content')
    <div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__content__left">
                        <div class="breadcrumb__title">
                            <h2>Brand List</h2>
                        </div>
                    </div>
                    <div class="breadcrumb__content__right">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Brands</li>
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
                        <div class="d-flex justify-content-between mb-4">
                            <h4>All Brands</h4>
                            <a href="{{ url('/admin/brand/add') }}" class="btn btn-blue">+ Add New Brand</a>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Brand Image</th>
                                        <th>Brand Name (EN)</th>
                                        <th>Slug</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Loop through brands --}}
                                    {{-- @foreach($brands as $key => $brand)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <img src="{{ asset($brand->brand_image) }}" width="60" height="40" style="object-fit: contain;" alt="brand">
                                        </td>
                                        <td>{{ $brand->en_brand_name }}</td>
                                        <td>{{ $brand->brand_slug }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="{{ url('/admin/brand/edit/'.$brand->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                
                                                <form action="{{ url('/admin/brand/delete/'.$brand->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this brand?')">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                    @if($brands->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center">No brands found.</td>
                                    </tr>
                                    @endif --}}
                                </tbody>
                            </table>
                        </div>
                        
                        {{-- Pagination link jodi thake --}}
                        <div class="mt-4">
                            {{-- {{ $brands->links() }} --}}
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