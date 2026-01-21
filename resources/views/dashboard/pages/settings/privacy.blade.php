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
                                <h2>Add Privacy</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/dashboard">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
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
                                        action="{{ route('admin.privacy.update') }}">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-vertical__item bg-style">
                                                    <div class="row">
                                                        {{--  --}}
                                                        <div class="input__group mb-25 col-md-3">
                                                            <label for="title">title</label>
                                                            <input type="text" class="form-control" id="title"
                                                                name="title" value="{{ old('title') }}"
                                                                placeholder="title">
                                                            {{-- error message --}}
                                                            @error('title')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="input__group mb-25 col-md-3">
                                                            <label for="slug">Slug</label>
                                                            <input type="text" class="form-control" id="slug"
                                                                name="slug" value="{{ old('slug') }}"
                                                                placeholder="Slug">
                                                            {{-- error message --}}
                                                            @error('slug')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        {{-- status --}}
                                                        <div class="input__group mb-25 col-md-2">
                                                            <label for="status">Status</label>
                                                            <select name="status" id="status" class="form-control">
                                                                <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
                                                                <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive</option>
                                                            </select>
                                                            {{-- error message --}}
                                                            @error('status')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        {{-- meta keyword --}}
                                                        <div class="input__group mb-25 col-md-4">
                                                            <label for="meta-keyword">Meta Keyword <span class="text-success">(seo)</span></label>
                                                            <input type="text" class="form-control" id="meta-keyword"
                                                                name="meta_keywords" value="{{ old('meta_keyword') }}"
                                                                placeholder="Meta Keyword">
                                                            {{-- error message --}}
                                                            @error('meta_keyword')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        {{-- meta title --}}
                                                        <div class="input__group mb-25 col-md-5">
                                                            <label for="meta-title">Meta Title <span class="text-success">(Recommended 60-70 characters)</span></label>
                                                            <input type="text" class="form-control" id="meta-title"
                                                                name="meta_title" value="{{ old('meta_title') }}"
                                                                placeholder="Meta Title">
                                                            {{-- error message --}}
                                                            @error('meta_title')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="input__group mb-25 col-md-7">
                                                            <label for="meta-description">Meta Description <span class="text-success">(Recommended 150-160 characters)</span></label>
                                                            <input type="text" class="form-control" id="meta-description"
                                                                name="meta_description" value="{{ old('meta_description') }}"
                                                                placeholder="Meta Description">
                                                            {{-- error message --}}
                                                            @error('meta_description')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="content">Content</label>
                                                        <textarea name="content" id="summernote" class="form-control" placeholder="content"></textarea>
                                                        @error('content')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        {{-- button --}}
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                                                Update Privacy</button>
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
        $(document).ready(function() {
            $('#title').on('keyup', function() {
                let name = $(this).val();
                let slug = name.toLowerCase()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/[\s_-]+/g, '-')
                    .replace(/^-+|-+$/g, '');

                $('#slug').val(slug);
            });
        });
    </script>

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
