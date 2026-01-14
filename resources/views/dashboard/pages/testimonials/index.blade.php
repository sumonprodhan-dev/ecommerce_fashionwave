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
                                        </select> entries</label></div>
                                <div id="TestimonialTable_filter" class="dataTables_filter"><label>Search:<input
                                            type="search" class="" placeholder=""
                                            aria-controls="TestimonialTable"></label></div>
                                <div id="TestimonialTable_processing" class="dataTables_processing" style="display: none;">
                                    Processing...</div>
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
                                            <th class="sorting" tabindex="0" aria-controls="TestimonialTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Star: activate to sort column ascending" style="width: 112px;">
                                                Star</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Action"
                                                style="width: 112px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><img
                                                    src="https://zairito.liveprojectacademys.com/uploaded_files/testimonial/testimonal-image-1.png"
                                                    border="0" width="80" class="img-rounded" align="center">
                                            </td>
                                            <td>Andrew Jaimond</td>
                                            <td>Nulla porttitor...</td>
                                            <td>very good company</td>
                                            <td>5 star</td>
                                            <td>
                                                <div class="action__buttons"><a href="testimonial-edit.html"
                                                        class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a><a
                                                        href="#" class="btn-action delete"><i
                                                            class="fas fa-trash-alt"></i></a></div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1"><img
                                                    src="https://zairito.liveprojectacademys.com/uploaded_files/testimonial/testimonal-image-1.png"
                                                    border="0" width="80" class="img-rounded" align="center">
                                            </td>
                                            <td>Mike Clark</td>
                                            <td>Nulla porttitor...</td>
                                            <td>very good company</td>
                                            <td>5 star</td>
                                            <td>
                                                <div class="action__buttons"><a href="testimonial-edit.html"
                                                        class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a><a
                                                        href="#" class="btn-action delete"><i
                                                            class="fas fa-trash-alt"></i></a></div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><img
                                                    src="https://zairito.liveprojectacademys.com/uploaded_files/testimonial/testimonal-image-2.png"
                                                    border="0" width="80" class="img-rounded" align="center">
                                            </td>
                                            <td>Rey mysterio</td>
                                            <td>Nulla porttitor...</td>
                                            <td>very good company</td>
                                            <td>5 star</td>
                                            <td>
                                                <div class="action__buttons"><a href="testimonial-edit.html"
                                                        class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a><a
                                                        href="#" class="btn-action delete"><i
                                                            class="fas fa-trash-alt"></i></a></div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1"><img
                                                    src="https://zairito.liveprojectacademys.com/uploaded_files/testimonial/testimonal-image-3.png"
                                                    border="0" width="80" class="img-rounded" align="center">
                                            </td>
                                            <td>Big Show</td>
                                            <td>Nulla porttitor...</td>
                                            <td>very good company</td>
                                            <td>5 star</td>
                                            <td>
                                                <div class="action__buttons"><a href="testimonial-edit.html"
                                                        class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a><a
                                                        href="#" class="btn-action delete"><i
                                                            class="fas fa-trash-alt"></i></a></div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><img
                                                    src="https://zairito.liveprojectacademys.com/uploaded_files/testimonial/testimonial-v2-image-1.png"
                                                    border="0" width="80" class="img-rounded" align="center">
                                            </td>
                                            <td>Michael Beven</td>
                                            <td>Nulla porttitor...</td>
                                            <td>very good company</td>
                                            <td>5 star</td>
                                            <td>
                                                <div class="action__buttons"><a href="testimonial-edit.html"
                                                        class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a><a
                                                        href="#" class="btn-action delete"><i
                                                            class="fas fa-trash-alt"></i></a></div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1"><img
                                                    src="https://zairito.liveprojectacademys.com/uploaded_files/testimonial/testimonial-v2-image-2.png"
                                                    border="0" width="80" class="img-rounded" align="center">
                                            </td>
                                            <td>Randy orton</td>
                                            <td>Nulla porttitor...</td>
                                            <td>very good company</td>
                                            <td>5 star</td>
                                            <td>
                                                <div class="action__buttons"><a href="testimonial-edit.html"
                                                        class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a><a
                                                        href="#" class="btn-action delete"><i
                                                            class="fas fa-trash-alt"></i></a></div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><img
                                                    src="https://zairito.liveprojectacademys.com/uploaded_files/testimonial/testimonial-v2-image-3.png"
                                                    border="0" width="80" class="img-rounded" align="center">
                                            </td>
                                            <td>Jhon Cena</td>
                                            <td>Nulla porttitor...</td>
                                            <td>very good company</td>
                                            <td>5 star</td>
                                            <td>
                                                <div class="action__buttons"><a href="testimonial-edit.html"
                                                        class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a><a
                                                        href="#" class="btn-action delete"><i
                                                            class="fas fa-trash-alt"></i></a></div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1"><img
                                                    src="https://zairito.liveprojectacademys.com/uploaded_files/testimonial/testimonial-v2-image-3.png"
                                                    border="0" width="80" class="img-rounded" align="center">
                                            </td>
                                            <td>Sheymas</td>
                                            <td>Nulla porttitor...</td>
                                            <td>very good company</td>
                                            <td>5 star</td>
                                            <td>
                                                <div class="action__buttons"><a href="testimonial-edit.html"
                                                        class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a><a
                                                        href="#" class="btn-action delete"><i
                                                            class="fas fa-trash-alt"></i></a></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="dataTables_info" id="TestimonialTable_info" role="status"
                                    aria-live="polite">Showing 1 to 8 of 8 entries</div>
                                <div class="dataTables_paginate paging_simple_numbers" id="TestimonialTable_paginate"><a
                                        class="paginate_button previous disabled" aria-controls="TestimonialTable"
                                        data-dt-idx="0" tabindex="-1"
                                        id="TestimonialTable_previous">Previous</a><span><a
                                            class="paginate_button current" aria-controls="TestimonialTable"
                                            data-dt-idx="1" tabindex="0">1</a></span><a
                                        class="paginate_button next disabled" aria-controls="TestimonialTable"
                                        data-dt-idx="2" tabindex="-1" id="TestimonialTable_next">Next</a></div>
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
