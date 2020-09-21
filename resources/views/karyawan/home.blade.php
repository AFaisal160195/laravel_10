@extends('layouts.master')
@section('content-header')
{{-- <h1> Trial Content-Header</h1> --}}
<h1>
    Karyawan
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Karyawan</li>
  </ol>
  @endsection
  @section('content')
<div class="col-md-12">
    <a href="/karyawan/add">
        <button type="button" class="btn btn-block btn-primary btn-flat">Tambah Karyawan
        </button>
    </a>
</div>
<div class="col-md-8">
    <div class="box">
    <div class="box-header">
    <h3 class="box-title">Table Karyawn</h3>
</div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table table-condensed">
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jabatan</th>
                      </tr>
                        @foreach ($data as $d)
                      <tr>
                        <td style="width: 10px">{{$loop->iteration}}</td>
                        <td>{{$d->nama}}</td>
                        <td>{{$d->alamat}}</td>
                        <td>{{$d->jabatan}}</td>
                        <td>
                            <a href="/karyawan/edit/{{$d->id}}" class="btn btn-success">EDIT</a>
                            <a href="/karyawan/destroy/{{$d->id}}" class="btn btn-danger">DELETE</a>
                        </td>
                      </tr>
                         @endforeach
                      </table>
                <!-- /.box -->
              </div>
            </div>
      </div>
      <!-- /.row -->

  @endsection
