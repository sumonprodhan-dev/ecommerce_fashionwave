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
                                <h2>Edit Testimonial</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/dashboard">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
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
                                        action="{{ route('admin.testimonial.store') }}">
                                        @csrf
                                        <div class="form-vertical__item bg-style">
                                            <div class="row">
                                                <div class="input__group mb-25 col-md-3">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        value="{{ old('name') }}" required="" placeholder="Name">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="input__group mb-25 col-md-3">
                                                    <label for="designation">Degination</label>
                                                    <input type="text" class="form-control" id="designation"
                                                        name="designation" value="{{ old('designation') }}" required=""
                                                        placeholder="designation">
                                                    @error('designation')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="input__group mb-25 col-md-3">
                                                    <label for="rating">Star</label>
                                                    <select name="rating" id="rating" class="form-control">
                                                        <option value="" disabled selected>---SELECT A STAR---
                                                        </option>
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            <option value="{{ $i }}"
                                                                {{ old('rating') == $i ? 'selected' : '' }}>
                                                                {{ $i }} Star</option>
                                                        @endfor
                                                    </select>
                                                    @error('rating')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                {{-- status --}}
                                                <div class="input__group mb-25 col-md-3">
                                                    <label for="status">Status</label>
                                                    <select name="status" id="status" class="form-control">
                                                        <option value="active"
                                                            {{ old('status') == 'active' ? 'selected' : '' }}>
                                                            Active
                                                        </option>
                                                        <option value="inactive"
                                                            {{ old('status') == 'inactive' ? 'selected' : '' }}>
                                                            Inactive
                                                        </option>
                                                    </select>
                                                    @error('status')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="input__group mb-25 col-md-6">
                                                    <label>English Description</label>
                                                    <textarea name="en_description" id="summernote" class="form-control" placeholder="Description">{{ old('en_description') }}</textarea>
                                                    @error('en_description')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="input__group mb-25 col-md-6">
                                                    <label>German Description</label>
                                                    <textarea name="gn_description" id="summernote2" class="form-control" placeholder="German Description">{{ old('gn_description') }}</textarea>

                                                </div>

                                                <div class="input__group mb-25 col-md-3">
                                                    <label for="image">Image</label>
                                                    <input type="file" class="form-control putImage1" name="image"
                                                        id="image">
                                                    <img class="admin_image" src="" id="target1"
                                                        style="width: 150px; height: 70px; margin-top: 10px;" />
                                                </div>
                                                <div class="input__button">
                                                    <button type="submit" class="btn btn-blue"><i class="fa fa-save"></i>
                                                        Added Testimonial </button>
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
        $(document).ready(function() {
            // Summernote 1 Initialize
            $('#summernote').summernote({
                placeholder: 'Description',
                height: 100,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                ],
                // Data sync on change
                callbacks: {
                    onChange: function(contents, $editable) {
                        $(this).val(contents);
                    }
                }
            });

            // Summernote 2 Initialize
            $('#summernote2').summernote({
                placeholder: 'German Description',
                height: 100,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                ],
                callbacks: {
                    onChange: function(contents, $editable) {
                        $(this).val(contents);
                    }
                }
            });

            // Image Preview
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#target1').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#image").change(function() {
                readURL(this);
            });
        });
    </script>
@endpush
