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
                            <h2>Edit Brand</h2>
                        </div>
                    </div>
                    <div class="breadcrumb__content__right">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.brand.index') }}">Brand</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Brand</li>
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
                                            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.brand.update', $brand->id) }}">
                                                @csrf
                                                @method('PUT') <div class="input__group mb-25">
                                                    <label>Brand Name (English)</label>
                                                    <input type="text" id="en_brand_name" name="en_name"
                                                        value="{{ $brand->en_name }}" placeholder="Name (English)">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label>Brand Slug</label>
                                                    <input type="text" id="brand_slug" name="slug"
                                                        value="{{ $brand->slug }}" placeholder="brand slug">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label>Brand Name (German)</label>
                                                    <input type="text" id="fr_brand_name" name="gn_name"
                                                        value="{{ $brand->gn_name }}" placeholder="Name (German)">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label>Brand Image</label>
                                                    <input type="file" class="putImage2" name="image" id="brandimage">
                                                    <div class="mt-2">
                                                        <img src="{{ asset('uploads/brand/'.$brand->image) }}" id="target2" style="width: 100px; height: auto;" />
                                                        <p class="text-muted"><small>Current Image</small></p>
                                                    </div>
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="status">Status</label>
                                                    <select name="status" id="status">
                                                        <option value="active" {{ $brand->status == 'active' ? 'selected' : '' }}>Active</option>
                                                        <option value="inactive" {{ $brand->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                </div>

                                                <div class="input__button">
                                                    <button type="submit" class="btn btn-blue">Update Brand</button>
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
    document.getElementById('brandimage').onchange = function (evt) {
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