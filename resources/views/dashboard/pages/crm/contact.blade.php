@extends('dashboard.layouts.app')

@push('title')
@endpush

@push('styles')
@endpush

@section('content')
    <!-- Container Fluid-->
    <div class="page-content">
        <div class="container-fluid">
            <div id="table-url" data-url="http://127.0.0.1:8000/admin/contact-us/index"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/dashboard">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
                            <div id="ContactUsTable_wrapper" class="dataTables_wrapper no-footer">
                                <div class="dataTables_length" id="ContactUsTable_length"><label>Show <select
                                            name="ContactUsTable_length" aria-controls="ContactUsTable" class="">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                                <div id="ContactUsTable_filter" class="dataTables_filter"><label>Search:<input
                                            type="search" class="" placeholder=""
                                            aria-controls="ContactUsTable"></label></div>
                                <div id="ContactUsTable_processing" class="dataTables_processing" style="display: none;">
                                    Processing...</div>
                                <table id="ContactUsTable"
                                    class="dataTableHover row-border data-table-filter table-style dataTable no-footer"
                                    role="grid" aria-describedby="ContactUsTable_info" style="width: 1196px;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="ContactUsTable"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending" style="width: 279px;">
                                                Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="ContactUsTable" rowspan="1"
                                                colspan="1" aria-label="Email: activate to sort column ascending"
                                                style="width: 224px;">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="ContactUsTable" rowspan="1"
                                                colspan="1"
                                                aria-label="Contact Number: activate to sort column ascending"
                                                style="width: 185px;">Contact Number</th>
                                            <th class="sorting" tabindex="0" aria-controls="ContactUsTable" rowspan="1"
                                                colspan="1" aria-label="Message: activate to sort column ascending"
                                                style="width: 205px;">Message</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Action"
                                                style="width: 103px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Sanford Pinnock</td>
                                            <td>sanford.pinnock@hotmail.com</td>
                                            <td>(31) 6725-2743</td>
                                            <td>Reword helps your team co...</td>
                                            <td>
                                                <div class="action__buttons"><a href="javascript:void(0)" class="btn-action"
                                                        data-bs-toggle="modal" data-bs-target="#viewModal1"
                                                        title="View"><i class="fas fa-eye"></i></a><a href=""
                                                        class="btn-action delete"><i class="fas fa-trash-alt"></i></a></div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">sSqwNuihqBqSPfvN sSqwNuihqBqSPfvN</td>
                                            <td>SXJtLc.hdpbmj@spinapp.bar</td>
                                            <td>wIDhDMAEVsozDVsiriOUkbN</td>
                                            <td>wIDhDMAEVsozDVsiriOUkbN</td>
                                            <td>
                                                <div class="action__buttons"><a href="javascript:void(0)" class="btn-action"
                                                        data-bs-toggle="modal" data-bs-target="#viewModal2"
                                                        title="View"><i class="fas fa-eye"></i></a><a
                                                        href="
                                                                "
                                                        class="btn-action delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Lucy johnson</td>
                                            <td>lucyjohnson.web@gmail.com</td>
                                            <td>1234567890</td>
                                            <td>Hello,

                                                I trust this me...</td>
                                            <td>
                                                <div class="action__buttons"><a href="javascript:void(0)"
                                                        class="btn-action" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal3" title="View"><i
                                                            class="fas fa-eye"></i></a><a href=""
                                                        class="btn-action delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row-->
            <div class="modal fade" id="viewModal1" tabindex="-1" role="dialog" aria-labelledby="viewModalTitle1"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title text-white" id="viewModalLongTitle">View</h5>
                            <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                <b>Name:</b> Md Rony<br>
                                <b>Email:</b> tandtboysschool@gmail.com<br>
                                <b>Contact Number:</b> 01767671133<br>
                                <b>Message:</b><br>
                                test
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
