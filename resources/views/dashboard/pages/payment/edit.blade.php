@extends('dashboard.layouts.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__content__left">
                        <div class="breadcrumb__title">
                            <h2 style="color: #000;">Payment Gateway Settings</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($gateways as $gateway)
            <div class="col-md-6 mb-4">
                <div class="gallery__area bg-style" style="padding: 20px; border-radius: 8px;">
                    <div class="gallery__content">
                        <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
                            <h4 style="color: #000; font-weight: 600; margin: 0;">{{ $gateway->name }}</h4>
                            <img src="{{ asset('uploads/gateways/'.$gateway->image) }}" width="100" style="object-fit: contain;">
                        </div>

                        <form action="{{ route('admin.gateway.update', $gateway->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label" style="color: #000; font-weight: 500;">Gateway Image</label>
                                <input type="file" name="image" class="form-control form-control-sm">
                            </div>

                            @if($gateway->slug !== 'cash-on-delivery')
                                <div class="mb-3">
                                    <label class="form-label" style="color: #000; font-weight: 500;">
                                        {{ $gateway->slug == 'paypal' ? 'Client ID' : ($gateway->slug == 'stripe' ? 'Publishable Key' : 'API Key') }}
                                    </label>
                                    <input type="text" name="key_one" class="form-control form-control-sm" 
                                           style="color: #000;" value="{{ $gateway->credentials['key_one'] ?? '' }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" style="color: #000; font-weight: 500;">
                                        {{ $gateway->slug == 'paypal' ? 'Secret Key' : ($gateway->slug == 'stripe' ? 'Secret Key' : 'Secret Password') }}
                                    </label>
                                    <input type="text" name="key_two" class="form-control form-control-sm" 
                                           style="color: #000;" value="{{ $gateway->credentials['key_two'] ?? '' }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" style="color: #000; font-weight: 500;">Environment Mode</label>
                                    <select name="mode" class="form-control form-control-sm" style="color: #000;">
                                        <option value="sandbox" {{ ($gateway->credentials['mode'] ?? '') == 'sandbox' ? 'selected' : '' }}>Sandbox</option>
                                        <option value="live" {{ ($gateway->credentials['mode'] ?? '') == 'live' ? 'selected' : '' }}>Live</option>
                                    </select>
                                </div>
                            @else
                                <div class="alert alert-light border mb-3 text-center" style="color: #000; background: #f8f9fa;">
                                    <small>Cash on delivery does not require any credentials. Just manage status below.</small>
                                </div>
                            @endif

                            <div class="mb-4">
                                <label class="form-label" style="color: #000; font-weight: 500;">Status</label>
                                <select name="status" class="form-control form-control-sm" style="color: #000;">
                                    <option value="1" {{ $gateway->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $gateway->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-blue btn-sm px-3">
                                    Update {{ $gateway->name }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection