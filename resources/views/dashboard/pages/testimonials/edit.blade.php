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
                                        action="http://127.0.0.1:8000/admin/testimonial/update">
                                        <input type="hidden" name="_token"
                                            value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-vertical__item bg-style">
                                                    <input type="hidden" name="id" value="1">
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Name</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" value="Andrew Jaimond" required=""
                                                            placeholder="Name">
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">English Description</label>
                                                        <textarea name="en_description" id="en_description" class="form-control" placeholder="Description">Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Proin eget tortor risus. Proin eget tortor risus. Curabitur arcu</textarea>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">German Description</label>
                                                        <textarea name="fr_description" id="fr_description" class="form-control" placeholder="Description">German description</textarea>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Star</label>
                                                        <select name="star" id="star" class="form-control">
                                                            <option value="">---SELECT A STAR---</option>
                                                            <option value="1">
                                                                1 Star</option>
                                                            <option value="2">
                                                                2 Star</option>
                                                            <option value="3">
                                                                3 Star</option>
                                                            <option value="4">
                                                                4 Star</option>
                                                            <option value="5" selected>
                                                                5 Star</option>
                                                        </select>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Image</label>
                                                        <input type="file" class="form-control putImage1" name="image"
                                                            id="image">
                                                        <img class="admin_image"
                                                            src="http://127.0.0.1:8000/uploaded_files/testimonial/testimonal-image-1.png"
                                                            id="target1" />
                                                    </div>
                                                    <div class="input__button">
                                                        <button type="submit" class="btn btn-blue">Update</button>
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
