@extends('layoutadmin.template')
@section('title', 'TRANSACTION DATA - YOTIKET')
@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li class="active">TRANSACTION DATA</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xl-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="/create_transaksi" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
          @if(Session::get('alert_message'))
                <div class="alert alert-success">
                  <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif
            <br>
            <div class="card shadow mb-5">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">TRANSACTION DATA - YOTIKET</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>EVENT NAME</th>
                      <th>MEMBER NAME</th>
                      <th>ID CARD NUMBER</th>
                      <th>PHONE NUMBER</th>
                      <th>QUANTITY</th>
                    </tr>
                  </thead>
                  <tbody>

                @php $no=0; @endphp
                @foreach($datas as $data)
                @php $no++; @endphp

                <tr>
                  <td>{{$no}}</td>
                  <td>{{$data->nama_event}}</td>
                  <td>{{$data->nama_member}}</td>
                  <td>{{$data->no_ktp}}</td>
                  <td>{{$data->telp}}</td>
                  <td>{{$data->qty}}</td>
                  <td>
                    <a href="{{url('/event/detail/'.$data->id_transaksi)}}" class="btn btn-success" role="button" title="EDIT DATA"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{{url('/event/hapus/'.$data->id_transaksi)}}" class="btn btn-danger" role="button" title="DELETE DATA"><i class="glyphicon glyphicon-trash"></i></a>
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
  <script src="{{url('js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{url('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{url('js/demo/datatables-demo.js')}}"></script>
@stop
