@extends('frontend.layouts.app')

@push('title')
    <title>Profile</title>
@endpush

@push('styles')
@endpush

@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Update Profile</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                    <li class="page-item">Update Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- Profile Page area start here  -->
    <div class="profile-page-area section">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="section-wrap account-page-sidemenu user-profile-sidebar">
                        <nav class="account-page-menu">
                            <ul>
                                <li class="active"><a href="profile.html"><i class="fas fa-user"></i>My Profile</a></li>
                                <li class=""><a href="my-orders.html"><i class="fas fa-box-open"></i>My Order</a></li>
                                <li class=""><a href="my-review.html"><i class="fas fa-user-edit"></i>My Review</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="user-profile-right-part">
                        <div class="user-profile-content-box edit-user-profile-page-box">

                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="true">
                                        Change Profile Info</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-password-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-password" type="button" role="tab"
                                        aria-controls="pills-password" aria-selected="false">
                                        Change Password</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <div class="profile-form mt-5">
                                        <form enctype="multipart/form-data"
                                            action="http://127.0.0.1:8000/user/profile-update" method="post">
                                            <input type="hidden" name="_token"
                                                value="DKSQN4iA4cRMNlognbDBi6YtF3AHDeeT9jJW3yso">
                                            <div class="profile-top mb-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="profile-image">
                                                        <img class="avater-image" id="target1"
                                                            src="data:image/png;base64,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"
                                                            alt="img">
                                                        <div class="custom-fileuplode">
                                                            <label for="fileuplode" class="file-uplode-btn"><i
                                                                    class="fas fa-camera"></i></label>
                                                            <input type="file" id="fileuplode" name="image"
                                                                class="putImage1">
                                                        </div>
                                                    </div>
                                                    <div class="author-info">
                                                        <h3>rony</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="fname">Name</label>
                                                        <input type="text" class="form-control" id="name" name="name"
                                                            value="rony">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="date">Date of Brith</label>
                                                        <input type="date" class="form-control" id="date" name="dob"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="Gender">Gender</label>
                                                        <select class="form-control" id="Gender" name="gender">
                                                            <option value="Male">
                                                                Male</option>
                                                            <option value="Female">
                                                                Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" class="form-control" id="phone" name="number"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="lname">Street Address</label>
                                                        <input type="text" class="form-control" id="street_address"
                                                            name="street_address" value="">

                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email"
                                                            value="rony@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="about-info">About</label>
                                                        <textarea class="form-control info-box" id="about-info" name="about"
                                                            rows="3" placeholder="Say something about yourself"></textarea>
                                                    </div>
                                                    <div class="form-button text-center">
                                                        <button type="submit" class="form-btn primary-btn">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-password" role="tabpanel"
                                    aria-labelledby="pills-password-tab">
                                    <form class="change-password-form mt-5" method="post"
                                        action="http://127.0.0.1:8000/user/change-password">
                                        <input type="hidden" name="_token" value="DKSQN4iA4cRMNlognbDBi6YtF3AHDeeT9jJW3yso">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="CurrentPassword"
                                                        name="current_password" placeholder="Current Password"
                                                        required="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="NewPassword"
                                                        name="new_password" placeholder="New Password" required="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="ConfirmPassword"
                                                        name="confirm_password" placeholder="Confirm Password"
                                                        required="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-button text-center">
                                                    <button type="submit" class="form-btn primary-btn">Save
                                                        Change</button>
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