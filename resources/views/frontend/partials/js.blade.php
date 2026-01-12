<!-- Js file  -->
<script src=" {{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
<script src=" {{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src=" {{ asset('frontend/assets/js/plugins.js') }}"></script>
<script src=" {{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src=" {{ asset('frontend/assets/js/main.js') }}"></script>
<script src=" {{ asset('frontend/assets/js/front/custom.js') }}"></script>
<script src=" {{ asset('frontend/assets/js/front/extra.js') }}"></script>
<script src=" {{ asset('frontend/assets/js/front/sweat_aleart.js') }}"></script>
<script src=" {{ asset('frontend/assets/js/common.js') }}"></script>

<script src="{{ asset('admin/assets/js/toastr.min.js') }}"></script>

<script>
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
</script>

<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"),
                tag = document.getElementsByTagName("script")[0];
            script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36)
                .substring(7);
            tag.parentNode.insertBefore(script, tag);
        };
        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
            loader);
    })(window, document);
</script>
<script src="{{ asset('frontend/assets/js/pages/home.js') }}"></script>
<script src="{{ asset('frontend/assets/js/pages/cart.js') }}"></script>