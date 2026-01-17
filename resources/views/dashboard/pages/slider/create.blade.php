@extends('dashboard.layouts.app')

@push('title')
    <title>Create Slider</title>
@endpush

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2>Create Slider</h2> </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Slider</li>
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
                                <div class="tab-pane fade show active" id="nav-one" role="tabpanel">
                                    
                                    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.slider.store') }}">
                                        @csrf 
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-vertical__item bg-style">
                                                    <div class="item-top mb-30">
                                                        <h2>English:</h2>
                                                    </div>
                                                    
                                                    <div class="input__group mb-25">
                                                        <label>Title</label>
                                                        <input type="text" name="en_title" value="{{ old('en_title') }}" placeholder="Title">
                                                    </div>
                                                    
                                                    <div class="input__group mb-25">
                                                        <label>Sub Title</label>
                                                        <input type="text" name="en_sub_title" value="{{ old('en_sub_title') }}" placeholder="Sub Title">
                                                    </div>
                                                    
                                                    <div class="input__group mb-25">
                                                        <label>Button Text</label>
                                                        <input type="text" name="en_btn_text" value="{{ old('en_btn_text') }}" placeholder="Button Text">
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label>Button Link</label>
                                                        <input type="text" name="en_btn_link" value="{{ old('en_btn_link') }}" placeholder="Link">
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label>Description</label>
                                                        <textarea name="en_description" placeholder="Description">{{ old('en_description') }}</textarea>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label>Background Image</label>
                                                        <input type="file" name="image" id="background_image">
                                                    </div>

                                                    {{-- status --}}
                                                    <div class="input__group mb-25">
                                                        <label for="status">Status</label>
                                                        <select name="status" id="status">
                                                            <option value="active">Active</option>
                                                            <option value="inactive">Inactive</option>
                                                        </select>
                                                    </div>

                                                    <div class="input__button">
                                                        <button type="submit" class="btn btn-blue">Save Slider</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-vertical__item bg-style">
                                                    <div class="item-top mb-30">
                                                        <h2>German:</h2>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label>Title</label>
                                                        <input type="text" name="gn_title" value="{{ old('gn_title') }}" placeholder="Title">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label>Sub Title</label>
                                                        <input type="text" name="gn_sub_title" value="{{ old('gn_sub_title') }}" placeholder="Sub Title">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label>Button Text</label>
                                                        <input type="text" name="gn_btn_text" value="{{ old('gn_btn_text') }}" placeholder="Button Text">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label>Description</label>
                                                        <textarea name="gn_description" placeholder="Description">{{ old('gn_description') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
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
@endsection