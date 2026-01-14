@extends('dashboard.layouts.app')

@push('title')
    Add Tag
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
                            <h2>Add Tag</h2>
                        </div>
                    </div>
                    <div class="breadcrumb__content__right">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Tags</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Tag</li>
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
                                            <form method="POST" action="{{ route('admin.tag.store') }}">
                                                @csrf
                                                
                                                <div class="input__group mb-25">
                                                    <label>Tag Name</label>
                                                    <input type="text" id="en_tag_name" name="name" 
                                                        value="{{ old('en_name') }}" placeholder="Tag Name" required>
                                                    @error('en_name') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label>Tag Slug</label>
                                                    <input type="text" id="tag_slug" name="slug" 
                                                        value="{{ old('slug') }}" placeholder="tag-slug" required>
                                                    @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="status">Status</label>
                                                    <select name="status" id="status">
                                                        <option value="active">Active</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
                                                </div>

                                                <div class="input__button">
                                                    <button type="submit" class="btn btn-blue">Add Tag</button>
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
    // Name theke automatic slug generate korar jonno (Optional)
    $('#en_tag_name').keyup(function() {
        let text = $(this).val();
        text = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        $('#tag_slug').val(text);
    });
</script>
@endpush