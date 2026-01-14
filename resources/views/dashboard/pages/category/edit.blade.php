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
                                                    action="{{ route('admin.category.update', $category->id) }}">
                                                    @csrf
                                                    @method('POST')
                                                    <div class="input__group mb-25">
                                                        <label>Category Name (English)</label>
                                                        <input type="text" name="en_name"
                                                            value="{{ old('en_name', $category->en_name) }}"
                                                            placeholder="Name (English)">
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label>Category Slug</label>
                                                        <input readonly type="text" name="slug"
                                                            value="{{ $category->slug }}">
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label>Category Name (German)</label>
                                                        <input type="text" name="gn_name"
                                                            value="{{ old('gn_name', $category->gn_name) }}"
                                                            placeholder="Name (German)">
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label>Icon Image</label>
                                                        <input type="file" name="image" id="categoryimage">

                                                        <div class="mt-2">
                                                        <img src="{{ asset('uploads/category/'.$category->image) }}" id="target2" style="width: 100px; height: auto;" />
                                                        <p class="text-muted"><small>Current Image</small></p>
                                                    </div>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label>Description (English)</label>
                                                        <textarea name="en_description" id="en_description" placeholder="Description (English)">{{ old('en_description', $category->en_description) }}</textarea>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label>Description (German)</label>
                                                        <textarea name="gn_description" id="gn_description" placeholder="Description (German)">{{ old('gn_description', $category->gn_description) }}</textarea>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label>Status</label>
                                                        <select name="status" id="status">
                                                            <option value="active"
                                                                {{ $category->status == 'active' ? 'selected' : '' }}>Active
                                                            </option>
                                                            <option value="inactive"
                                                                {{ $category->status == 'inactive' ? 'selected' : '' }}>
                                                                Inactive</option>
                                                        </select>
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
<script>
    // Image Preview Script (Jodi proyojon hoy)
    document.getElementById('categoryimage').onchange = function (evt) {
        var tgt = evt.target || window.event.srcElement,
            files = tgt.files;
        if (FileReader && files && files.length) {
            var fr = new FileReader();
            fr.onload = function () {
                document.getElementById('target2').src = fr.result;
            }
            fr.readAsDataURL(files[0]);
        }
    }
</script>
@endpush
