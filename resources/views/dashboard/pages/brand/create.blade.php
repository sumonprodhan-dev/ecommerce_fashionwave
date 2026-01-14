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
                        <h2>Add Brand</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Brand</li>
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
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-vertical__item bg-style">
                                        <form enctype="multipart/form-data" method="POST"
<<<<<<< HEAD
                                            action="http://127.0.0.1:8000/admin/brand/create">
                                            <input type="hidden" name="_token" value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">                                            <div class="input__group mb-25">
                                                <label>Brand Name (English)</label>
                                                <input type="text" id="en_brand_name" name="en_brand_name"
=======
                                            action="{{ route('admin.brand.store') }}">
                                            @csrf                                          
                                            <div class="input__group mb-25">
                                                <label>Brand Name (English)</label>
                                                <input type="text" id="en_brand_name" name="en_name"
>>>>>>> 9509e7274e11799fea425ef941f59fafcf719a3d
                                                    value="" placeholder="Name (English)">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label>Brand Slug</label>
<<<<<<< HEAD
                                                <input type="text" id="brand_slug" name="brand_slug"
=======
                                                <input type="text" id="brand_slug" name="slug"
>>>>>>> 9509e7274e11799fea425ef941f59fafcf719a3d
                                                    value="" placeholder="brand slug">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label>Brand Name (German)</label>
<<<<<<< HEAD
                                                <input type="text" id="fr_brand_name" name="fr_brand_name"
=======
                                                <input type="text" id="fr_brand_name" name="gn_name"
>>>>>>> 9509e7274e11799fea425ef941f59fafcf719a3d
                                                    value="" placeholder="Name (German)">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label>Brand Image</label>
<<<<<<< HEAD
                                                <input type="file" class="putImage2" name="brand_image"
                                                    id="brandimage">
                                                <img src="" id="target2" />
                                            </div>
=======
                                                <input type="file" class="putImage2" name="image"
                                                    id="brandimage">
                                                <img src="" id="target2" />
                                            </div>
                                            {{-- status --}}
                                            <div class="input__group mb-25">
                                                <label for="status">Status</label>
                                                <select name="status" id="status">
                                                    <option value="active">Active</option>
                                                    <option value="inactive">Inactive</option>
                                                </select>
                                            </div>
>>>>>>> 9509e7274e11799fea425ef941f59fafcf719a3d
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