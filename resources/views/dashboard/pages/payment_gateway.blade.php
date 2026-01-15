@extends('dashboard.layouts.app')

@push('title')
@endpush

@push('styles')
@endpush

@section('content')
    <!-- Container Fluid-->
    <div class="page-content">
        <div class="container-fluid">
            <div id="table-url" data-url="http://127.0.0.1:8000/admin/currency-list"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2>Payment Gateway</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Payment Gateway</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="customers__area bg-style mb-30">
                        <div class="customers__table">
                            <table id="BlogTable" class="dataTableHover row-border data-table-filter table-style">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($gateways as $gateway)
                                        <tr>
                                            <td>{{ $gateway->name }}</td>
                                            <td>
                                                <img src="{{ asset('dashboard/assets/images/payment-gateway/paypal.png') }}"
                                                    alt="{{ $gateway->name }}">
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" class="btn-action" data-bs-toggle="modal"
                                                    data-bs-target="#createModal1" data-id="{{ $gateway->id }}"
                                                    data-name="{{ $gateway->name }}"
                                                    data-image="{{ asset('uploaded_files/payment-gateway/' . $gateway->image) }}"
                                                    data-key1="{{ $gateway->credentials['client_id'] ?? ($gateway->credentials['publishable_key'] ?? '') }}"
                                                    data-key2="{{ $gateway->credentials['client_secret'] ?? ($gateway->credentials['secret_key'] ?? '') }}"
                                                    data-mode="{{ $gateway->credentials['mode'] ?? 'sandbox' }}"
                                                    data-status="{{ $gateway->status }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <div>
                                            <h4 class="text-center">No Payment Gateway Found</h4>
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row-->

            <!-- Modal -->
            <div class="modal fade" id="createModal1" tabindex="-1" role="dialog" aria-labelledby="createModalTitle1"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title text-white" id="editModalLongTitle">PayPal</h5>
                            <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        {{-- <form enctype="multipart/form-data" method="POST" action="#">
                            <div class="modal-body">
                                @csrf
                                <div class="input__group mb-25">
                                    <label for="question">Name</label>
                                    <input type="text" name="name" placeholder="Name"
                                        value="{{ $gateway->name ?? '' }}">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Thumbnail</label>
                                    <input type="file" class="putImage1" name="image" id="image">
                                    <img class="admin_image"
                                        src="http://127.0.0.1:8000/uploaded_files/payment-gateway/paypal.png"
                                        id="target1" />
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Client ID</label>
                                    <input type="text" name="paypal_client_id"
                                        value="Aa8_7OJaxmCZQpkx3hbzdySDz7haM0Wu6c6MmzX5JQsaywY1i8HMJo2ddnr9-pEEoRP3qvjflrxOVoXL">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Client Secret</label>
                                    <input type="text" name="paypal_client_secret"
                                        value="{{ $gateway->paypal_client_secret ?? '' }}">
                                </div>
                                <div class="input__group mb-25">
                                    <label>Mode</label>
                                    <select name="paypal_sandbox" id="">
                                        <option value="1" selected>
                                            Sandbox</option>
                                        <option value="0">
                                            Live</option>
                                    </select>
                                </div>
                                <div class="input__group mb-25">
                                    <label>Visibility</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="status" class="custom-control-input"
                                            id="customSwitch1" value="1" checked>
                                        <label class="custom-control-label" for="customSwitch1">Click here to
                                            check/uncheck visibility.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form> --}}
                        {{-- <form id="editGatewayForm" enctype="multipart/form-data" method="POST"
                            action="{{ route('admin.gateway.update', $gateway->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <input type="hidden" name="id" id="gateway_id">

                                <div class="input__group mb-25">
                                    <label>Gateway Name</label>
                                    <input type="text" name="name" id="edit_name" readonly>
                                </div>

                                <div class="input__group mb-25">
                                    <label>Thumbnail</label>
                                    <input type="file" class="putImage1" name="image" id="image">
                                    <img class="admin_image" src="" id="target1"
                                        style="width: 100px; margin-top: 10px;" />
                                </div>

                                <div class="input__group mb-25">
                                    <label id="label_one">Field One</label>
                                    <input type="text" name="key_one" id="edit_key_one">
                                </div>

                                <div class="input__group mb-25">
                                    <label id="label_two">Field Two</label>
                                    <input type="text" name="key_two" id="edit_key_two">
                                </div>

                                <div class="input__group mb-25">
                                    <label>Mode</label>
                                    <select name="mode" id="edit_mode">
                                        <option value="sandbox">Sandbox</option>
                                        <option value="live">Live</option>
                                    </select>
                                </div>
                                @if ($gateway->slug !== 'cash-on-delivery')
                                    <div class="form-group">
                                        <label>Key One</label>
                                        <input type="text" name="key_one"
                                            value="{{ $gateway->credentials['key_one'] ?? '' }}">
                                    </div>
                                @else
                                    <p class="text-muted">Cash on delivery does not require any credentials.</p>
                                @endif

                                <div class="input__group mb-25">
                                    <label>Visibility</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="status" class="custom-control-input" id="edit_status"
                                            value="1">
                                        <label class="custom-control-label" for="edit_status">Click here to check/uncheck
                                            visibility.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form> --}}
                        <form id="editGatewayForm" enctype="multipart/form-data" method="POST"
                            action="{{ route('admin.gateway.update', $gateway->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <input type="hidden" name="id" id="gateway_id">

                                <div class="input__group mb-25">
                                    <label>Gateway Name</label>
                                    <input type="text" name="name" id="edit_name" class="form-control" readonly>
                                </div>

                                <div class="input__group mb-25">
                                    <label>Thumbnail</label>
                                    <input type="file" class="putImage1 form-control" name="image" id="image">
                                    <img class="admin_image" src="" id="target1"
                                        style="width: 100px; margin-top: 10px;" />
                                </div>

                                <div id="credentials_fields">
                                    <div class="input__group mb-25">
                                        <label id="label_one">Field One</label>
                                        <input type="text" name="key_one" id="edit_key_one" class="form-control">
                                    </div>

                                    <div class="input__group mb-25">
                                        <label id="label_two">Field Two</label>
                                        <input type="text" name="key_two" id="edit_key_two" class="form-control">
                                    </div>

                                    <div class="input__group mb-25">
                                        <label>Mode</label>
                                        <select name="mode" id="edit_mode" class="form-control">
                                            <option value="sandbox">Sandbox</option>
                                            <option value="live">Live</option>
                                        </select>
                                    </div>
                                </div>

                                <div id="cod_message" style="display: none;">
                                    <p class="text-muted alert alert-secondary">Cash on delivery does not require any
                                        credentials.</p>
                                </div>

                                <div class="input__group mb-25 mt-3">
                                    <label>Visibility</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="status" class="custom-control-input"
                                            id="edit_status" value="1">
                                        <label class="custom-control-label" for="edit_status">Click here to toggle
                                            visibility.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            {{-- <div class="modal fade" id="createModal2" tabindex="-1" role="dialog" aria-labelledby="createModalTitle2"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title text-white" id="editModalLongTitle">Stripe</h5>
                            <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form enctype="multipart/form-data" method="POST"
                            action="http://127.0.0.1:8000/admin/payment-gateway-update/stripe">
                            <div class="modal-body">
                                <input type="hidden" name="_token" value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">
                                <div class="input__group mb-25">
                                    <label for="question">Name</label>
                                    <input type="text" name="name" placeholder="Name" value="Stripe">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Thumbnail</label>
                                    <input type="file" class="putImage1" name="image" id="image">
                                    <img class="admin_image"
                                        src="http://127.0.0.1:8000/uploaded_files/payment-gateway/payment-method.png"
                                        id="target1" />
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Key</label>
                                    <input type="text" name="stripe_key" value="">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Secret</label>
                                    <input type="text" name="stripe_secret" value="">
                                </div>
                                <div class="input__group mb-25">
                                    <label>Visibility</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="status" class="custom-control-input"
                                            id="customSwitch1" value="1" checked>
                                        <label class="custom-control-label" for="customSwitch1">Click here to
                                            check/uncheck visibility.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="createModal3" tabindex="-1" role="dialog" aria-labelledby="createModalTitle3"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title text-white" id="editModalLongTitle">Razorpay</h5>
                            <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form enctype="multipart/form-data" method="POST"
                            action="http://127.0.0.1:8000/admin/payment-gateway-update/razorpay">
                            <div class="modal-body">
                                <input type="hidden" name="_token" value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">
                                <div class="input__group mb-25">
                                    <label for="question">Name</label>
                                    <input type="text" name="name" placeholder="Name" value="Razorpay">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Thumbnail</label>
                                    <input type="file" class="putImage1" name="image" id="image">
                                    <img class="admin_image"
                                        src="http://127.0.0.1:8000/uploaded_files/payment-gateway/razorpay.png"
                                        id="target1" />
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Key</label>
                                    <input type="text" name="razorpay_key" value="">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Secret</label>
                                    <input type="text" name="razorpay_secret" value="">
                                </div>
                                <div class="input__group mb-25">
                                    <label>Visibility</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="status" class="custom-control-input"
                                            id="customSwitch1" value="1" checked>
                                        <label class="custom-control-label" for="customSwitch1">Click here to
                                            check/uncheck visibility.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="createModal4" tabindex="-1" role="dialog" aria-labelledby="createModalTitle4"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title text-white" id="editModalLongTitle">Bank</h5>
                            <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form enctype="multipart/form-data" method="POST"
                            action="http://127.0.0.1:8000/admin/payment-gateway-update/bank">
                            <div class="modal-body">
                                <input type="hidden" name="_token" value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">
                                <div class="input__group mb-25">
                                    <label for="question">Name</label>
                                    <input type="text" name="name" placeholder="Name" value="Bank">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Thumbnail</label>
                                    <input type="file" class="putImage1" name="image" id="image">
                                    <img class="admin_image"
                                        src="http://127.0.0.1:8000/uploaded_files/payment-gateway/bank.png"
                                        id="target1" />
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Bank Name</label>
                                    <input type="text" name="bank_name" value="bank">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Swift Code</label>
                                    <input type="text" name="swift_code" value="">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Routing number</label>
                                    <input type="text" name="bank_routing_number" value="asdf">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Account number</label>
                                    <input type="text" name="bank_account_number" value="">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Account Holder Name</label>
                                    <input type="text" name="bank_account_holder_name" value="">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Branch</label>
                                    <input type="text" name="bank_account_branch" value="us">
                                </div>
                                <div class="input__group mb-25">
                                    <label>Visibility</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="status" class="custom-control-input"
                                            id="customSwitch1" value="1" checked>
                                        <label class="custom-control-label" for="customSwitch1">Click here to
                                            check/uncheck visibility.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="createModal5" tabindex="-1" role="dialog" aria-labelledby="createModalTitle5"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title text-white" id="editModalLongTitle">Sslcommerz</h5>
                            <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form enctype="multipart/form-data" method="POST"
                            action="http://127.0.0.1:8000/admin/payment-gateway-update/sslcommerz">
                            <div class="modal-body">
                                <input type="hidden" name="_token" value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">
                                <div class="input__group mb-25">
                                    <label for="question">Name</label>
                                    <input type="text" name="name" placeholder="Name" value="Sslcommerz">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Thumbnail</label>
                                    <input type="file" class="putImage1" name="image" id="image">
                                    <img class="admin_image"
                                        src="http://127.0.0.1:8000/uploaded_files/payment-gateway/sslcommerz.png"
                                        id="target1" />
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Key</label>
                                    <input type="text" name="sslcz_store_id" value="">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Secret</label>
                                    <input type="text" name="sslcz_store_password" value="">
                                </div>
                                <div class="input__group mb-25">
                                    <label>Visibility</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="status" class="custom-control-input"
                                            id="customSwitch1" value="1" checked>
                                        <label class="custom-control-label" for="customSwitch1">Click here to
                                            check/uncheck visibility.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="createModal6" tabindex="-1" role="dialog" aria-labelledby="createModalTitle6"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title text-white" id="editModalLongTitle">Mollie</h5>
                            <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form enctype="multipart/form-data" method="POST"
                            action="http://127.0.0.1:8000/admin/payment-gateway-update/mollie">
                            <div class="modal-body">
                                <input type="hidden" name="_token" value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">
                                <div class="input__group mb-25">
                                    <label for="question">Name</label>
                                    <input type="text" name="name" placeholder="Name" value="Mollie">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Thumbnail</label>
                                    <input type="file" class="putImage1" name="image" id="image">
                                    <img class="admin_image"
                                        src="http://127.0.0.1:8000/uploaded_files/payment-gateway/mollie.png"
                                        id="target1" />
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Key</label>
                                    <input type="text" name="mollie_key" value="">
                                </div>
                                <div class="input__group mb-25">
                                    <label>Visibility</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="status" class="custom-control-input"
                                            id="customSwitch1" value="1" checked>
                                        <label class="custom-control-label" for="customSwitch1">Click here to
                                            check/uncheck visibility.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="createModal7" tabindex="-1" role="dialog" aria-labelledby="createModalTitle7"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title text-white" id="editModalLongTitle">Paystack</h5>
                            <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form enctype="multipart/form-data" method="POST"
                            action="http://127.0.0.1:8000/admin/payment-gateway-update/paystack">
                            <div class="modal-body">
                                <input type="hidden" name="_token" value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">
                                <div class="input__group mb-25">
                                    <label for="question">Name</label>
                                    <input type="text" name="name" placeholder="Name" value="Paystack">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Thumbnail</label>
                                    <input type="file" class="putImage1" name="image" id="image">
                                    <img class="admin_image"
                                        src="http://127.0.0.1:8000/uploaded_files/payment-gateway/paystack.png"
                                        id="target1" />
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Key</label>
                                    <input type="text" name="paystack_public_key" value="">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Secret</label>
                                    <input type="text" name="paystack_secret_key" value="">
                                </div>
                                <div class="input__group mb-25">
                                    <label>Visibility</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="status" class="custom-control-input"
                                            id="customSwitch1" value="1" checked>
                                        <label class="custom-control-label" for="customSwitch1">Click here to
                                            check/uncheck visibility.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="createModal8" tabindex="-1" role="dialog" aria-labelledby="createModalTitle8"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title text-white" id="editModalLongTitle">Instamojo</h5>
                            <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form enctype="multipart/form-data" method="POST"
                            action="http://127.0.0.1:8000/admin/payment-gateway-update/instamojo">
                            <div class="modal-body">
                                <input type="hidden" name="_token" value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">
                                <div class="input__group mb-25">
                                    <label for="question">Name</label>
                                    <input type="text" name="name" placeholder="Name" value="Instamojo">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Thumbnail</label>
                                    <input type="file" class="putImage1" name="image" id="image">
                                    <img class="admin_image"
                                        src="http://127.0.0.1:8000/uploaded_files/payment-gateway/instamojo.png"
                                        id="target1" />
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Api Key</label>
                                    <input type="text" name="im_api_key" value="">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Auth Token</label>
                                    <input type="text" name="im_auth_token" value="">
                                </div>
                                <div class="input__group mb-25">
                                    <label>Visibility</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="status" class="custom-control-input"
                                            id="customSwitch1" value="1" checked>
                                        <label class="custom-control-label" for="customSwitch1">Click here to
                                            check/uncheck visibility.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="createModalCod" tabindex="-1" role="dialog"
                aria-labelledby="createModalTitleCod" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title text-white" id="editModalLongTitle">Cash On Delivey</h5>
                            <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form enctype="multipart/form-data" method="POST"
                            action="http://127.0.0.1:8000/admin/payment-gateway-update/cod">
                            <div class="modal-body">
                                <input type="hidden" name="_token" value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">
                                <div class="input__group mb-25">
                                    <label for="question">Name</label>
                                    <input type="text" name="name" placeholder="Name" value="Cash On Delivey">
                                </div>
                                <div class="input__group mb-25">
                                    <label for="exampleInputEmail1">Thumbnail</label>
                                    <input type="file" class="putImage1" name="image" id="image">
                                    <img class="admin_image"
                                        src="http://127.0.0.1:8000/uploaded_files/payment-gateway/cod.jpg"
                                        id="target1" />
                                </div>

                                <div class="input__group mb-25">
                                    <label>Visibility</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="status" class="custom-control-input"
                                            id="customSwitch1" value="1" checked>
                                        <label class="custom-control-label" for="customSwitch1">Click here to
                                            check/uncheck visibility.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).on('click', '.btn-action', function() {
            // টেবিলের data attributes থেকে ডেটা নেওয়া
            let id = $(this).data('id');
            let name = $(this).data('name');
            let image = $(this).data('image');
            let key1 = $(this).data('key1');
            let key2 = $(this).data('key2');
            let mode = $(this).data('mode');
            let status = $(this).data('status');

            // ফর্ম ফিল্ডে ভ্যালু সেট করা
            $('#gateway_id').val(id);
            $('#edit_name').val(name);
            $('#edit_key_one').val(key1);
            $('#edit_key_two').val(key2);
            $('#edit_mode').val(mode);
            $('#target1').attr('src', image);

            // স্ট্যাটাস চেক করা
            if (status == 1) {
                $('#edit_status').prop('checked', true);
            } else {
                $('#edit_status').prop('checked', false);
            }

            // গেটওয়ে অনুযায়ী লেবেল পরিবর্তন করা
            if (name === 'PayPal') {
                $('#label_one').text('Client ID');
                $('#label_two').text('Client Secret');
            } else if (name === 'Stripe') {
                $('#label_one').text('Publishable Key');
                $('#label_two').text('Secret Key');
            } else {
                $('#label_one').text('App Key');
                $('#label_two').text('App Secret');
            }

            // আপনার এডিট বাটনের ক্লিকের ভেতর এই লজিকটি দিন
            function editGateway(gateway) {
                $('#gateway_id').val(gateway.id);
                $('#edit_name').val(gateway.name);

                // ইমেজ প্রিভিউ সেট করা
                $('#target1').attr('src', '/uploads/gateways/' + gateway.image);

                // COD চেক করা
                if (gateway.slug === 'cod') {
                    $('#credentials_fields').hide(); // ইনপুট ফিল্ড লুকিয়ে ফেলবে
                    $('#cod_message').show(); // মেসেজ দেখাবে
                } else {
                    $('#credentials_fields').show(); // ইনপুট ফিল্ড দেখাবে
                    $('#cod_message').hide(); // মেসেজ লুকাবে

                    // ভ্যালু পপুলেট করা
                    $('#edit_key_one').val(gateway.credentials.key_one || gateway.credentials.client_id || gateway
                        .credentials.publishable_key);
                    $('#edit_key_two').val(gateway.credentials.key_two || gateway.credentials.client_secret ||
                        gateway.credentials.secret_key);
                    $('#edit_mode').val(gateway.credentials.mode);

                    // ডাইনামিক লেবেল সেট করা (ঐচ্ছিক)
                    if (gateway.slug === 'paypal') {
                        $('#label_one').text('Client ID');
                        $('#label_two').text('Client Secret');
                    } else if (gateway.slug === 'stripe') {
                        $('#label_one').text('Publishable Key');
                        $('#label_two').text('Secret Key');
                    }
                }
            }
        });
    </script>
@endpush
