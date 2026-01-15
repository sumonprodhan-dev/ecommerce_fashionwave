@extends('frontend.layouts.app')

@push('title')
    <title>Profile</title>
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
                                <h2>Profile</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="assets/dashboard">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                                        <div class="col-md-6">
                                            <form enctype="multipart/form-data" method="POST"
                                                action="assets/profile/update">
                                                <input type="hidden" name="_token"
                                                    value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">
                                                <div class="form-vertical__item bg-style">
                                                    <div class="item-top mb-30">
                                                        <h2>Edit Profile</h2>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Admin Name</label>
                                                        <input type="text" class="form-control" id="admin_name"
                                                            name="admin_name" value="John Doe" required="">
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Admin Email</label>
                                                        <input type="text" class="form-control" id="admin_email"
                                                            name="admin_email" value="admin@gmail.com" required="">
                                                    </div>


                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Image</label>
                                                        <input type="file" class="form-control putImage1" name="image"
                                                            id="image">
                                                        <img width="150" class="admin_image mt-2"
                                                            src="assets/images/icons/user.svg" id="target1" />
                                                    </div>
                                                    <div class="input__button">
                                                        <button type="submit" class="btn btn-blue">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                            <form enctype="multipart/form-data" method="POST"
                                                action="assets/profile/change-password">
                                                <input type="hidden" name="_token"
                                                    value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">
                                                <div class="form-vertical__item bg-style">
                                                    <div class="item-top mb-30">
                                                        <h2>Change Password</h2>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Current Password</label>
                                                        <input type="password" class="form-control" id="current_password"
                                                            name="password" />
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">New Password</label>
                                                        <input type="password" class="form-control" id="new_password"
                                                            name="new_password" />
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">Confirm Password</label>
                                                        <input type="password" class="form-control" id="confirm_password"
                                                            name="confirm_password" />
                                                    </div>
                                                    <div class="input__button">
                                                        <button type="submit" class="btn btn-blue">Update</button>
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
        </div>
    </div>
@endsection

@push('scripts')
@endpush