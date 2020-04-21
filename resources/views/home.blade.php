@extends('layoutadmin.template')
@section('title', 'HOME ADMIN - YOTIKET')
@section('container')

@if(Session::get('role')=='1')
<div class="container">
  <div class="panel-body">
  <h2 align="center">SELAMAT DATANG DI WEBSITE TIKET ONLINE - YOTIKET</h2>
  <h5 align="center">ANDA SEKARANG SEBAGAI ADMIN </h5>
  </div>
</div>
@else
<div class="container">
  <div class="panel-body">
  <h2 align="center">SELAMAT DATANG DI WEBSITE TIKET ONLINE - YOTIKET</h2>
  <h5 align="center">ANDA SEKARANG SEBAGAI PENYEDIA EVENT </h5>
  </div>
</div>
@endif

  @endsection