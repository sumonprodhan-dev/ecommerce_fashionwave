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
                                <h2>Edit Product</h2>
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
                                    {{-- <form enctype="multipart/form-data" method="POST" action="#">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-vertical__item bg-style">
                                                    <div class="item-top mb-30">
                                                        <h2>English:</h2>
                                                    </div>
                                                    <input type="hidden" name="product_type" value="1">
                                                    <input type="hidden" name="id" value="11">
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Product Name</label>
                                                        <input type="text" class="form-control" id="en_product_name"
                                                            name="en_product_name" value="Fit-Flare Dress"
                                                            placeholder="Name">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="en-product-slug">Product Slug</label>
                                                        <input type="text" class="form-control" id="en-product-slug"
                                                            name="en_product_slug" value="fit-flare-dress-2"
                                                            placeholder="Slug">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Brand Name</label>
                                                        <select class="form-control" id="en_brand_name"
                                                            name="en_brand_name">
                                                            <option value="">---SELECT A BRAND---</option>
                                                            <option value="1">
                                                                Circle</option>
                                                            <option value="2">
                                                                CodeLab</option>
                                                            <option value="3" selected>
                                                                HEXLAB</option>
                                                            <option value="4">
                                                                Kanba</option>
                                                            <option value="5">
                                                                treva</option>
                                                            <option value="6">
                                                                Zootv</option>
                                                            <option value="7">
                                                                BanCi</option>
                                                        </select>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Category Name</label>
                                                        <select class="form-control" id="en_category_name"
                                                            name="en_category_name">
                                                            <option value="">---SELECT A CATEGORY---</option>
                                                            <option value="1">
                                                                Health Category</option>
                                                            <option value="2">
                                                                Women Fashion</option>
                                                            <option value="3" selected>
                                                                Men Fashion</option>
                                                            <option value="4">
                                                                Electronic</option>
                                                        </select>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Item Tag</label>
                                                        <select class="form-control" id="item_teg" name="item_teg">
                                                            <option value="">---Select item---</option>
                                                            <option value="NEW" selected>
                                                                NEW</option>
                                                            <option value="HOT">
                                                                HOT</option>
                                                        </select>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="select2Multiple">Product Tag</label>
                                                        <select class="select2-multiple form-control tag_two"
                                                            name="product_tag[]" multiple="multiple">
                                                            <option value="">---SELECT A PRODUCT TAG---</option>
                                                            <option value="ELLA - HALOTHEMES" selected>
                                                                ELLA - HALOTHEMES</option>
                                                            <option value="HOT - COLLECTION">
                                                                HOT - COLLECTION</option>
                                                            <option value="NEW - COLLECTION">
                                                                NEW - COLLECTION</option>
                                                            <option value="ELLA - CALTOUS">
                                                                ELLA - CALTOUS</option>
                                                        </select>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Quantity</label>
                                                        <input type="text" class="form-control" id="qty"
                                                            name="qty" value="40">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Price</label>
                                                        <input type="text" class="form-control" id="price"
                                                            name="price" value="200.00">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Discount (in
                                                            Percentage)</label>
                                                        <input type="number" min="0" class="form-control"
                                                            id="discount" name="discount" value="10.00">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Discount Price</label>
                                                        <input type="number" class="form-control" value="180.00"
                                                            id="discount_price" name="discount_price" readonly>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">About</label>
                                                        <textarea name="en_about" id="en_about" class="form-control"></textarea>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Description</label>
                                                        <textarea name="en_description" id="summernote" class="form-control"><p class="description-text"> </p>
                                                            <p class="description-text"></p>
                                                            <p class="description-text"></p>
                                                        </textarea>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">ShippingReturn</label>
                                                        <textarea name="en_shippingreturn" id="summernote2" class="form-control">
                                                            <p class="return-text"></p>
                                                            <p class="return-text"></p>
                                                            <p class="return-text"></p>
                                                        </textarea>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">AdditionalInformation</label>
                                                        <textarea name="en_additionalinformation" id="summernote3" class="form-control"><p class="additional-information-text"> </p>
                                                            <ul class="additional-feature">
                                                                <li class="single-feature">
                                                                    <h3 class="feature-title">Comodous:</h3>
                                                                    <p class="feature-text">Comodous in tempor ullamcorper miaculis</p>
                                                                </li>
                                                                <li class="single-feature">
                                                                    <h3 class="feature-title">Mattis laoreet:</h3>
                                                                    <p class="feature-text">Pellentesque vitae neque mollis urna mattis laoreet.</p>
                                                                </li>
                                                                <li class="single-feature">
                                                                    <h3 class="feature-title">Divamus de ametos:</h3>
                                                                    <p class="feature-text">Divamus sit amet purus justo</p>
                                                                </li>
                                                                <li class="single-feature">
                                                                    <h3 class="feature-title">Molestie:</h3>
                                                                    <p class="feature-text">Proin molestie egestas orci ac suscipit risus posuere loremous</p>
                                                                </li>
                                                            </ul>
                                                        </textarea>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Primary Image</label>
                                                        <input type="file" class="form-control putImage1"
                                                            name="primary_image" id="primary_image">
                                                        <img class="admin_image"
                                                            src="http://127.0.0.1:8000/uploaded_files/product_image/product-image-3.png"
                                                            id="target1" />
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Image 2</label>
                                                        <input type="file" class="form-control putImage2"
                                                            name="image_two" id="image_two">
                                                        <img class="admin_image"
                                                            src="http://127.0.0.1:8000/uploaded_files/product_image/product-image-3.png"
                                                            id="target2" />
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Image Gallery
                                                            Image</label>
                                                        <input type="file" class="form-control putImage3"
                                                            name="image_three" id="image_three">
                                                        <img class="admin_image"
                                                            src="http://127.0.0.1:8000/uploaded_files/product_image/product-image-3.png"
                                                            id="target3" />
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Image 3</label>
                                                        <input type="file" class="form-control putImage4"
                                                            name="image_four" id="image_four">
                                                        <img class="admin_image"
                                                            src="http://127.0.0.1:8000/uploaded_files/product_image/product-image-3.png"
                                                            id="target4" />
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Image 4</label>
                                                        <input type="file" class="form-control putImage5"
                                                            name="image_five" id="image_five">
                                                        <img class="admin_image"
                                                            src="http://127.0.0.1:8000/uploaded_files/product_image/product-image-3.png"
                                                            id="target5" />
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" value="1" checked name="status"
                                                                class="custom-control-input" id="customSwitch1">
                                                            <label class="custom-control-label"
                                                                for="customSwitch1">Status</label>
                                                        </div>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" value="1" checked name="feature"
                                                                class="custom-control-input" id="customSwitch2">
                                                            <label class="custom-control-label"
                                                                for="customSwitch2">Featured Product</label>
                                                        </div>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" value="1" checked
                                                                name="best_sale" class="custom-control-input"
                                                                id="customSwitch3">
                                                            <label class="custom-control-label" for="customSwitch3">Best
                                                                Selling</label>
                                                        </div>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" value="1" checked name="on_sale"
                                                                class="custom-control-input" id="customSwitch4">
                                                            <label class="custom-control-label" for="customSwitch4">On
                                                                Sale</label>
                                                        </div>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" value="1" checked
                                                                name="on_arrival" class="custom-control-input"
                                                                id="customSwitch5">
                                                            <label class="custom-control-label" for="customSwitch5">New
                                                                Arrival</label>
                                                        </div>
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
                                                        <label for="exampleInputEmail1">Product Name</label>
                                                        <input type="text" class="form-control" id="fr_product_name"
                                                            value="" name="fr_product_name">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">About</label>
                                                        <textarea name="fr_about" id="fr_about" class="form-control"></textarea>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Description</label>
                                                        <textarea name="fr_description" id="summernote4" class="form-control"><p class="description-text"></p><p class="description-text"></p><p class="description-text"></p></textarea>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">ShippingReturn</label>
                                                        <textarea name="fr_shippingreturn" id="summernote5" class="form-control"><p class="description-text"></p><p class="description-text"></p><p class="description-text"></p></textarea>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">AdditionalInformation</label>
                                                        <textarea name="fr_additionalinformation" id="summernote6" class="form-control">
                                                            <p class="description-text"></p>
                                                            <p class="description-text"></p>
                                                            <p class="description-text"></p>
                                                            <ul class="additional-feature">
                                                                <li class="single-feature"> </li>
                                                            </ul>
                                                        </textarea>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </form> --}}

                                    <form enctype="multipart/form-data" method="POST"
                                        action="{{ route('admin.product.update', $product->id) }}">
                                        @csrf
                                        @method('POST')

                                        <div class="row">
                                            {{-- English Section --}}
                                            <div class="col-md-6">
                                                <div class="form-vertical__item bg-style">
                                                    <div class="item-top mb-30">
                                                        <h2>English:</h2>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="en-product-name">Product Name</label>
                                                        <input type="text" class="form-control" id="en-product-name"
                                                            name="en_name" value="{{ $product->en_name }}"
                                                            placeholder="Name">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="en-product-slug">Product Slug</label>
                                                        <input type="text" class="form-control" id="en-product-slug"
                                                            name="en_slug" value="{{ $product->en_slug }}"
                                                            placeholder="Slug">
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="en_brand_name">Brand Name</label>
                                                        <select class="form-control" id="en_brand_name" name="brand_id">
                                                            <option value="" disabled>---Select Brand---</option>
                                                            @foreach ($brands as $brand)
                                                                <option value="{{ $brand->id }}"
                                                                    {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                                                                    {{ $brand->en_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="en_category_name">Category Name</label>
                                                        <select class="form-control" id="en_category_name"
                                                            name="category_id">
                                                            <option value="" disabled>---Select Category---</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}"
                                                                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                                    {{ $category->en_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="tag_id">Item Tag</label>
                                                        <select class="form-control" name="tag_id">
                                                            <option value="" disabled>---Select item---</option>
                                                            @foreach ($tags as $tag)
                                                                <option value="{{ $tag->id }}"
                                                                    {{ $product->tag_id == $tag->id ? 'selected' : '' }}>
                                                                    {{ $tag->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                    <label for="product_tag">Product Tag</label>

                                                        @php
                                                            $tags = old('product_tag', $productTags ?? []);
                                                        @endphp

                                                        <select name="product_tag[]" multiple class="form-control select2-multiple">
                                                            @foreach ($tags as $tag)
                                                                <option value="{{ $tag }}" selected>{{ $tag }}</option>
                                                            @endforeach
                                                        </select>

                                                        @error('product_tag')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>


                                                    <div class="input__group mb-25">
                                                        <label for="qty">Quantity</label>
                                                        <input type="text" class="form-control" id="qty"
                                                            name="qty" value="{{ $product->qty }}"
                                                            placeholder="Quantity">
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="price">Price</label>
                                                        <input type="number" min="0" class="form-control" id="price" name="price" 
                                                            value="{{ $product->price }}" placeholder="Price">
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="discount">Discount (%)</label>
                                                        <input type="number" class="form-control" id="discount" name="discount" 
                                                            value="{{ $product->discount }}" placeholder="Discount">
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="discount_price">Discount Price</label>
                                                        <input type="number" class="form-control" id="discount_price" name="discount_price" 
                                                            value="{{ $product->discount_price }}">
                                                    </div>


                                                    <div class="input__group mb-25">
                                                        <label for="en_about">About</label>
                                                        <textarea name="en_about" id="en_about" class="form-control">{{ $product->en_about }}</textarea>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="en_description">Description</label>
                                                        <textarea name="en_description" id="summernote" class="form-control">{{ $product->en_description }}</textarea>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="en_shippingreturn">Shipping Return</label>
                                                        <textarea name="en_shippingreturn" id="summernote2" class="form-control">{{ $product->en_shippingreturn }}</textarea>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="en_additionalinformation">Additional
                                                            Information</label>
                                                        <textarea name="en_additionalinformation" id="summernote3" class="form-control">{{ $product->en_additionalinformation }}</textarea>
                                                    </div>

                                                     <div class="input__group mb-25">
                                                        <label for="primary_image">Primary Image</label>
                                                        <input type="file" class="form-control putImage1"
                                                            name="primary_image"  id="primary_image">
                                                        <img src="{{ asset('uploads/products/'.$product->primary_image) }}" class="rounded mt-1" id="target1" style="width: 80px;" />
                                                        {{-- error message --}}
                                                        @error('primary_image')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="image_two">Image 2</label>
                                                        <input type="file" class="form-control putImage2"
                                                            name="image_two" id="image_two">
                                                        <img src="{{ asset('uploads/products/'.$product->image_two) }}" class="rounded mt-1" id="target2" style="width: 80px;" />
                                                        {{-- error message --}}
                                                        @error('image_two')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="image_three">Image 3</label>
                                                        <input type="file" class="form-control putImage3"
                                                            name="image_three" id="image_three">
                                                        <img src="{{ asset('uploads/products/'.$product->image_three) }}" class="rounded mt-1" id="target3" style="width: 80px;" />
                                                        {{-- error message --}}
                                                        @error('image_three')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="image_four">Image 4</label>
                                                        <input type="file" class="form-control putImage4"
                                                            name="image_four" id="image_four">
                                                        <img src="{{ asset('uploads/products/'.$product->image_four) }}" class="rounded mt-1" id="target4" style="width: 80px;" />
                                                        {{-- error message --}}
                                                        @error('image_four')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="image_five">Image 5</label>
                                                        <input type="file" class="form-control putImage5"
                                                            name="image_five" id="image_five">
                                                        <img src="{{ asset('uploads/products/'.$product->image_five) }}" class="rounded mt-1" id="target5" style="width: 80px;" />
                                                        {{-- error message --}}
                                                        @error('image_five')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    {{-- Status Switches --}}
                                                    <div class="input__group mb-25">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" value="1" name="status"
                                                                class="custom-control-input" id="customSwitch1"
                                                                {{ $product->status ? 'checked' : '' }}>
                                                            <label class="custom-control-label"
                                                                for="customSwitch1">Status</label>
                                                        </div>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" value="1" name="feature"
                                                                class="custom-control-input" id="customSwitch2"
                                                                {{ $product->feature ? 'checked' : '' }}>
                                                            <label class="custom-control-label"
                                                                for="customSwitch2">Featured Product</label>
                                                        </div>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" value="1" name="best_sale"
                                                                class="custom-control-input" id="customSwitch3"
                                                                {{ $product->best_sale ? 'checked' : '' }}>
                                                            <label class="custom-control-label" for="customSwitch3">Best
                                                                Selling</label>
                                                        </div>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" value="1" name="on_sale"
                                                                class="custom-control-input" id="customSwitch4"
                                                                {{ $product->on_sale ? 'checked' : '' }}>
                                                            <label class="custom-control-label" for="customSwitch4">On
                                                                Sale</label>
                                                        </div>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" value="1" name="on_arrival"
                                                                class="custom-control-input" id="customSwitch5"
                                                                {{ $product->on_arrival ? 'checked' : '' }}>
                                                            <label class="custom-control-label" for="customSwitch5">New
                                                                Arrival</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- German Section --}}
                                            <div class="col-md-6">
                                                <div class="form-vertical__item bg-style">
                                                    <div class="item-top mb-30">
                                                        <h2>German:</h2>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="gn-product-name">Product Name</label>
                                                        <input type="text" class="form-control" id="gn-product-name"
                                                            name="gn_name" value="{{ $product->gn_name }}"
                                                            placeholder="Name">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="gn_about">About</label>
                                                        <textarea name="gn_about" id="gn_about" class="form-control" placeholder="About">{{ $product->gn_about }}</textarea>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="gn_description">Description</label>
                                                        <textarea name="gn_description" id="summernote4" class="form-control">{{ $product->gn_description }}</textarea>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="gn_shippingreturn">Shipping Return</label>
                                                        <textarea name="gn_shippingreturn" id="summernote5" class="form-control">{{ $product->gn_shippingreturn }}</textarea>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="gn_additionalinformation">Additional
                                                            Information</label>
                                                        <textarea name="gn_additionalinformation" id="summernote6" class="form-control">{{ $product->gn_additionalinformation }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group text-center mt-30">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                                                Update Product</button>
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
    $('.tag_two').select2({
        tags: true,
        tokenSeparators: [',']
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

