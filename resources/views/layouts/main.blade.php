@if (Auth::check())
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Radar Creator | {{ $title }}</title>
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <!-- ... -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href=  "img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}"   rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="{{ asset('css/cstyle.css') }}" rel="stylesheet">

    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @include('layouts.sidebar')

        <!-- Content Start -->
        <div class="content">
            
            @include('layouts.navbar')
            
            @yield('content')

            @include('layouts.footer')
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/chart/myChart.js') }}"></script>
    {{-- <script src="{{ asset('lib/chart/chart.min.js') }}"></script> --}}
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Template Javascript -->
    <script src=  "{{ asset('js/main.js') }}"></script>

    <!-- Date Picker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />    
    <script >
$(document).ready(function (){
    $('#category').on('change',function(){
     var category = $(this).val();
     $.ajax({
        url:"/uploaded",
        type: "GET",
        data:{'category':category },
        success:function(data){
            var user = data.user;
            var html ='';
            if (user.length > 0) {
                for(let i = 0; i<user.length;i++){
              html +='';
                }
            }else{
                html +='<tr>\ <td>Tidak ditemukan</td>\ </tr>';

            }
        }
     });
    });
});
</script>

<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>

<!-- Initialize the plugin: -->
<script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>



<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>


<script>
    $(function() {
        $('input[name="revenuedate_harian"]').daterangepicker({
            opens: 'left',
            locale: {
                format: 'YYYY-MM-DD'
                
                
            },
            
        }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>


<script>
    $(function() {
        $('input[name="revenuedate_bulan"]').daterangepicker({
            "opens": "left",
            "autoApply": true,
            "locale": {
                "format": "YYYY-MM"
            },
            "minYear": 2000,
            "maxYear": 2099,
            "startDate": moment().startOf('month'),
            "endDate": moment().endOf('month')
        }, function(start, end, label) {
            console.log(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
        });
    });
</script>
</body>

</html>
@endif