@extends('layoutadmin.template')

@section('title', 'UPDATE TRANSACTION') 

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li class="active">UPDATE TRANSACTION</li>
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
            <form role="form" method="post" action="{{ url('/transaksi/update') }} " enctype="multimedia/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $datas->id_transaksi}}"> <br/>
              <div class="box-body">
                <div class="form-group">
                  <label>EVENT NAME</label>
                  <input type="text" name="nama_event" class="form-control" value="{{ $datas->nama_event }}" hidden>
                </div>
                <div class="form-group">
                  <label>MEMBER NAME</label>
                  <input type="nama_member" name="tgl_pelaksanaan" class="form-control" value="{{ $datas->nama_member }}" required>
                </div>
                <div class="form-group">
                  <label>ID CARD NUMBER</label>
                  <input type="text" name="no_ktp" class="form-control" value="{{ $datas->no_ktp }}" required>
                </div>
                <div class="form-group">
                  <label>PHONE NUMBER</label>
                  <input type="text" name="telp" class="form-control" value="{{ $datas->telp }}" required>
                </div>
                <div class="form-group">
                  <label>QUANTITY</label>
                  <input type="text" name="qty" class="form-control" value="{{ $datas->qty }}" required>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Save Data"> <i class="glyphicon glyphicon-floppy-disk"></i>SAVE</button>
                <button type="reset" class="btn btn-danger" title="Reset Data"> <i class="glyphicon glyphicon-refresh"></i>RESET</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
@endsection