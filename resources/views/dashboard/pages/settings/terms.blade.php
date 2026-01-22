@extends('dashboard.layouts.app')

@push('title')
@endpush

@push('styles')
    <style>
        .select2-container--default .select2-selection--multiple {
            border: 1px solid #ced4da !important;
            min-height: 48px !important;
            padding: 5px 10px !important;
            border-radius: 5px !important;
        }

        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border-color: #80bdff !important;
            outline: 0;
        }
    </style>
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
                                <h2>Terms & Conditions</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Terms & Conditions</li>
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
                                    <form enctype="multipart/form-data" method="POST"
                                        action="{{ route('admin.privacy.update', $custom_page->slug) }}">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-vertical__item bg-style">
                                                    <div class="row">
                                                        {{-- Title --}}
                                                        <div class="input__group mb-25 col-md-3">
                                                            <label for="title">Title</label>
                                                            <input type="text" class="form-control" id="title"
                                                                name="title"
                                                                value="{{ old('title', $custom_page->title) }}"
                                                                placeholder="Title">
                                                            @error('title')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        
                                                        

                                                        {{-- Meta Keyword --}}
                                                        <div class="input__group mb-25 col-md-4">
                                                            <label for="meta-keyword">Meta Keyword <span
                                                                    class="text-success">(SEO)</span></label>
                                                            <input type="text" class="form-control" id="meta-keyword"
                                                                name="meta_keywords"
                                                                value="{{ old('meta_keywords', $custom_page->meta_keywords) }}"
                                                                placeholder="Meta Keyword">
                                                            @error('meta_keywords')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>


                                                        <div class="input__group mb-25 col-md-5">
                                                            <label for="meta-title">Meta Title <span
                                                                    class="text-success">(Recommended 60-70
                                                                    characters)</span></label>
                                                            <input type="text" class="form-control" id="meta-title"
                                                                name="meta_title"
                                                                value="{{ old('meta_title', $custom_page->meta_title) }}"
                                                                placeholder="Meta Title">
                                                            @error('meta_title')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        {{-- Meta Title --}}
                                                        

                                                        {{-- Meta Description --}}
                                                        <div class="input__group mb-25 col-md-7">
                                                            <label for="meta-description">Meta Description <span
                                                                    class="text-success">(Recommended 150-160
                                                                    characters)</span></label>
                                                            <input type="text" class="form-control" id="meta-description"
                                                                name="meta_description"
                                                                value="{{ old('meta_description', $custom_page->meta_description) }}"
                                                                placeholder="Meta Description">
                                                            @error('meta_description')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        {{-- Status --}}
                                                        <div class="input__group mb-25 col-md-2">
                                                            <label for="status">Status</label>
                                                            <select name="status" id="status" class="form-control">
                                                                <option value="active"
                                                                    {{ old('status', $custom_page->status) == 'active' ? 'selected' : '' }}>
                                                                    Active
                                                                </option>
                                                                <option value="inactive"
                                                                    {{ old('status', $custom_page->status) == 'inactive' ? 'selected' : '' }}>
                                                                    Inactive
                                                                </option>
                                                            </select>
                                                            @error('status')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- Content --}}
                                                    <div class="input__group mb-25">
                                                        <label for="summernote">Content</label>
                                                        <textarea name="content" id="summernote" class="form-control" placeholder="Content">{!! old('content', $custom_page->content) !!}</textarea>
                                                        @error('content')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-save"></i> Update Privacy
                                            </button>
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
    </script>
@endpush
