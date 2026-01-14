<script src="{{ asset('dashboard/assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendor/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendor/js/admin/summernote-init.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/data-table-page.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/image-preview.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/main.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/summernote-lite.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/toastr.min.js') }}"></script>

<script src="{{ asset('dashboard/assets/vendor/plugins/chart.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendor/js/admin/dashboard.js') }}"></script>
<script>
    multipleLineChart = document.getElementById('multipleLineChart').getContext('2d'),
        multipleLineChart2 = document.getElementById('multipleLineChart2').getContext('2d')
    var myMultipleLineChart = new Chart(multipleLineChart, {
        type: 'bar',
        data: {
            labels: ['15 Nov', '14 Nov', '13 Nov', '12 Nov', '11 Nov', '10 Nov', '09 Nov', '08 Nov',
                '07 Nov', '06 Nov', '05 Nov', '04 Nov', '03 Nov', '02 Nov', '01 Nov', '31 Oct',
                '30 Oct', '29 Oct', '28 Oct', '27 Oct', '26 Oct', '25 Oct', '24 Oct', '23 Oct',
                '22 Oct', '21 Oct', '20 Oct', '19 Oct', '18 Oct', '17 Oct',
            ],
            datasets: [{
                label: "Product Sales",
                borderColor: "#6777ef",
                pointBorderColor: "#FFF",
                pointBackgroundColor: "#6777ef",
                pointBorderWidth: 2,
                pointHoverRadius: 4,
                pointHoverBorderWidth: 1,
                pointRadius: 4,
                backgroundColor: '#6777ef',
                fill: true,
                borderWidth: 2,
                data: ['0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',
                    '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',
                ]
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            tooltips: {
                bodySpacing: 4,
                mode: "nearest",
                intersect: 0,
                position: "nearest",
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            },
            layout: {
                padding: {
                    left: 15,
                    right: 15,
                    top: 15,
                    bottom: 15
                }
            }
        }
    });
    var myMultipleLineChart2 = new Chart(multipleLineChart2, {
        type: 'bar',
        data: {
            labels: ['15 Nov', '14 Nov', '13 Nov', '12 Nov', '11 Nov', '10 Nov', '09 Nov', '08 Nov',
                '07 Nov', '06 Nov', '05 Nov', '04 Nov', '03 Nov', '02 Nov', '01 Nov', '31 Oct',
                '30 Oct', '29 Oct', '28 Oct', '27 Oct', '26 Oct', '25 Oct', '24 Oct', '23 Oct',
                '22 Oct', '21 Oct', '20 Oct', '19 Oct', '18 Oct', '17 Oct',
            ],
            datasets: [{
                label: "Earning $",
                borderColor: "#66bb6a",
                pointBorderColor: "#FFF",
                pointBackgroundColor: "#66bb6a",
                pointBorderWidth: 2,
                pointHoverRadius: 4,
                pointHoverBorderWidth: 1,
                pointRadius: 4,
                backgroundColor: '#66bb6a',
                fill: true,
                borderWidth: 2,
                data: ['0', '0', '0', '0', '540.00', '0', '0', '0', '0', '0', '0', '0', '0', '0',
                    '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',
                    '0',
                ]
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            tooltips: {
                bodySpacing: 4,
                mode: "nearest",
                intersect: 0,
                position: "nearest",
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            },
            layout: {
                padding: {
                    left: 15,
                    right: 15,
                    top: 15,
                    bottom: 15
                }
            }
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<<<<<<< HEAD
<script>
=======
{{-- <script>
>>>>>>> 9509e7274e11799fea425ef941f59fafcf719a3d
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
<<<<<<< HEAD
=======
</script> --}}

<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
</script>

<script>
    // Success Message check
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif

    // Error Message check
    @if (Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
>>>>>>> 9509e7274e11799fea425ef941f59fafcf719a3d
</script>