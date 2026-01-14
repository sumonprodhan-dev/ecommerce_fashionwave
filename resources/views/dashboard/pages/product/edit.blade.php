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
                                    <form enctype="multipart/form-data" method="POST"
                                        action="http://127.0.0.1:8000/admin/product/update">
                                        <input type="hidden" name="_token"
                                            value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">
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
                                <p class="description-text"></p></textarea>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">ShippingReturn</label>
                                                        <textarea name="en_shippingreturn" id="summernote2" class="form-control"><p class="return-text"></p>
                                    <p class="return-text"></p>
                                    <p class="return-text"></p></textarea>
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
                        </ul></textarea>
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
                                                        <textarea name="fr_additionalinformation" id="summernote6" class="form-control"><p class="description-text"></p><p class="description-text"></p><p class="description-text"></p><ul class="additional-feature"><li class="single-feature">
                            </li>
                        </ul></textarea>
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
@endpush
