@extends('layoutadmin.template')
@section('title', 'TRANSACTION - YOTIKET') 
@section('container')

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
            <form role="form" method="post" action="{{ url('/transaksi/store') }} " enctype="multimedia/form-data">
            {{ csrf_field() }}
            <div class="modal-body">
              <div class="box-body">
                <div class="form-group">
                        <label for="role">EVENT NAME</label>
                            <select name="id_event" id="id_event" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="10">
                                @foreach ($event as $isi)
                            <option value="{{ $isi->id_event }}" >{{ $isi->nama_event }}</option>
                                @endforeach
                </div>
                <div class="form-group">
                  <label>MEMBER NAME</label>
                  <input type="text" name="nama_member" class="form-control" placeholder="MEMBER NAME" required>
                </div>
                <div class="form-group">
                  <label>ID CARD NUMBER</label>
                  <input type="text" name="no_ktp" class="form-control" placeholder="ID CARD NUMBER" required>
                </div>
                <div class="form-group">
                  <label>PHONE NUMBER</label>
                  <input type="text" name="telp" class="form-control" placeholder="PHONE NUMBER" required>
                </div>
                <div class="form-group">
                  <label>QUANTITY</label>
                  <input type="text" name="qty" class="form-control" placeholder="QUANTITY" required>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i>SAVE</button>
                <button type="reset" class="btn btn-danger" title="Reset Data"> <i class="glyphicon glyphicon-refresh"></i>RESET</button>
                <button  class="btn btn-success" title="Back "> <i class="glyphicon glyphicon-refresh"></i>BACK</button>
              </div>
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