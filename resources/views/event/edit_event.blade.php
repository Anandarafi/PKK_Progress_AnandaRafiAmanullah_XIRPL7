@extends('layoutadmin.template')

@section('title', 'UPDATE EVENT') 

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li class="active">UPDATE EVENT</li>
      </ol>
    </section>
    @if($errors->any())
        <div class="alert alert-danger">
          <ul>
          @foreach($errors->all() as $error)
          <li><strong>{{ $error }}</strong></li>
          @endforeach
          </ul>
        </div>
        @endif
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($data as $datas)
            <form role="form" method="post" action="{{ url('/event/update') }} " enctype="multimedia/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $datas->id_event}}"> <br/>
              <div class="box-body">
                <div class="form-group">
                  <label>EVENT NAME</label>
                  <input type="text" name="nama_event" class="form-control" value="{{ $datas->nama_event }}" required>
                </div>
                <div class="form-group">
                  <label>IMPLEMENTATIONS Date</label>
                  <input type="date" name="tgl_pelaksanaan" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>INFO EVENT</label>
                  <input type="text" name="info" class="form-control" value="{{ $datas->info }}" required>
                </div>
                <div class="form-group">
                  <label>NUMBER OF TICKETS</label>
                  <input type="text" name="jumlah_tiket" class="form-control" value="{{ $datas->jumlah_tiket }}" required>
                </div>
                <div class="form-group">
                  <label>PRICE</label>
                  <input type="text" name="harga" class="form-control" value="{{ $datas->harga }}" required>
                </div>
                <div class="form-group">
                  <label>IMAGE</label>
                  <input type="file" name="foto" class="form-control" value="{{ $datas->foto }}" required>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Save Data"> <i class="glyphicon glyphicon-floppy-disk"></i>SAVE</button>
                <button type="reset" class="btn btn-danger" title="Reset Data"> <i class="glyphicon glyphicon-refresh"></i>RESET</button>
              </div>
            </form>
            @endforeach
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
@endsection