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
                                <h2>Edit Slider</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/dashboard">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Slider</li>
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
                                    <form enctype="multipart/form-data" method="POST" action="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-vertical__item bg-style">
                                                    <div class="item-top mb-30">
                                                        <h2>English:</h2>
                                                    </div>
                                                    <input type="hidden" name="id" id="id" value="2">
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Title</label>
                                                        <input type="text" id="en_title" name="en_title"
                                                            value="The Summer!!" placeholder="Title">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Sub Title</label>
                                                        <input type="text" id="en_sub_title" name="en_sub_title"
                                                            value="Summer Sale" placeholder="Sub Title">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Button Text</label>
                                                        <input type="text" id="en_btn_text" name="en_btn_text"
                                                            value="See Colections" placeholder="Button Text">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="fr_btn_text">Button Link</label>
                                                        <input type="text" id="fr_btn_text" name="fr_btn_text"
                                                            value="button text" placeholder="Button Text">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="en_description">Description</label>
                                                        <textarea id="en_description" name="en_description" placeholder="Description">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed</textarea>
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="background_image">BackGround Image</label>
                                                        <input type="file" class="putImage2" name="background_image"
                                                            id="background_image">
                                                        <img class="admin_image"
                                                            src="http://127.0.0.1:8000/uploaded_files/slider/hero-banner-bg-2.png"
                                                            id="target2" />
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
                                                        <label for="fr_title">Title</label>
                                                        <input type="text" id="fr_title" name="fr_title" value="title"
                                                            placeholder="Title">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="fr_sub_title">Sub Title</label>
                                                        <input type="text" id="fr_sub_title" name="fr_sub_title"
                                                            value="sub title" placeholder="Sub Title">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="fr_btn_text">Button Text</label>
                                                        <input type="text" id="fr_btn_text" name="fr_btn_text"
                                                            value="button text" placeholder="Button Text">
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="fr_description">Description</label>
                                                        <textarea id="fr_description" name="fr_description" placeholder="Description">Description</textarea>
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
