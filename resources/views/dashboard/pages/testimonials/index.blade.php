@extends('dashboard.layouts.app')

@push('title')
@endpush

@push('styles')
@endpush

@section('content')
    <!-- Container Fluid-->
    <div class="page-content">
        <div class="container-fluid">

            <div id="table-url" data-url="http://127.0.0.1:8000/admin/testimonial"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2>Testimonial List</h2>
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
                    <div class="customers__area bg-style mb-30">
                        <div class="customers__table">
                            <div id="TestimonialTable_wrapper" class="dataTables_wrapper no-footer">
                                <div class="dataTables_length" id="TestimonialTable_length"><label>Show <select
                                            name="TestimonialTable_length" aria-controls="TestimonialTable" class="">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label>
                                </div>
                                <div id="TestimonialTable_filter" class="dataTables_filter d-flex">
                                    <label>Search:<input type="search" class="" placeholder=""
                                            aria-controls="TestimonialTable">
                                    </label>
                                    {{-- create button --}}
                                <div class="float-right ms-4">
                                    <a href="{{ route('admin.testimonial.create') }}"
                                        class="btn btn-primary float-right">Create</a>
                                </div>
                                </div>
                                <div id="TestimonialTable_processing" class="dataTables_processing" style="display: none;">
                                    Processing...
                                </div>
                                
                                <table id="TestimonialTable"
                                    class="dataTableHover row-border data-table-filter table-style dataTable no-footer"
                                    role="grid" aria-describedby="TestimonialTable_info" style="width: 1196px;">
                                    <thead>
                                        <tr role="row">

                                            <th class="sorting_asc" tabindex="0" aria-controls="TestimonialTable"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Image: activate to sort column descending" style="width: 91px;">
                                                Image</th>
                                            <th class="sorting" tabindex="0" aria-controls="TestimonialTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Name: activate to sort column ascending" style="width: 221px;">
                                                Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="TestimonialTable"
                                                rowspan="1" colspan="1"
                                                aria-label="English Description: activate to sort column ascending"
                                                style="width: 199px;">English Description</th>
                                            <th class="sorting" tabindex="0" aria-controls="TestimonialTable"
                                                rowspan="1" colspan="1"
                                                aria-label="German Description: activate to sort column ascending"
                                                style="width: 221px;">German Description</th>
                                            <th class="sorting text-center" tabindex="0" aria-controls="TestimonialTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Star: activate to sort column ascending" style="width: 112px;">
                                                Star</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Action"
                                                style="width: 112px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($testimonials as $key => $testimonial)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><img
                                                        src="https://zairito.liveprojectacademys.com/uploaded_files/testimonial/testimonal-image-1.png"
                                                        border="0" width="80" class="img-rounded" align="center">
                                                </td>
                                                <td><span
                                                        class="d-block font-weight-bold fs-6">{{ $testimonial->name }}</span>
                                                    <span
                                                        class="d-block text-success">{{ $testimonial->designation }}</span>
                                                </td>
                                                <td>{{ Str::limit($testimonial->en_description, 50) ?? '' }}</td>
                                                <td>{{ Str::limit($testimonial->gn_description, 50) ?? '' }}</td>
                                                <td class="text-center">{{ $testimonial->rating }}</td>
                                                <td>
                                                    <div class="action__buttons"><a
                                                            href="{{ route('admin.testimonial.edit', $testimonial->id) }}"
                                                            class="btn-action"><i
                                                                class="fa-solid fa-pen-to-square"></i></a><a
                                                            href="#" class="btn-action delete"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <div>
                                                <h1 class="text-center">No Testimonial Found</h1>
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div>
                                    {{ $testimonials->links('pagination::bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row-->
        </div>
    </div>
@endsection

@push('scripts')
@endpush
