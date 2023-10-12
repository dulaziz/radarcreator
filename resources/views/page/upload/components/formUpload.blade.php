<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between">
            <h6 class="mb-0">Upload</h6>
            <a href="/uploaded">Uploaded</a>
        </div>
        <hr>

        <form action="/upload/tambah_upload" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="mb-3 row">
                <label for="group" class="col-sm-2 col-form-label">Group</label>
                <div class="col-sm-5 mb-3 mb-md-0">
                    <select class="form-select" name="id_group" aria-label="Default select example">
                        <option selected>Pilih</option>
                        @foreach ($post as $data)
                        <option value="{{ $data->id_group }}">{{ $data->group }}</option>
                                @endforeach
                    </select>
                </div>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="tanggal" id="uploadDate" value="{{ date('Y-m-d') }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="videoTitle" class="col-sm-2 col-form-label">Video Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="video_title" id="videoTitle">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="videoFile" class="col-sm-2 col-form-label text-start">Upload Video</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control bg-dark" id="upload" name="video"  onchange="PreviewImage();"  id="videoFile">
                    <div class="mt-3 preview-vid">
                        <video controls id="uploadPreview" class="w-100"></video>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="prodTeam" class="col-sm-2 col-form-label text-start">Production Team</label>
                <div class="col-sm-10">

                    @foreach ($userss as $data)
                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-md-3 text-start">
                            <div class="form-check">
                                <input type="checkbox"  name="produksi[]" class="form-check-input" value="{{ $data->jabatan }}" >
                               
                                <label class="form-check-label" for="produser">
                              {{$data->jabatan}}
                            </label>
                            
                            </div>
                        </div>
                     
                        <div class="col-md-9">
                            <select type="checkbox"  class="form-select"  name="name[]"  >
                            <option value="" selected disabled></option>

                            @foreach ($users as $data)
                            <option  value="{{ $data->name }}">{{$data->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @endforeach
                    <input type="checkbox"  name="produksi[]" class="form-check-input" checked value="Admin" >
                    <input type="hidden" class="form-control" name="name[]"  value="admin" >

                               <label class="form-check-label" for="produser">
                             Admin
                </div>
            </div>
            

            <div class="mb-3 row">
                <label for="platformPublish" class="col-sm-2 col-form-label text-start">Platform Publish</label>
                <div class="col-sm-10 d-flex align-items-center"> 
                    <div class="d-flex gap-4 align-items-center flex-wrap">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="platform[]" value="facebook" id="facebook">
                            <label class="form-check-label" for="facebook">
                            Facebook
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="platform[]" value="instagram" id="instagram">
                            <label class="form-check-label" for="instagram">
                            Instagram
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="platform[]" value="tiktok"id="tiktok">
                            <label class="form-check-label" for="tiktok">
                            Tiktok
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="platform[]" value="youtube" id="youtube">
                            <label class="form-check-label" for="youtube">
                            Youtube
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="platform[]" value="twiter" id="twitter">
                            <label class="form-check-label" for="twitter">
                            Twitter
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="d-grid justify-content-md-end">
                <button type="submit" class="btn btn-primary px-5"><i class="bi bi-cloud-arrow-up-fill me-2"></i>Upload</button>
            </div>
        </form>


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
    @foreach ($userss as $data)

    <script>           
    
      $('#d-checkup').click(function(e) {             
            if($(this).prop('checked') == true)$('#color').removeAttr("disabled");           
              else $('select').attr("disabled","disabled");;        
                   });    


                        </script>
                        @endforeach
    <script type="text/javascript">
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript">
        $(function() {
        
        $('input[name="datefilter"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });
        
        $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });
        
        $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
        
        });
    </script>
    


<script type="text/javascript">
function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("upload").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>
<script src=  "{{ asset('js/main.js') }}"></script>
