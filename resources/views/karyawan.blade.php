<!DOCTYPE html>
<html>
    <head>
        <title>How to Use Yajra Datatables in Laravel 8</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="mb-4 text-center">Data list karyawan</h1>
            <div class="pull-right mb-2">
                <a class="btn btn-success" onClick="add()" href="javascript:void(0)"> Add Karyawan</a>
            </div>
            <table class="table table-bordered yajra-datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Gaji</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <!-- boostrap company model -->
<div class="modal fade" id="karyawan-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="KaryawanModal"></h4>
            </div>
    <div class="modal-body">
        <form action="javascript:void(0)" id="KaryawanForm" name="KaryawanForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Name" maxlength="50" required="">
                    </div>
                </div>  
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">NIP</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nip" name="nip" placeholder="Enter NIP" maxlength="50" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Gaji</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="gaji" name="gaji" placeholder="Gaji" required="">
                    </div>
                </div>
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="btn-save">Save changes
                </button>
            </div>
        </form>
    </div>
    <div class="modal-footer">
    </div>
    </div>
    </div>
</div>
<!-- end bootstrap model -->
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        // $(document).ready( function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // function listTable() {
          var table = $('.yajra-datatable').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('karyawans') }}",
              columns: [
                  {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                  {data: 'nama', name: 'nama'},
                  {data: 'nip', name: 'nip'},
                  {data: 'gaji', name: 'gaji'},
                  {data: 'image', name: 'image'},
                  {
                      data: 'action', 
                      name: 'action', 
                      orderable: false, 
                      searchable: false
                  },
              ]
          });
        // }

        function add(){
            $('#KaryawanForm').trigger("reset");
            $('#KaryawanModal').html("Add Karyawan");
            $('#karyawan-modal').modal('show');
            $('#id').val('');
        }   
        function editFunc(id){
            $.ajax({
                type:"POST",
                url: "{{ url('edit-karyawan') }}",
                data: { id: id },
                dataType: 'json',
                success: function(res){
                    $('#KaryawanModal').html("Edit Karyawan");
                    $('#karyawan-modal').modal('show');
                    $('#id').val(res.id);
                    $('#nama').val(res.nama);
                    $('#gaji').val(res.gaji);
                    $('#nip').val(res.nip);
                    table.destroy();
                }
            });
        }  
        function deleteFunc(id){
            if (confirm("Delete Record?") == true) {
                var id = id;
                // ajax
                $.ajax({
                    type:"POST",
                    url: "{{ url('delete-karyawan') }}",
                    data: { id: id },
                    dataType: 'json',
                    success: function(res){
                        var oTable = $('.yajra-datatable').dataTable();
                            oTable.fnDraw(false);
                    }
                });
            }
        }
        $('#KaryawanForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type:'POST',
                    url: "{{ url('store-karyawan')}}",
                    data: formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        $("#karyawan-modal").modal('hide');
                        var oTable = $('.yajra-datatable').dataTable();
                            oTable.fnDraw(false);
                        $("#btn-save").html('Submit');
                        $("#btn-save"). attr("disabled", false);
                    },
                    error: function(data){
                        console.log(data);
                    }
                });
        });

        // listTable()
// });
    </script>
</html>