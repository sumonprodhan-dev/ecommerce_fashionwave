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
                                <h2>Add Product</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/dashboard">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Product</li>
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
                                        action="{{ route('admin.product.store') }}">
                                        @csrf
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-vertical__item bg-style">
                                                    <div class="item-top mb-30">
                                                        <h2>English:</h2>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="en-product-name">Product Name</label>
                                                        <input type="text" class="form-control" id="en-product-name"
                                                            name="en_name" value="{{ old('en_name') }}" placeholder="Name">
                                                        {{-- error message --}}
                                                        @error('en_name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="en-product-slug">Product Slug</label>
                                                        <input type="text" class="form-control" id="en-product-slug"
                                                            name="en_slug" value="{{ old('en_slug') }}" placeholder="Slug">
                                                        {{-- error message --}}
                                                        @error('en_slug')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Brand Name</label>
                                                        <select class="form-control" id="en_brand_name" name="brand_id">
                                                            <option value="" selected disabled>Select Brand
                                                            </option>
                                                            @forelse ($brands as $brand)
                                                                <option value="{{ $brand->id }}">{{ $brand->en_name }}
                                                                </option>
                                                            @empty
                                                                <option value="">No Brand Found</option>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Category Name</label>
                                                        <select class="form-control" id="en_category_name"
                                                            name="category_id">
                                                            <option value="" selected disabled>Select Category
                                                            </option>
                                                            @forelse ($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->en_name }}
                                                                </option>
                                                            @empty
                                                                <option> value="">No Category Found</option>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Item Tag</label>
                                                        <select class="form-control" name="tag_id">
                                                            <option value="" disabled>Select item</option>
                                                            @foreach ($tags as $tag)
                                                                <option value="{{ $tag->id}}">{{ $tag->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        {{-- error message --}}
                                                        @error('tag_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    {{-- <div class="input__group mb-25">
                                                        <label for="select2Multiple">Product Tag</label>
                                                        <select class="select2-multiple form-control tag_two"
                                                            name="product_tag[]" multiple="multiple">
                                                            @php
                                                                $predefinedTags = [
                                                                    'ELLA - HALOTHEMES',
                                                                    'HOT - COLLECTION',
                                                                    'NEW - COLLECTION',
                                                                    'ELLA - CALTOUS',
                                                                ];
                                                            @endphp
                                                            @foreach ($predefinedTags as $pTag)
                                                                <option value="{{ $pTag }}"
                                                                    {{ is_array(old('product_tag')) && in_array($pTag, old('product_tag')) ? 'selected' : '' }}>
                                                                    {{ $pTag }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div> --}}

                                                    <div class="input__group mb-25">
                                                        <label for="select2Multiple">Product Tag</label>
                                                        <select class="select2-multiple form-control tag_two"
                                                            name="product_tag[]" multiple="multiple">
                                                            @if (old('product_tag'))
                                                                @foreach (old('product_tag') as $tag)
                                                                    <option class="p-5" value="{{ $tag }}"
                                                                        selected>
                                                                        {{ $tag }}</option>
                                                                @endforeach
                                                            @endif
                                                            
                                                        </select>
                                                        {{-- error message --}}
                                                            @error('product_tag')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="qty">Quantity</label>
                                                        <input type="text" class="form-control" id="qty"
                                                            name="qty" value="" placeholder="Quantity">
                                                        {{-- error message --}}
                                                        @error('qty')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="price">Price</label>
                                                        <input type="number" min="0" class="form-control"
                                                            id="price" name="price" value=""
                                                            placeholder="Price">
                                                        {{-- error message --}}
                                                        @error('price')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="discount">Discount (in Percentage)</label>
                                                        <input type="number" class="form-control" id="discount"
                                                            name="discount" value="0" placeholder="Discount">
                                                        {{-- error message --}}
                                                        @error('discount')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    {{-- <div class="input__group mb-25">
                                                        <label for="discount_price">Discount Price</label>
                                                        <input type="number" class="form-control" id="discount_price"
                                                            name="discount_price" value="" readonly>
                                                    </div> --}}
                                                    <div class="input__group mb-25">
                                                        <label for="discount_price">Discount Price</label>
                                                        <input type="number" class="form-control" id="discount_price"
                                                            name="discount_price" value="{{ old('discount_price') }}">
                                                        {{-- error message --}}
                                                        @error('discount_price')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="en_about">About</label>
                                                        <textarea name="en_about" id="en_about" class="form-control" placeholder="About"></textarea>
                                                        @error('en_about')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="en_description">Description</label>
                                                        <textarea name="en_description" id="summernote" class="form-control" placeholder="Description"></textarea>
                                                        @error('en_description')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="en_shippingreturn">Shipping Return</label>
                                                        <textarea name="en_shippingreturn" id="summernote2" class="form-control" placeholder="Shipping Return"></textarea>
                                                        @error('en_shippingreturn')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="en_additionalinformation">Additional
                                                            Information</label>
                                                        <textarea name="en_additionalinformation" id="summernote3" class="form-control"></textarea>
                                                        @error('en_additionalinformation')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="primary_image">Primary Image</label>
                                                        <input type="file" class="form-control putImage1"
                                                            name="primary_image" id="primary_image">
                                                        <img src="" class="mt-1 rounded" id="target1" />
                                                        {{-- error message --}}
                                                        @error('primary_image')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="image_two">Image 2</label>
                                                        <input type="file" class="form-control putImage2"
                                                            name="image_two" id="image_two">
                                                        <img src="" class="mt-1 rounded" id="target2" />
                                                        {{-- error message --}}
                                                        @error('image_two')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="image_three">Image 3</label>
                                                        <input type="file" class="form-control putImage3"
                                                            name="image_three" id="image_three">
                                                        <img src="" class="mt-1 rounded" id="target3" />
                                                        {{-- error message --}}
                                                        @error('image_three')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="image_four">Image 4</label>
                                                        <input type="file" class="form-control putImage4"
                                                            name="image_four" id="image_four">
                                                        <img src="" class="mt-1 rounded" id="target4" />
                                                        {{-- error message --}}
                                                        @error('image_four')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="image_five">Image 5</label>
                                                        <input type="file" class="form-control putImage5"
                                                            name="image_five" id="image_five">
                                                        <img src="" class="mt-1 rounded" id="target5" />
                                                        {{-- error message --}}
                                                        @error('image_five')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" value="1" name="status"
                                                                class="custom-control-input" id="customSwitch1">
                                                            <label class="custom-control-label"
                                                                for="customSwitch1">Status</label>
                                                        </div>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" value="1" name="feature"
                                                                class="custom-control-input" id="customSwitch2">
                                                            <label class="custom-control-label"
                                                                for="customSwitch2">Featured Product</label>
                                                        </div>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" value="1" name="best_sale"
                                                                class="custom-control-input" id="customSwitch3">
                                                            <label class="custom-control-label" for="customSwitch3">Best
                                                                Selling</label>
                                                        </div>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" value="1" name="on_sale"
                                                                class="custom-control-input" id="customSwitch4">
                                                            <label class="custom-control-label" for="customSwitch4">On
                                                                Sale</label>
                                                        </div>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" value="1" name="on_arrival"
                                                                class="custom-control-input" id="customSwitch5">
                                                            <label class="custom-control-label" for="customSwitch5">New
                                                                Arrival</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-vertical__item bg-style">
                                                    <div class="item-top mb-30">
                                                        <h2>German:</h2>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="gn-product-name">Product Name</label>
                                                        <input type="text" class="form-control" id="gn-product-name"
                                                            name="gn_name" value="" placeholder="Name">
                                                        {{-- error message --}}
                                                        @error('gn_name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="gn_about">About</label>
                                                        <textarea name="gn_about" id="gn_about" class="form-control" placeholder="About"></textarea>
                                                        @error('gn_about')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="gn_description">Description</label>
                                                        <textarea name="gn_description" id="summernote4" class="form-control"></textarea>
                                                        @error('gn_description')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="gn_shippingreturn">Shipping Return</label>
                                                        <textarea name="gn_shippingreturn" id="summernote5" class="form-control"></textarea>
                                                        @error('gn_shippingreturn')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="gn_additionalinformation">Additional
                                                            Information</label>
                                                        <textarea name="gn_additionalinformation" id="summernote6" class="form-control"></textarea>
                                                        @error('gn_additionalinformation')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- button --}}
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                                                Create Product</button>
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
            $('#en-product-name').on('keyup', function() {
                let name = $(this).val();
                let slug = name.toLowerCase()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/[\s_-]+/g, '-')
                    .replace(/^-+|-+$/g, '');

                $('#en-product-slug').val(slug);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.select2-multiple').select2({
                tags: true,
                tokenSeparators: [',', ' '],
                placeholder: "Enter keywords",
                maximumSelectionLength: 5,
                language: {
                    maximumSelected: function(e) {
                        return "You can only select up to 5 keywords";
                    }
                }
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
        $(document).ready(function() {
            $("#summernote3").summernote({
                placeholder: 'Additional Information',
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
            $("#summernote4").summernote({
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
            $("#summernote5").summernote({
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
        $(document).ready(function() {
            $("#summernote6").summernote({
                placeholder: 'Additional Information',
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

    <script>
    const priceInput = document.getElementById('price');
    const discountInput = document.getElementById('discount');
    const discountPriceInput = document.getElementById('discount_price');

    function calculateDiscountPrice() {
    let price = parseFloat(priceInput.value) || 0;
    let discount = parseFloat(discountInput.value) || 0;

    if(discount > 100) discount = 100;
    if(discount < 0) discount = 0;

    let discountedPrice = price - (price * discount / 100);
    discountPriceInput.value = discountedPrice.toFixed(2);
    }


    calculateDiscountPrice();

    priceInput.addEventListener('input', calculateDiscountPrice);
    discountInput.addEventListener('input', calculateDiscountPrice);
    </script>
@endpush
