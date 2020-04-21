@extends('layoutadmin.template')
@section('title', 'EVENT DATA - YOTIKET')
@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li class="active">EVENT DATA</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xl-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="/create_event" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i>ADD</a>
          </div>
          @if(Session::get('alert_message'))
                <div class="alert alert-success">
                  <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif
            <br>
            <div class="card shadow mb-5">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">EVENT DATA - YOTIKET</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>EVENT NAME</th>
                      <th>IMPLEMENTATION DATE</th>
                      <th>INFO EVENT</th>
                      <th>NUMBER OF TICKETS</th>
                      <th>PRICE</th>
                      <th>IMAGE</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>

                @php $no=0; @endphp
                @foreach($datas as $data)
                @php $no++; @endphp

                <tr>
                  <td>{{$no}}</td>
                  <td>{{$data->nama_event}}</td>
                  <td>{{$data->tgl_pelaksanaan}}</td>
                  <td>{{$data->info}}</td>
                  <td>{{$data->jumlah_tiket}}</td>
                  <td>{{$data->harga}}</td>
                  <td><img width="100" src="{{asset('images/'.$data->foto)}}"></td>
                  <td>
                    <a href="{{url('/event/edit/'.$data->id_event)}}" class="btn btn-success" role="button" title="EDIT DATA"><i class="fas fa-edit"></i></a>
                    <a href="{{url('/event/hapus/'.$data->id_event)}}" class="btn btn-danger" role="button" title="DELETE DATA"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>


                </tbody>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      
    </section>

    <!-- /.content -->
  </div>
</div>

<!-- /.content-wrapper -->
<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#event').DataTable();
  });
</script>
<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{url('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js')}}"></script>
@stop
