{{-- chart in public/js/main.js --}}

<!-- Sales Chart Start -->
    <div class="container-fluid pt-4 px-4">

        {{-- <canvas id="myChart"></canvas> --}}

        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Judul Video</h6>
                        <a href="">Show All</a>
                    </div>
                    <canvas id="worldwide-sales"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Views & Revenue</h6>
                        <a href="">Show All</a>
                    </div>
                    <canvas id="views-revenue"></canvas>
                </div>
            </div>
        </div>
    </div>
<!-- Sales Chart End -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>