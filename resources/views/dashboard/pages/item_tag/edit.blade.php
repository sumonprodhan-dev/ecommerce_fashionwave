@extends('dashboard.layouts.app')

@push('title')
    Edit Tag
@endpush

@push('styles')
    {{-- Proyojon hole ekhane style dite paren --}}
@endpush

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__content__left">
                        <div class="breadcrumb__title">
                            <h2>Edit Tag</h2>
                        </div>
                    </div>
                    <div class="breadcrumb__content__right">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.tag.index') }}">Tags</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Tag</li>
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
                                            {{-- Tag update route ebong id pass kora hoyeche --}}
                                            <form method="POST" action="{{ route('admin.tag.update', $tag->id) }}">
                                                @csrf
                                                @method('POST') 

                                                <div class="input__group mb-25">
                                                    <label>Tag Name</label>
                                                    <input type="text" id="en_tag_name" name="name"
                                                        value="{{ $tag->name }}" placeholder="Tag Name" required>
                                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label>Tag Slug</label>
                                                    <input type="text" id="tag_slug" name="slug"
                                                        value="{{ $tag->slug }}" placeholder="tag-slug" required>
                                                    @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="status">Status</label>
                                                    <select name="status" id="status">
                                                        <option value="active" {{ $tag->status == 'active' ? 'selected' : '' }}>Active</option>
                                                        <option value="inactive" {{ $tag->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                </div>

                                                <div class="input__button">
                                                    <button type="submit" class="btn btn-blue">Update Tag</button>
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
    // Name change korle auto slug update (Optional - edit er somoy eta off rakha bhalo hote pare)
    $('#en_tag_name').keyup(function() {
        let text = $(this).val();
        text = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        $('#tag_slug').val(text);
    });
</script>
@endpush