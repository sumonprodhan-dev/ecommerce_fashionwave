@extends('dashboard.layouts.app')

@push('title')
<<<<<<< HEAD
    
@endpush

@push('styles')
    
=======
@endpush

@push('styles')
>>>>>>> 9509e7274e11799fea425ef941f59fafcf719a3d
@endpush

@section('content')
    <div class="page-content">
<<<<<<< HEAD
                <div class="container-fluid">
                        <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Add Category</h2>
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
                                        <form enctype="multipart/form-data" method="POST" action="http://127.0.0.1:8000/admin/category/create">
                                            <input type="hidden" name="_token" value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">                                            <div class="input__group mb-25">
                                                <label>Category Name (English)</label>
                                                <input type="text" id="en_category_name" name="en_category_name" value="" placeholder="Name (English)">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label>Category Slug</label>
                                                <input type="text" id="category_slug" name="category_slug"  value="" placeholder="category slug">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label>Category Name (German)</label>
                                                <input type="text" id="fr_category_name" name="fr_category_name"  value="" placeholder="Name (German)">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label>Icon Image</label>
                                                <input type="file" id="icon_class" name="icon_class" value="" placeholder="Icon">
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
                                                <button type="submit" class="btn btn-blue">Add</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

=======
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2>Add Category</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/dashboard">Home</a>
                                    </li>
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
                                <div class="tab-pane fade show active" id="nav-one" role="tabpanel"
                                    aria-labelledby="nav-one-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-vertical__item bg-style">
                                                <form enctype="multipart/form-data" method="POST"
                                                    action="{{ route('admin.category.store') }}">
                                                    @csrf
                                                    
                                                    <div class="input__group mb-25">
                                                        <label>Category Name (English)</label>
                                                        <input type="text" id="en_category_name" name="en_name"
                                                            value="{{ old('en_name') }}" placeholder="Name (English)">
                                                        @error('en_name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label>Category Slug</label>
                                                        <input type="text" id="category_slug" name="slug"
                                                            value="{{ old('slug') }}" placeholder="category slug">
                                                        @error('slug')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label>Category Name (German)</label>
                                                        <input type="text" id="fr_category_name" name="gn_name"
                                                            value="{{ old('gn_name') }}" placeholder="Name (German)">
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label>Icon Image</label>
                                                        <input type="file" name="image" class="form-control">
                                                        @error('image')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label>Description (English)</label>
                                                        <textarea name="en_description" id="en_description" placeholder="Description (English)">{{ old('en_description') }}</textarea>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label>Description (German)</label>
                                                        <textarea name="gn_description" id="fr_description" placeholder="Description (German)">{{ old('gn_description') }}</textarea>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label>Status</label>
                                                        <select name="status" id="status">
                                                            <option value="active"
                                                                {{ old('status') == 'active' ? 'selected' : '' }}>Active
                                                            </option>
                                                            <option value="inactive"
                                                                {{ old('status') == 'inactive' ? 'selected' : '' }}>
                                                                Inactive</option>
                                                        </select>
                                                    </div>

                                                    <div class="input__button">
                                                        <button type="submit" class="btn btn-primary px-5">Add</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
>>>>>>> 9509e7274e11799fea425ef941f59fafcf719a3d
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
                </div>
            </div>
@endsection

@push('scripts')
    
@endpush
=======
@endsection

@push('scripts')
@endpush
>>>>>>> 9509e7274e11799fea425ef941f59fafcf719a3d
