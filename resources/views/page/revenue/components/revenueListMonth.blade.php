<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h6 class="mb-0 text-start"><span class="text-muted">Revenue: </span>Bulanan</h6>
        <hr>

        

        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover mb-0">
                <thead class="text-center align-middle">
                    <tr class="text-white">
                        <th rowspan="2">No</th>
                        <th rowspan="2">Month</th>
                        <th colspan="3">Revenue/Month</th>
                        
                    </tr>
                    <tr class="text-white">
                        <th scope="col">Viewer</th>
                        <th scope="col">impression</th>
                        <th scope="col">Revenue</th>
                       
                    </tr>
                </thead>
                <tbody class="text-start">
                    
                @foreach($monthlyData as $data)
                    <tr>
                        <td class="text-center">01</td>
                        <td class="text-center">{{ date('F', mktime(0, 0, 0, $data->month, 1, $data->year)) }} {{ $data->year }}</td>
                        <td class="text-white text-center fw-bold">${{ $data->viewer }}</td>
                        <td class="text-white text-center fw-bold">${{ $data->impression }}</td>
            <td class="text-white text-center fw-bold">${{ $data->revenue }}</td>

                        {{-- Admin Sosmed Only --}}
                      
                        {{--End Admin Sosmed Only --}}
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="text-white">
                        <th colspan="2">
                            <h6 class="mb-0"><span class="text-muted">Total Revenue:</span> </h6>
                        </th>
                        <th colspan="3" class="text-warning text-center">${{$totals}}</th>
                    </tr>
                </tfoot>
            </table>
            
        </div>

    </div>
</div>
<!-- Recent Sales End -->

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Video & Revenue</h6>
                <canvas id="worldwide-sales"></canvas>
            </div>
        </div>


        
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Note</h6>
                <ul class="list-unstyled mb-0">
                    <li>Pendapatan Anda adalah:</li>
                    <li>Total revenue dari satu video, di bagi jumlah production team dalam pembuatan video tersebut.</li>
                    <br>
                    <li>Revenue Sharing:
                        <dt>1. 2000 > </dt>
                            <ul> 
                            <li>80 : 20</li></dd>
                            <li>20 : Production Team</li></dd>
                            </ul>
                        <dt>2. 2001 - 4000 </dt>
                            <ul>
                            <li>70 : 30</li></dd>
                            <li>30 : Production Team</li></dd>
                            </ul>
                        <dt>3. 4001 > </dt>
                            <ul>
                            <li>60 : 40</li></dd>
                            <li>40 : Production Team</li></dd>
                            </ul>
                    </li>
                    <br>
                    <li>Finance Radar Bogor Group.</li>
                </ul>
            </div>
        </div>
    </div>
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


<script>
        var ctx1 = document.getElementById('worldwide-sales').getContext('2d');
        var chart = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: 'Pendapatan Perbulan',
                    backgroundColor: "rgba(50, 130, 184, .7)",
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                    data: []
            },
            {
                        label: 'Impression Perbulan',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1,
                        data: []
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        fetch('/detailRevenue/{id}/getMonthlyRevenue')
            .then(response => response.json())
            .then(data => {
                data.forEach(item => {
                    chart.data.labels.push('Bulan ' + item.month);
                    chart.data.datasets[0].data.push(item.revenue);
                    chart.data.datasets[1].data.push(item.revenues);

                    
                });
                chart.update();
            });
    </script>

<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript">
        $(function() {
        
        $('input[name="revenuedate_harian"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });
        
        $('input[name="revenuedate_harian"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });
        
        $('input[name="revenuedate_harian"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
        
        });
    </script>
     <script type="text/javascript">
        $(function() {
        
        $('input[name="revenuedate_bulan"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });
        
        $('input[name="revenuedate_bulan"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });
        
        $('input[name="revenuedate_bulan"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
        
        });
    </script>
