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
                        <h2>Edit Category</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Category</li>
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
                                        <form enctype="multipart/form-data" method="POST" action="http://127.0.0.1:8000/admin/category/update">
                                            <input type="hidden" name="_token" value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">                                            <input type="hidden" name="id" value="6">
                                            <div class="input__group mb-25">
                                                <label>Category Name (English)</label>
                                                <input type="text" id="en_category_name" name="en_category_name" value="" placeholder="Name (English)">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label>Category Slug</label>
                                                <input readonly type="text" id="category_slug" name="category_slug" value="" placeholder="Name (German)">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label>Category Name (German)</label>
                                                <input type="text" id="fr_category_name" name="fr_category_name" value="" placeholder="Name (German)">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label>Icon Image</label>
                                                <input type="file" id="icon_class" name="icon_class">
                                                <img src="assets/images/icons/add-img.svg" width="50" class="mt-2" alt="icon">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label>Description (English)</label>
                                                <textarea name="en_description" id="en_description" placeholder="Description (English)"></textarea>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label>Description (German)</label>
                                                <textarea name="fr_description" id="fr_description" placeholder="Description (German)"></textarea>
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