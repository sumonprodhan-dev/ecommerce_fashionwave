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
                                <h2>Edit Slider</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/dashboard">Home</a>
                                    </li>
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
                                <div class="tab-pane fade show active" id="nav-one" role="tabpanel"
                                    aria-labelledby="nav-one-tab">
                                    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.slider.update', $slider->id) }}">
                                        @csrf
                                        @method('post')
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-vertical__item bg-style">
                                                    <div class="item-top mb-30">
                                                        <h2>English:</h2>
                                                    </div>
                                                    <input type="hidden" name="id" id="id" value="2">
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Title</label>
                                                        <input type="text" id="en_title" name="en_title"
                                                            value="{{ old('en_title', $slider->en_title) ?? '' }}" placeholder="Title">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Sub Title</label>
                                                        <input type="text" id="en_sub_title" name="en_sub_title"
                                                            value="{{ old('en_sub_title', $slider->en_sub_title) ?? '' }}" placeholder="Sub Title">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Button Text</label>
                                                        <input type="text" id="en_btn_text" name="en_btn_text"
                                                            value="{{ old('en_btn_text', $slider->en_btn_text) ?? '' }}" placeholder="Button Text">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="en_btn_text">Button Link</label>
                                                        <input type="text" id="en_btn_text" name="en_btn_text"
                                                            value="{{ old('en_btn_text', $slider->en_btn_text) ?? '' }}" placeholder="Button Text">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="en_description">Description</label>
                                                        <textarea id="summernote" name="en_description" placeholder="Description">{{ old('en_description', $slider->en_description) ?? '' }}</textarea>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="background_image">BackGround Image</label>
                                                        <input type="file" class="putImage2" name="image"
                                                            id="background_image">
                                                        <img class="admin_image"
                                                            src="{{ old('image', $slider->image) ?? '' }}"
                                                            id="target2" />
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="status">Status</label>
                                                        <select name="status" id="status">
                                                            <option value="{{ old('status', $slider->status) ?? '' }}">Active</option>
                                                            <option value="{{ old('status', $slider->status) ?? '' }}">Inactive</option>
                                                        </select>
                                                    </div>
                                                    <div class="input__button">
                                                        <button type="submit" class="btn btn-blue">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-vertical__item bg-style">
                                                    <div class="item-top mb-30">
                                                        <h2>German:</h2>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="gn_title">Title</label>
                                                        <input type="text" id="gn_title" name="gn_title" value="{{ old('gn_title', $slider->gn_title) ?? '' }}"
                                                            placeholder="Title">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="gn_sub_title">Sub Title</label>
                                                        <input type="text" id="gn_sub_title" name="gn_sub_title"
                                                            value="{{ old('gn_sub_title', $slider->gn_sub_title) ?? '' }}" placeholder="Sub Title">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="gn_btn_text">Button Text</label>
                                                        <input type="text" id="gn_btn_text" name="gn_btn_text"
                                                            value="{{ old('gn_btn_text', $slider->gn_btn_text) ?? '' }}" placeholder="Button Text">
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="gn_description">Description</label>
                                                        <textarea id="summernote2" name="gn_description" placeholder="Description">{{ old('gn_description', $slider->gn_description) ?? '' }}</textarea>
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

@push('scripts')
    <script>
        "use strict";
        $(document).ready(function() {
            $("#summernote").summernote({
                placeholder: 'Description',
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                ]
            });
            $('.dropdown-toggle').dropdown();
        });
        $(document).ready(function() {
            $("#summernote2").summernote({
                placeholder: 'Shipping Return',
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                ]
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>
@endpush
