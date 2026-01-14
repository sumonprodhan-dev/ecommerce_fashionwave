@extends('dashboard.layouts.app')

@push('title')
@endpush

@push('styles')
@endpush

@section('content')
    <!-- Container Fluid-->
    <div class="page-content">
        <div class="container-fluid">

            <div id="table-url" data-url="http://127.0.0.1:8000/admin/slider"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2>Slider</h2>
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
                    <div class="customers__area bg-style mb-30">
                        <div class="item-title">
                            <div class="col-xs-6">
                                <a href="http://127.0.0.1:8000/admin/slider/create" class="btn btn-md btn-info">Add
                                    Slider</a>
                            </div>
                        </div>
                        <div class="customers__table">
                            <div id="SliderTable_wrapper" class="dataTables_wrapper no-footer">
                                <div class="dataTables_length" id="SliderTable_length"><label>Show <select
                                            name="SliderTable_length" aria-controls="SliderTable" class="">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                                <div id="SliderTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                            class="" placeholder="" aria-controls="SliderTable"></label></div>
                                <div id="SliderTable_processing" class="dataTables_processing" style="display: none;">
                                    Processing...</div>
                                <table id="SliderTable" class="row-border data-table-filter table-style dataTable no-footer"
                                    role="grid" aria-describedby="SliderTable_info" style="width: 1241px;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="SliderTable"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Background Image: activate to sort column descending"
                                                style="width: 81px;">SL.</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="SliderTable"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Background Image: activate to sort column descending"
                                                style="width: 81px;">Background Image</th>
                                            <th class="sorting" tabindex="0" aria-controls="SliderTable" rowspan="1"
                                                colspan="1" aria-label="Title: activate to sort column ascending"
                                                style="width: 180px;">Title</th>
                                            <th class="sorting" tabindex="0" aria-controls="SliderTable" rowspan="1"
                                                colspan="1" aria-label="Sub Title: activate to sort column ascending"
                                                style="width: 200px;">Sub Title</th>
                                            <th class="sorting" tabindex="0" aria-controls="SliderTable" rowspan="1"
                                                colspan="1" aria-label="Description: activate to sort column ascending"
                                                style="width: 100px;">Description</th>
                                            <th class="sorting" tabindex="0" aria-controls="SliderTable" rowspan="1"
                                                colspan="1" aria-label="Button Text: activate to sort column ascending"
                                                style="width: 100px;">Button Text</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Action"
                                                style="width: 100px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td>01</td>
                                            <td class="sorting_1"><img
                                                    src="assets/images/background/header-background.png" border="0"
                                                    width="80" class="img-rounded" align="center">
                                            </td>
                                            <td>dgdgdg</td>
                                            <td>fgfg</td>
                                            <td>tyty</td>
                                            <td>fgfg</td>
                                            <td>
                                                <div class="action__buttons"><a href="slider-edit.html"
                                                        class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a><a
                                                        href="#" class="btn-action delete"><i
                                                            class="fas fa-trash-alt"></i></a></div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>02</td>
                                            <td class="sorting_1"><img
                                                    src="assets/images/background/header-background.png" border="0"
                                                    width="80" class="img-rounded" align="center">
                                            </td>

                                            <td>tfhgh</td>
                                            <td>t</td>
                                            <td>t</td>
                                            <td>t</td>
                                            <td>
                                                <div class="action__buttons"><a href="slider-edit.html"
                                                        class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a><a
                                                        href="#" class="btn-action delete"><i
                                                            class="fas fa-trash-alt"></i></a></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="dataTables_info" id="SliderTable_info" role="status" aria-live="polite">
                                    Showing 1 to 2 of 2 entries</div>
                                <div class="dataTables_paginate paging_simple_numbers" id="SliderTable_paginate"><a
                                        class="paginate_button previous disabled" aria-controls="SliderTable"
                                        data-dt-idx="0" tabindex="-1" id="SliderTable_previous">Previous</a><span><a
                                            class="paginate_button current" aria-controls="SliderTable" data-dt-idx="1"
                                            tabindex="0">1</a></span><a class="paginate_button next disabled"
                                        aria-controls="SliderTable" data-dt-idx="2" tabindex="-1"
                                        id="SliderTable_next">Next</a></div>
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
