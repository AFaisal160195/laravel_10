@extends('layouts.master')
@section('content-header')
{{-- <h1> Trial Content-Header</h1> --}}
<h1>
    Position
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Position</li>
  </ol>
  @endsection
  @section('content')
<div class="col-md-12">
    <a href="/position/create">
        <button type="button" class="btn btn-block btn-primary btn-flat">Tambah Position
        </button>
    </a>
</div>
<div class="col-md-8">
    <div class="box">
    <div class="box-header">
    <h3 class="box-title">Table Position</h3>
</div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table table-condensed">
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Position</th>
                        <th>Department</th>
                      </tr>
                        @foreach ($data as $d)
                      <tr>
                        <td style="width: 10px">{{$loop->iteration}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->department->name}}</td>
                        <td>
                            <a href="/position/edit/{{$d->id}}" class="btn btn-success">EDIT</a>
                            <a href="/position/destroy/{{$d->id}}" class="btn btn-danger">DELETE</a>
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
